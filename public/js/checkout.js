$(document).ready(function () {
    $(".update-quantity input").on("change", function () {
        updateCheckout($(this));
    });
});

function updateCheckout(inputElement) {
    var quantity = inputElement.val();
    var product = inputElement.closest('.cart-section');
    var productId = product.data('id'); // Lấy giá trị của data-id
    console.log(productId);

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
            product.find("#subtotal-price").text(data.update_subtotal);
        },
        error: function (error) {
            console.error("Error:", error);
        },
    });
}
