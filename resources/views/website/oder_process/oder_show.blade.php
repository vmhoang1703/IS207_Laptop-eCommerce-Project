<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="{{ asset('css/oder_show.css') }}">
    <title>Oder Process</title>
</head>

<body class="d-flex flex-column">
    <!-- header  -->
    <div class="header-fake"></div>
    <!-- breadcrumb -->
    <div class="container-xxl ">
        <ul id="myBreadcrumb" class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Cửa hàng </a></li>
            <li class="breadcrumb-item"><a href="#">Laptop </a></li>
            <li class="breadcrumb-item"><a href="#">Dell XPS 9710 17 inch Core i7 </a></li>
            <li class="breadcrumb-item active">Buy now</li>
        </ul>
    </div>
    <form id="checkoutForm" action="">
        <!-- Nội dung chính -->
        <div class="container-xxl d-flex flex-column ">
            <!-- Dòng tiêu đề bảng -->
            <div class="cart-main-section mb-xxl-4 row w-100">
                <div class="text-xl-start col-xl-4 ps-5 ">Product</div>
                <div class="text-center col-xl-3 ">Price</div>
                <div class="text-center col-xl-2">Quantity</div>
                <div class="text-center col-xl-3">Subtotal</div>
            </div>
            <!-- khung chức các sản phẩm đã đặt -->
            <div class="d-flex flex-column  ">
                <!-- Dòng thông tin 1 sản phẩm -->
                <div class="cart-section mb-xxl-2 row  w-100">
                    <a class="card flex-row col-xl-4" id="product-img" href="">
                        <img src="https://via.placeholder.com/150" class="card-img-left product-img">
                        <div class="card-body">
                            <p id="product-name" class="card-title product-title ">Dell XPS 9710 17 inch Core i7</p>
                        </div>
                    </a>
                    <div class="text-center col-xl-3 d-flex align-items-center justify-content-center">$<div
                            id=" product-price">650</div>
                    </div>
                    <div class="text-center col-xl-2">
                        <input type="number" class="input-quantity " id="quantityInput" value="1" min="1">
                    </div>
                    <div class="text-center col-xl-3 d-flex align-items-center justify-content-center">$<div
                            id=" subtotal-price">2000</div>
                    </div>
                </div>

                <!--  -->

            </div>
            <div class="   w-100  payment-infor row mt-xl-5 ">

                <div class="coupon-code col-12 col-md-6 px-0 pe-md-5">
                    <div class="input-group">
                        <input id="couponInput" type="text" class="form-control" placeholder="Coupon Code"
                            aria-label="Coupon Code">
                        <button class="coupon-btn btn btn-outline-secondary" type="button" id="button-coupon">
                            Apply Coupon
                        </button>
                    </div>
                </div>
                <div class=" total-infor pt-3 pb-4 col-xl-6 ms-auto ">
                    <div class="container mt-3 ">
                        <div class="cart-total"> Cart Total </div>
                        <div class="total-infor__subtotal row mt-2 ">
                            <div class=" col-6 text-start"> Subtotal: </div>
                            <div id="total-infor__subtotal " class=" col-6 text-end"> $2000 </div>
                        </div>
                        <div class="line-grey mt-2 mb-3"></div>
                        <div class="total-infor__shipping row mt-2 ">
                            <div class=" col-6 text-start"> Shipping: </div>
                            <div id="total-infor__shipping " class=" col-6 text-end"> Free </div>
                        </div>
                        <div class="line-grey mt-2 mb-3"></div>
                        <div class="total-infor__total row mt-2 ">
                            <div class=" col-6 text-start"> Total: </div>
                            <div id="total-infor__total " class=" col-6 text-end"> $2000 </div>
                        </div>
                        <div class="d-flex justify-content-center">
                            <button id="total-infor-btn__checkout" type="button"
                                class="total-infor__checkout btn btn-danger  mt-3 ">Checkout</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </form>





    <div class="footer-fake mt-5"></div>
    <script src="./index.js"> </script>
</body>

</html>