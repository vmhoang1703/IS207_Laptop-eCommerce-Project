$(document).ready(function () {
    // Attach event listeners to quantity inputs
    $(".product-quantity").on("change", function () {
        updateSubtotal($(this));
    });

    // Proceed to payment function
    $(".btn-payment").on("click", function () {
        var noticeError = $(".notice-error");
        var checkedCheckboxes = $(".form-check-input:checked");

        if (checkedCheckboxes.length === 0) {
            noticeError.html("Please select at least one item.");
            return;
        }

        // Additional validation logic if needed

        // If all conditions are met, proceed to payment
        alert("Proceed to payment successfully!");
        // For actual redirection, you can use window.location.href
        // window.location.href = "URL của trang thanh toán";
    });
});

function updateSubtotal(input) {
    var cartItemId = input.data("id");
    var newQuantity = input.val();

    // Make an Ajax request to update the quantity on the server
    $.ajax({
        url: "/cart/update",
        type: "POST",
        headers: {
            "Content-Type": "application/json",
        },
        data: JSON.stringify({
            cartItem_id: cartItemId,
            quantity: newQuantity,
        }),
        success: function (data) {
            var subtotalElement = $('.subtotal[data-id="' + cartItemId + '"]');
            if (subtotalElement.length) {
                subtotalElement.text("$" + data.update_subtotal); // Update the subtotal value
            }
        },
        error: function (error) {
            console.error("Error updating quantity:", error);
        },
    });
}

function deleteCartItem(cartItemId) {
    // Make an Ajax request to delete the cart item on the server
    $.ajax({
        url: "/cart/remove",
        type: "POST",
        headers: {
            "X-CSRF-TOKEN": "{{ csrf_token() }}",
        },
        data: {
            cartItem_id: cartItemId,
        },
        success: function (data) {
            // Remove the deleted cart item from the UI
            var deletedCartItem = document.querySelector('.line-item[data-id="' + cartItemId + '"]');
            if (deletedCartItem) {
                deletedCartItem.remove();
            }
        },
        error: function (error) {
            console.error("Error deleting cart item:", error);
        },
    });
}

