$(document).ready(function () {
    $(".menu-bar input, .range-input input").on("change", function () {
        updateProducts();
    });
});

function updateProducts() {
    var minPrice = $(".range-min").val();
    var maxPrice = $(".range-max").val();

    var filters = {};
    $('.menu-bar input[type="checkbox"]:checked').each(function () {
        var category = $(this).attr("name");
        var value = $(this).val();
        if (!filters[category]) {
            filters[category] = [];
        }
        filters[category].push(value);
    });

    $.ajax({
        type: "POST",
        url: "/store/filter",
        data: {
            minPrice: minPrice,
            maxPrice: maxPrice,
            filters: filters,
        },
        success: function (data) {
            $(".carousel_store").empty();

            $.each(data.products, function (index, product) {
                $.ajax({
                    type: "GET",
                    url: "/store/filter/" + product.product_id + "/main-image",
                    success: function (imageData) {
                        var mainImagePath = imageData.main_image_path;

                        var cardDiv = document.createElement("div");
                        cardDiv.classList.add("card");
                        cardDiv.setAttribute("data-id", product.product_id);

                        var heartDiv = document.createElement("div");
                        heartDiv.classList.add("heart");

                        var svgElement = document.createElementNS(
                            "http://www.w3.org/2000/svg",
                            "svg"
                        );
                        svgElement.setAttribute(
                            "xmlns",
                            "http://www.w3.org/2000/svg"
                        );
                        svgElement.setAttribute("width", "32");
                        svgElement.setAttribute("height", "32");
                        svgElement.setAttribute("viewBox", "0 0 32 32");
                        svgElement.setAttribute("fill", "none");
                        svgElement.setAttribute("stroke", "black");
                        svgElement.classList.add("heart1");

                        var pathElement = document.createElementNS(
                            "http://www.w3.org/2000/svg",
                            "path"
                        );
                        pathElement.setAttribute(
                            "d",
                            "M11 7C8.239 7 6 9.216 6 11.95C6 14.157 6.875 19.395 15.488 24.69C15.6423 24.7839 15.8194 24.8335 16 24.8335C16.1806 24.8335 16.3577 24.7839 16.512 24.69C25.125 19.395 26 14.157 26 11.95C26 9.216 23.761 7 21 7C18.239 7 16 10 16 10C16 10 13.761 7 11 7Z"
                        );
                        pathElement.setAttribute("stroke-width", "1.5");
                        pathElement.setAttribute("stroke-linecap", "round");
                        pathElement.setAttribute("stroke-linejoin", "round");

                        svgElement.appendChild(pathElement);
                        heartDiv.appendChild(svgElement);

                        var imgDiv = document.createElement("div");
                        imgDiv.classList.add("img");

                        var imgAnchor = document.createElement("a");
                        imgAnchor.setAttribute(
                            "href",
                            `/store/${product.title}`
                        );
                        imgAnchor.style.textDecoration = "none";

                        var imgElement = document.createElement("img");
                        imgElement.setAttribute("src", mainImagePath);
                        imgElement.setAttribute("alt", product.name);
                        imgElement.style.height = "150px";
                        imgElement.style.width = "150px";

                        imgAnchor.appendChild(imgElement);
                        imgDiv.appendChild(imgAnchor);

                        var cardActionDiv = document.createElement("div");
                        cardActionDiv.classList.add("card-action");

                        var btn1Div = document.createElement("div");
                        btn1Div.classList.add("btn1", "buttons");

                        var buyNowBtn = document.createElement("button");
                        buyNowBtn.textContent = "Buy now";

                        var addToCartBtn = document.createElement("button");
                        addToCartBtn.classList.add(
                            "btn",
                            "success",
                            "add-to-cart-btn"
                        );
                        addToCartBtn.textContent = "Add to cart";
                        addToCartBtn.setAttribute(
                            "data-product-id",
                            product.product_id
                        );

                        btn1Div.appendChild(buyNowBtn);
                        btn1Div.appendChild(addToCartBtn);
                        cardActionDiv.appendChild(btn1Div);

                        var infoCardDiv = document.createElement("div");
                        infoCardDiv.classList.add("info-card");

                        var nameAnchor = document.createElement("a");
                        nameAnchor.textContent = product.title;
                        nameAnchor.style.textDecoration = "none";
                        nameAnchor.style.color = "black";


                        var costDiv = document.createElement("div");
                        costDiv.classList.add("cost");
                        costDiv.textContent = product.price + "$ ";


                        var starBarDiv = document.createElement("div");
                        starBarDiv.classList.add("star-bar");

                        for (var i = 0; i < 5; i++) {
                            var starSpan = document.createElement("span");
                            starSpan.classList.add("fa", "fa-star", "star");
                            starBarDiv.appendChild(starSpan);
                        }

                        infoCardDiv.appendChild(nameAnchor);
                        infoCardDiv.appendChild(costDiv);
                        infoCardDiv.appendChild(starBarDiv);

                        cardDiv.appendChild(heartDiv);
                        cardDiv.appendChild(imgDiv);
                        cardDiv.appendChild(cardActionDiv);
                        cardDiv.appendChild(infoCardDiv);

                        heartDiv.addEventListener("click", function () {
                            heartaction();
                            updateFavouriteCount(product.product_id, heartDiv);

                        });


                        addToCartBtn.addEventListener("click", function () {
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
                                    createToast("success");
                                },
                                error: function (error) {
                                    console.error(error);
                                },
                            });
                        });

                        $(".carousel_store").append(cardDiv);
                    },
                    error: function (xhr, status, error) {
                        console.error(xhr.responseText);
                    },
                });
            });
        },
        error: function (xhr, status, error) {
            console.error(xhr.responseText);
        },
    });
}
