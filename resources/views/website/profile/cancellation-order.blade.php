<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="{{ asset('css/my-order.css') }}">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <title>My order</title>
</head>

<body class="d-flex flex-column align-items-center">
    @component("components.header")
    @endcomponent

    <div class="head-title container-xxl d-lg-flex align-items-center justify-content-center mt-3 mb-3">
        My order
    </div>
    <!--  nav mobile -->
    @component("components.profile_my-account_mobile_navbar")
    @endcomponent
    <!--  -->
    <div class="container-xxl container-xl container-lg container-md container-sm row">
        <div class="container-xxl container-xl container-lg container-md container-sm col-xxl-3 col-xl-3 col-lg-3">
            @component("components.profile_cancel-order_navbar")
            @endcomponent
        </div>
        <div class="col-xxl-9 col-xl-9 col-lg-9 col-md-12 col-sm-12">
            <div class="  p-5  container-xxl container-xl container-lg container-md container-sm box-infor d-flex flex-column gap-4">
                <div class="line-product-head row  display-mobile-none ">
                    <div class=" col-xxl-2 col-xl-2 col-lg-1 col-md-2 col-sm-2 d-flex   ">
                    </div>
                    <div class="main-title  col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-3 d-flex   ">
                        <div class=" "> Product name </div>
                    </div>
                    <div class=" col-xxl-7 col-xl-7 col-lg-7 col-md-7 col-sm-7 row ">
                        <div class="main-title  col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-3   ">
                            <div class=" "> Quantity </div>
                        </div>
                        <div class="main-title  col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-3   ">
                            <div class=" "> Price </div>
                        </div>
                        <div class="main-title  col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-3 d-flex   ">
                            <div class=" "> Status </div>
                        </div>
                        <div class="main-title  col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-3 d-flex   ">
                            <div class=" ">Reason </div>
                        </div>
                    </div>
                </div>
                <div class="  d-flex flex-column  gap-3 ">
                    @foreach ($orders as $order)
                    @component("components.profile_cart_cancellation-order-page", ['order' => $order])
                    @endcomponent
                    @endforeach
                </div>


            </div>

            <!--  -->
            <!-- Button trigger modal -->


            <!-- Modal -->
            <div class="modal fade" id="delivery-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">Following</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="container d-flex flex-column justify-content-center">
                                <div class="card-item row">
                                    <div class=" col-xxl-2">
                                        <img class=" product-img " src="../Screen_3/18051e29a0086c873a703c6861f2eefb.jpg" alt=" ">
                                    </div>
                                    <div class=" col-xxl-8 d-flex flex-column gap-2">
                                        <div class=" card-item-name ">Dell XPS 9710 17 inch Core i7</div>
                                        <div class=" card-item-id ">ID: dkgnlsjg</div>
                                        <div class=" card-item-quantity ">Quantity: 1</div>
                                        <div class=" card-item-price "> 2000$</div>

                                    </div>
                                </div>
                                <div class="shipping-process">
                                    <img class=" " src="{{asset('img/Ship-1.svg')}}" alt="">
                                    <img class="" src="{{asset('img/Ship-2.svg')}}" alt="">
                                    <img class="shipping-not-passed" src="{{asset('img/Ship-3.svg')}}" alt="">
                                    <img class="shipping-not-passed" src="{{asset('img/Ship-4.svg')}}" alt="">
                                </div>
                                <div class="status-shipping text-center mb-4"> Đơn hàng đang vận chuyện </div>
                                <div class="line-grey"></div>
                                <div class=" order-status ">
                                    <div class="  order-status-title mt-3 mb-3 "> Order Status </div>
                                    <div class="order-status-detail d-flex flex-column ">
                                        <div class=" detail-line row mt-2 ">
                                            <img class="col-xxl-1 icon-status-order " src="{{ asset('img/check-box-shipping.svg')}} " alt="">
                                            <div class="col-xxl-9 shipping-infor ps-auto d-flex flex-column  ">
                                                <h3 class="shipping-infor-title  text-start"> In delivery- 17/12 </h3>
                                                <div class="shipping-infor-site">Ga Sài Gòn </div>
                                            </div>
                                            <div class="col-xxl-2 shipping-infor-time   text-end"> 15:20 PM</div>
                                        </div>
                                        <!--  -->
                                        <div class=" detail-line row mt-2 ">
                                            <img class="col-xxl-1 icon-status-order " src="{{ asset('img/check-box-shipping.svg')}} " alt="">
                                            <div class="col-xxl-9 shipping-infor ps-auto d-flex flex-column  ">
                                                <h3 class="shipping-infor-title  text-start"> In delivery- 17/12 </h3>
                                                <div class="shipping-infor-site">Ga Sài Gòn </div>
                                            </div>
                                            <div class="col-xxl-2 shipping-infor-time   text-end"> 15:20 PM</div>
                                        </div>
                                        <div class=" detail-line row mt-2 ">
                                            <img class="col-xxl-1 icon-status-order " src="{{ asset('img/check-box-shipping.svg')}} " alt="">
                                            <div class="col-xxl-9 shipping-infor ps-auto d-flex flex-column  ">
                                                <h3 class="shipping-infor-title  text-start"> In delivery- 17/12 </h3>
                                                <div class="shipping-infor-site">Ga Sài Gòn </div>
                                            </div>
                                            <div class="col-xxl-2 shipping-infor-time   text-end"> 15:20 PM</div>
                                        </div>
                                        <div class=" detail-line row mt-2 ">
                                            <img class="col-xxl-1 icon-status-order " src="{{ asset('img/check-box-shipping.svg')}} " alt="">
                                            <div class="col-xxl-9 shipping-infor ps-auto d-flex flex-column  ">
                                                <h3 class="shipping-infor-title  text-start"> In delivery- 17/12 </h3>
                                                <div class="shipping-infor-site">Ga Sài Gòn </div>
                                            </div>
                                            <div class="col-xxl-2 shipping-infor-time   text-end"> 15:20 PM</div>
                                        </div>
                                        <div class=" detail-line row mt-2 ">
                                            <img class="col-xxl-1 icon-status-order " src="{{ asset('img/check-box-shipping.svg')}} " alt="">
                                            <div class="col-xxl-9 shipping-infor ps-auto d-flex flex-column  ">
                                                <h3 class="shipping-infor-title  text-start"> In delivery- 17/12 </h3>
                                                <div class="shipping-infor-site">Ga Sài Gòn </div>
                                            </div>
                                            <div class="col-xxl-2 shipping-infor-time   text-end"> 15:20 PM</div>
                                        </div>
                                        <!--  -->
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!--  -->
        </div>
    </div>



    <!-- footer -->
    @component("components.footer")
    @endcomponent
    <script src=" {{ asset('js/my-order.js') }}"></script>
</body>

</html>