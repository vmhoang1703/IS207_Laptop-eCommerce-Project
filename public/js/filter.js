$(document).ready(function () {
    $(".menu-bar input, .range-input input").on("change", function () {
        updateProducts();
    });
});

function updateProducts() {
    // Lấy giá trị khoảng giá
    var minPrice = $(".range-min").val();
    var maxPrice = $(".range-max").val();

    // Lấy giá trị các lựa chọn từ filter
    var filters = {};
    $('.menu-bar input[type="checkbox"]:checked').each(function () {
        var category = $(this).attr("name");
        var value = $(this).val();
        if (!filters[category]) {
            filters[category] = [];
        }
        filters[category].push(value);
    });

    // Gửi Ajax request
    $.ajax({
        type: "POST",
        url: "/store/filter",
        data: {
            minPrice: minPrice,
            maxPrice: maxPrice,
            filters: filters,
        },
        success: function (data) {
            // Xử lý dữ liệu trả về và cập nhật giao diện
            console.log(data.products);

            // Xóa các sản phẩm hiện tại
            $(".carousel_store").empty();

            // Thêm sản phẩm mới vào container
            $.each(data.products, function (index, product) {
                $.ajax({
                    type: "GET",
                    url: "/store/filter/" + product.product_id + "/main-image",
                    success: function (imageData) {
                        var mainImagePath = imageData.main_image_path;

                        var productHtml = `
                            <div class="card" data-id="${product.product_id}">
                                <div class="heart">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none" stroke="black" class="heart1">
                                        <path d="M11 7C8.239 7 6 9.216 6 11.95C6 14.157 6.875 19.395 15.488 24.69C15.6423 24.7839 15.8194 24.8335 16 24.8335C16.1806 24.8335 16.3577 24.7839 16.512 24.69C25.125 19.395 26 14.157 26 11.95C26 9.216 23.761 7 21 7C18.239 7 16 10 16 10C16 10 13.761 7 11 7Z" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </div>
                                <div class="img">
                                    <a href="/store/${product.product_id}" style="text-decoration: none;">
                                        <img src="${mainImagePath}" alt="${product.title}" style="height: 150px; width: 190px">
                                    </a>
                                </div>
                                <div class="card-action">
                                    <div class="btn1 buttons">
                                        <button>Buy now</button>
                                        <button class="btn" id="success">Add to cart</button>
                                    </div>
                                </div>
                                <div class="info-card">
                                    <a href="${product.detail_route}" style="text-decoration: none; color: black">
                                        <div class="productname">${product.title}</div>
                                    </a>
                                    <div class="cost">${product.price}$ <span class="discount">$</span></div>
                                    <div class="star-bar">
                                        <span class="fa fa-star star"></span>
                                        <span class="fa fa-star star"></span>
                                        <span class="fa fa-star star"></span>
                                        <span class="fa fa-star star"></span>
                                        <span class="fa fa-star star"></span>
                                    </div>
                                </div>
                            </div>
                        `;

                        $(".carousel_store").append(productHtml);
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

// Event delegation cho các phần tử được thêm mới vào DOM
$(document).ready(function () {
    $(document).on("click", ".heart1", function () {
        var parentCard = $(this).closest(".card");
        var productId = parentCard.data("id");

        // Xử lý logic cho heart icon
        if ($(this).css("fill") == "none") {
            $(this).css("fill", "#DB4444");
            $(this).css("stroke", "#DB4444");
        } else {
            $(this).css("fill", "none");
            $(this).css("stroke", "black");
        }

        updateFavouriteCount(productId, $(this).css("fill") != "none");
    });

    $(document).on("click", ".btn.success", function () {
        // Xử lý logic cho nút "Add to cart"
        const notifications = document.querySelector(".notifications"),
buttons = document.querySelectorAll(".buttons .btn");

// Object containing details for different types of toasts
const toastDetails = {
    timer: 5000,
    success: {
        icon: 'fa-circle-check',
        text: 'Đã thêm vào giỏ hàng ',
    }
}

const removeToast = (toast) => {
    toast.classList.add("hide");
    if(toast.timeoutId) clearTimeout(toast.timeoutId); // Clearing the timeout for the toast
    setTimeout(() => toast.remove(), 500); // Removing the toast after 500ms
}

const createToast = (id) => {
    // Getting the icon and text for the toast based on the id passed
    const { icon, text } = toastDetails[id];
    const toast = document.createElement("li"); // Creating a new 'li' element for the toast
    toast.className = `toast ${id}`; // Setting the classes for the toast
    // Setting the inner HTML for the toast
    toast.innerHTML = `<div class="column">
                         <i class="fa-solid ${icon}"></i>
                         <span>${text}</span> </div>
                         <i class="fa-solid fa-xmark close" onclick="removeToast(this.parentElement)"></i>
                    `;
    notifications.appendChild(toast); // Append the toast to the notification ul
    // Setting a timeout to remove the toast after the specified duration
    toast.timeoutId = setTimeout(() => removeToast(toast), toastDetails.timer);
}

// Adding a click event listener to each button to create a toast when clicked
buttons.forEach(btn => {
    btn.addEventListener("click", () => createToast(btn.id));
});} ) } )
