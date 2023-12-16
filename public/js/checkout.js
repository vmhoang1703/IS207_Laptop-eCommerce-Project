$(document).ready(function () {
    $("#total-infor-btn__checkout").on("click", function () {
        // Move the productId declaration inside the click event handler
        var product = $(".cart-section");
        var productId = product.data("id");
        
        var updateSubtotal = $(this).data("update-subtotal");
        var quantity = $(this).data("quantity");

        // Redirect to the "/payment" route with updated data
        window.location.href = "/" + productId + "/payment?quantity=" + quantity;
    });

    $(".update-quantity input").on("change", function () {
        updateCheckout($(this));
    });
});

function updateCheckout(inputElement) {
    var quantity = inputElement.val();
    var product = inputElement.closest(".cart-section");
    var productId = product.data("id");

    $.ajax({
        type: "POST",
        url: "/checkout/update-quantity",
        headers: {
            "Content-Type": "application/json",
        },
        data: JSON.stringify({
            product_id: productId,
            quantity: quantity,
        }),
        success: function (data) {
            console.log(data.update_subtotal);
            product.find(".subtotal-price").text(data.update_subtotal);
            // Find the subtotal-price element within the total-infor__subtotal section
            var subtotalElement = $(".total-infor__subtotal .subtotal-price");

            // Update the content of the subtotal-price element
            subtotalElement.text(data.update_subtotal);

            // Update the data attributes of the checkout button
            // $("#total-infor-btn__checkout").data("update-subtotal", data.update_subtotal);
            $("#total-infor-btn__checkout").data("quantity", quantity);
        },
        error: function (error) {
            console.error("Error:", error);
        },
    });
}
