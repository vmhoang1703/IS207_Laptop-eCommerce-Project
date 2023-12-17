<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="{{ asset('css/my-order.css') }}">

    <title>My order</title>
</head>

<body class="d-flex flex-column align-items-center">
    @component("components.header")
    @endcomponent

    <div class="head-title container-xxl container-xl container-lg container-md container-sm d-lg-flex align-items-center text-center justify-content-center mt-3 mb-3">
        My order
    </div>
    <!--  nav mobile -->
    @component("components.profile_my-account_mobile_navbar")
    @endcomponent
    <!--  -->
    <div class="container-xxl container-xl container-lg container-md container-sm row">
        <div class="container-xxl container-xl container-lg container-md container-sm col-xxl-3 col-xl-3 col-lg-3 ">
            @component("components.profile_my-order_navbar")
            @endcomponent
        </div>
        <div class="col-xxl-9 col-xl-9 col-lg-9 col-md-12 col-sm-12">
            <div class=" p-5  container-xxl container-xl container-lg container-md container-sm box-infor d-flex flex-column gap-4">
                <div class="line-product-head row display-mobile-none ">
                    <div class=" col-xxl-2 col-xl-2 col-lg-1 col-md-2 col-sm-2 d-flex  ">
                    </div>
                    <div class="main-title  col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-3 d-flex   ">
                        <div class="  "> Product name </div>
                    </div>
                    <div class="col-xxl-7 col-xl-7 col-lg-7 col-md-7 col-sm-7 row ">
                        <div class="main-title  col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-3   ">
                            <div class=" "> Quantity </div>
                        </div>
                        <div class="main-title  col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-3   ">
                            <div class=""> Price </div>
                        </div>
                        <div class="main-title  col-xxl-3 col-xl-3 col-lg-2 col-md-2 col-sm-3 d-flex   ">
                            <div class=""> Status </div>
                        </div>
                        <div class="main-title  col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-3 d-flex   ">
                            <div class=" ms-auto"> Following </div>
                        </div>
                    </div>
                </div>
                <div class="  d-flex flex-column  gap-3 ">
                    @foreach ($orders as $order)
                    @component("components.profile_cart_my-order-page", ['order' => $order])
                    @endcomponent
                    @endforeach
                </div>


            </div>

            <!-- footer -->
            @component("components.footer")
            @endcomponent
            <script src=" {{ asset('js/my-order.js') }}"></script>
</body>

</html>