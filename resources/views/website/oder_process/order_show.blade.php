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
     <!-- Header -->
    <!-- @component('components.header')
    @endcomponent -->
    <!-- breadcrumb -->
    <div class="container-xxl container-xl container-lg container-md  container-sm   ">
        <ul id="myBreadcrumb" class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Cửa hàng </a></li>
            <li class="breadcrumb-item"><a href="#">Laptop </a></li>
            <li class="breadcrumb-item"><a href="#">Dell XPS 9710 17 inch Core i7 </a></li>
            <li class="breadcrumb-item active">Buy now</li>
        </ul>
    </div>
    <form id="checkoutForm" action="">
        <!-- Nội dung chính -->
        <div class="container-xxl container-xl container-lg container-md  container-sm d-flex flex-column margin-left-tablet-42   ">
            <!-- Dòng tiêu đề bảng -->
            <div class="cart-main-section mb-4 row w-100 mobile-font-size-14">
                <div class="text-xl-start col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-4  ps-5 ">Product</div>
                <div class="text-center col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-3 ">Price</div>
                <div class="text-center col-xxl-2 col-xl-2 col-lg-2 col-md-2 col-sm-2">Quantity</div>
                <div class="text-center col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-3">Subtotal</div>
            </div>
            <!-- khung chứa các sản phẩm đã đặt -->
            <div class="d-flex flex-column margin-top-mobile-16  ">
                <!-- Dòng thông tin 1 sản phẩm -->
                <div class="cart-section mb-2 row  w-100 mobile-font-size-14">
                    <a class="card flex-row col-xxl-4 col-xl-4  col-lg-4 col-md-4 col-sm-4  " id="product-img" href="">
                        <img src="https://via.placeholder.com/150" class="card-img-left product-img">
                        <div class="card-body">
                            <p id="product-name" class="card-title product-title mobile-font-size-14 ">Dell XPS 9710 17 inch Core i7</p>
                        </div>
                    </a>
                    <div class="text-center  col-xxl-3 col-xl-3  col-lg-3  col-md-3 col-sm-3  d-flex align-items-center justify-content-center ">$<div
                            id=" product-price">650</div>
                    </div>
                    <div class="text-center col-xxl-2 col-xl-2 col-lg-2 col-md-2 col-sm-2   ">
                        <input type="number" class="input-quantity mobile-font-size-14 " id="quantityInput" value="1" min="1">
                    </div>
                    <div class="text-center col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-3  d-flex align-items-center justify-content-center">$<div
                            id=" subtotal-price">2000</div>
                    </div>
                </div>

                <!-- Mobile  -->

                <div class="cart-section-mobile d-none  w-100 mobile-font-size-14">
                <a class=" " id="product-img" href="">
                        <img src="https://via.placeholder.com/150" style="width: 70px " class="card-img-left product-img">
                </a>
                <div class=" cart-mobile-infor   ">
                    <a class="cart-mobile-infor-title d-flex justify-content-between align-items-start" id="product-name-mobile" > Dell XPS 9710 17 inch Core i7 </a>
                    <div class="  d-flex justify-content-between align-items-end ">
                        <div class="cart-mobile-infor-price"  id=" product-price-mobile" > 650$ </div>
                        <div class="input-quantity-mobile d-flex">
                            <span class="minus d-flex justify-content-center align-items-center" onclick="decreaseQuantity()" >-</span> 
                            <input type="text" value="1" readonly="readonly" id="quantityInput-mobile"> 
                            <span class="plus d-flex justify-content-center align-items-center" onclick="increaseQuantity()">+</span>
                        </div>
                    </div>

                </div>
                </div>


             


               

            </div>
            <div class="w-100 payment-infor row mt-5 tablet-mt-14 margin-top-mobile-16 margin-left-mobile-none ">

                <div class="coupon-code  col-xxl-5 col-xl-5 col-lg-5 col-md-12 col-sm-12 col-12 px-0 pe-5 padding-right-mobile-none">
                    <div class="input-group">
                        <input id="couponInput mobile-font-size-14 " type="text" class="form-control" placeholder="Coupon Code"
                            aria-label="Coupon Code">
                        <button class="coupon-btn btn btn-outline-secondary mobile-font-size-14 " type="button" id="button-coupon">
                            Apply Coupon
                        </button>
                    </div>
                </div>
                <div class=" total-infor pt-3 pb-4 col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 ms-auto margin-top-mobile-16">
                    <div class="container mt-3 ">
                        <div class="cart-total"> Cart Total </div>
                        <div class="total-infor__subtotal row mt-2 ">
                            <div class=" col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6  text-start mobile-font-size-14"> Subtotal: </div>
                            <div id="total-infor__subtotal " class=" col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6 text-end mobile-font-size-14"> $2000 </div>
                        </div>
                        <div class="line-grey mt-2 mb-3"></div>
                        <div class="total-infor__shipping row mt-2 ">
                            <div class=" col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6 text-start mobile-font-size-14"> Shipping: </div>
                            <div id="total-infor__shipping " class=" col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6 text-end mobile-font-size-14"> Free </div>
                        </div>
                        <div class="line-grey mt-2 mb-3"></div>
                        <div class="total-infor__total row mt-2 ">
                            <div class=" col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6 text-start mobile-font-size-14"> Total: </div>
                            <div id="total-infor__total " class=" col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6 text-end mobile-font-size-14"> $2000 </div>
                        </div>
                        <div class="d-flex justify-content-center">
                            <button id="total-infor-btn__checkout"  type="button"
                                class="total-infor__checkout btn btn-danger  mt-3 mobile-font-size-14 ">Checkout</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </form>



    <div class="footer-fake mt-5"></div>
    <script>
        // Tăng giảm số lượng trong giao diện mobile
        function decreaseQuantity() {
            var quantityInput = document.getElementById('quantityInput-mobile');
            var currentValue = parseInt(quantityInput.value, 10);
    
            if (currentValue > 1) {
                quantityInput.value = currentValue - 1;
            }
        }
    
        function increaseQuantity() {
            var quantityInput = document.getElementById('quantityInput-mobile');
            var currentValue = parseInt(quantityInput.value, 10);
    
            quantityInput.value = currentValue + 1;
        }
    </script>
</body>

</html>