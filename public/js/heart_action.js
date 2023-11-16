document.querySelectorAll(".heart").forEach((item) =>
    item.addEventListener("click", function () {
        var productId = this.parentElement.dataset.id;

        // Toggle color
        if (this.style.color != "red") {
            this.style.color = "red";
            // Send request to update favorite count on the server
            updateFavoriteCount(productId, true);
        } else {
            this.style.color = "black";
            // Send request to update favorite count on the server
            updateFavoriteCount(productId, false);
        }
    })
);

function updateFavoriteCount(productId, isIncrement) {
    // Send AJAX request to update favorite count on the server
    fetch("/update-favorite-count", {
        method: "POST",
        headers: {
            "Content-Type": "application/json",
            "X-CSRF-TOKEN": "{{ csrf_token() }}",
        },
        body: JSON.stringify({
            product_id: productId,
            increment: isIncrement,
        }),
    })
        .then((response) => response.json())
        .then((data) => {
            // Update the total favorite count on the page
            document.getElementById("total-favorite-count").textContent =
                data.total_favorite_count;
        })
        .catch((error) => console.error("Error:", error));
}
