$(document).ready(addcart)
    function addcart() {
    $(".add-to-cart-btn").on("click", function () {
        var productId = $(this).data("product-id");

        $.ajax({
            url: "/cart/add",
            type: "POST",
            headers: {
                "Content-Type": "application/json",
                "X-CSRF-Token": csrfToken,
            },
            data: JSON.stringify({
                product_id: productId,
            }),
            success: function (response) {
                console.log(response);
            },
            error: function (error) {
                console.error(error);
            },
        });
    });
}
