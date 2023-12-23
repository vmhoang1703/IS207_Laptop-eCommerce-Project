$(document).ready(heartaction)
function heartaction() {
    $(".heart1").on("click", function () {
        // Get the closest parent <div> element with class "card"
        var parentCard = $(this).closest(".card");

        // Get the product_id from the data-id attribute of the parent <div> element
        var productId = parentCard.data("id");

        console.log(productId);

        // Toggle color
        if ($(this).css("fill") == "none") {
            $(this).css("fill", "#DB4444");
            $(this).css("stroke", "#DB4444");
        } else {
            $(this).css("fill", "none");
            $(this).css("stroke", "black");
        }

        // Send request to update favorite count on the server
        updateFavoriteCount(productId, $(this).css("fill") != "none");
    });
};

function updateFavoriteCount(productId, isIncrement) {
    // Get the CSRF token from the meta tag
    var csrfToken = $('meta[name="csrf-token"]').attr("content");
    console.log(csrfToken);

    // Send AJAX request to update favorite count on the server
    $.ajax({
        url: "/update-favorite-count",
        type: "POST",
        headers: {
            "Content-Type": "application/json",
            "X-CSRF-TOKEN": csrfToken, // Include the CSRF token in the headers
        },
        data: JSON.stringify({
            product_id: productId,
            increment: isIncrement,
        }),
        success: function (data) {
            // Update the total favorite count on the page
            // $("#total-favorite-count").text(
            //     data.total_favorite_count_per_product
            // );
            console.log(data.total_favorite_count_per_product);
        },
        error: function (error) {
            console.error("Error:", error);
        },
    });
}
