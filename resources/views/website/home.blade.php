<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>E-lec World</title>
    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap_css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{asset('css/responsive/home_res.css') }}">
    <link rel="stylesheet" href="{{asset('css/product_card.css') }}">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="js/countdown.js"></script>
    <script src="js/carousel.js" defer> </script>
    <script src="js/range.js" defer></script>
    <script src="js/feedback_scroll.js" defer></script>


</head>

<body>
    <!-- header -->
    @component("components.header_signup")
    @endcomponent
    <!-- main content -->
    <section class="main-content">
        <div class="header-content">
            <div class="container">
                <div class="row">
                    <!-- filter bar & menu -->
                    @component('components.filter_home')
                    @endcomponent
                    <div class="col-sm-10 pt-4">
                        <!-- advertise MACBOOK -->
                        @component('components.advertise')
                        @endcomponent
                    </div>
                </div>
                <div class="title d-flex pt-5 ">
                    <div class="secondary2 ms-5"></div>
                    <div class="secondary2-text px-2 py-2">Today </div>
                </div>
                <div class="flashsales">

                    <div class=" container">
                        <div class=" row">
                            <div class="introduction secondary1 col-3 my-3 ps-5">Flash Sales</div>
                            <!-- Countdown -->
                            @component('components.countdown')
                            @endcomponent
                        </div>
                        <div class="wrapper">
                            <i id="left" class="fa fa-angle-left"></i>
                            <ul class="carousel">

                                @foreach($flashSalesProducts as $product)
                                @component('components.card_flashsales', ['product' => $product])
                                @endcomponent
                                @endforeach

                            </ul>
                            <i id="right" class="fa fa-angle-right"></i>
                        </div>
                        <!-- ----------------------------------------- -->
                    </div>
                    <hr style="margin-top: 100px;">
                </div>
                <!-- Favorite Products -->
                <div class="title d-flex mt-5">
                    <div class="secondary2 ms-5 "></div>
                    <div class="secondary2-text px-2 py-2">Best seller </div>
                </div>

                <div class="introduction secondary1 col-3 my-3 ps-5">Favorite Products</div>

                <div class="wrapper">
                    <div class="carousel">

                        @foreach($products as $product)
                        @component('components.card', ['product' => $product])
                        @endcomponent
                        @endforeach

                    </div>
                </div>
                <div class="ads_jbl_affix ms-5">
                    <div class="ads_jbl row  ">
                        <div class="jbl-details col-4 my-5 mx-5">
                            <div class="title_jbl"> New arrival</div>
                            <div class="ESE mt-5 mb-4">Enhance sound experience</div>
                            <div class="Timetext1 mb-5">
                                <span class="circle me-3">
                                    <div id="Days1">00</div>
                                    <div>Days</div>
                                </span>
                                <span class="circle me-3 ">
                                    <div id="Hours1">00</div>
                                    <div>Hours</div>
                                </span>
                                <span class="circle me-3">
                                    <div id="Minutes1">00</div>
                                    <div>Minutes</div>
                                </span>
                                <span class="circle">
                                    <div id="Seconds1">00</div>
                                    <div>Seconds</div>
                                </span>
                            </div>
                            <button class="btn_jbl">Buy now!</button>
                        </div>
                        <div class="JBL_BOOMBOX col-6 ms-5 my-5">
                            <img src="{{ asset('img/JBL_BOOMBOX_2_HERO_020_x1 (1) 1.png') }}" alt="img" width="100%">
                        </div>
                    </div>
                </div>
                <!-- Feature-->
                <div class="title d-flex" style="margin-top:150px;">
                    <div class="secondary2 ms-5 "></div>
                    <div class="secondary2-text px-2 py-2">Feature </div>
                </div>

                <div class="introduction secondary1 col-3 my-3 ps-5">New arrival</div>
                <div class="feature-product row ms-5">
                    <div class="DELL col-5 me-2 px-5 py-5">
                        <img src="{{ asset('img/laptop.png')}}">
                        <div class="heading">DELL-XPS-7590-0 </div>
                        <div class="title-regular">Black and White versions</div>
                        <div class="title-medium">Buy now</div>
                    </div>
                    <div class="col-6 ms-4 ">
                        <div class="row DELL mb-4 " style="padding-left: 0%;">
                            <div class="textD1 col-6 ps-3">
                                <div class="heading"> Bluetooth Philips </div>
                                <div class="title-regular">Bluetooth Philips headphone</div>
                                <div class="title-medium">Buy now</div>
                            </div>
                            <div class="col-6"><img src="{{asset('img/headphone.png')}}"> </div>
                        </div>
                        <div class="row">
                            <div class="DELL loa background  col-6" style="border-right:1px solid white">
                                <div class="heading">Speakers </div>
                                <div class="title-regular"> Amazon wireless speakers</div>
                                <div class="title-medium">Buy now</div>
                            </div>
                            <div class="DELL PC background col-6">
                                <div class="heading">BTS NC 01 </div>
                                <div class="title-regular">BTS NC 01</div>
                                <div class="title-medium">Buy now</div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Newarrival responsive -->
                <div class="wrapper Newarrival_res">
                    <ul class="carousel">
                        <li class="card" style="background-color:black;">
                            <div class="img">
                                <img src="{{ asset('img/laptop.png') }}" alt="img">
                            </div>
                            <div class="DELL mb-3">
                                <div class="heading">DELL-XPS-7590-0 </div>
                                <div class="title-regular">Black and White versions</div>
                                <div class="title-medium">Buy now</div>
                            </div>
                        </li>
                        <li class="card " style="background-color:black;">
                            <div class="img ">
                                <img src="{{ asset('img/headphone.png') }}" alt="img" style="width:80%">
                            </div>
                            <div class="DELL mb-5">
                                <div class="heading"> Bluetooth Philips </div>
                                <div class="title-regular">Bluetooth Philips headphone</div>
                                <div class="title-medium">Buy now</div>
                            </div>
                        </li>
                        <li class="card" style="background-color:black;">

                            <div class="img">
                                <img src="{{ asset('img/PC.png') }}" alt="img" style="width:80%">
                            </div>
                            <div class="DELL mb-5">
                                <div class="heading">BTS NC 01 </div>
                                <div class="title-regular">BTS NC 01</div>
                                <div class="title-medium">Buy now</div>
                            </div>
                        </li>
                        <li class="card " style="background-color:black;">
                            <div class="img">
                                <img src="{{ asset('img/loa.png') }}" alt="img" style="width:70%">
                            </div>
                            <div class="DELL mb-4">
                                <div class="heading">Speakers </div>
                                <div class="title-regular"> Amazon wireless speakers</div>
                                <div class="title-medium">Buy now</div>
                            </div>
                        </li>
                    </ul>
                </div>

                <!-- Feedback-->
                <div class="title d-flex" style="margin-top:150px;">
                    <div class="secondary2 ms-5 "></div>
                    <div class="secondary2-text px-2 py-2">Feedback </div>
                </div>

                <div class="introduction secondary1 col-3 my-3 ps-5">Testimonials</div>
                <div class="lastcontent">
                    <i class="pre-btn fa fa-angle-left"></i>
                    <i class="nxt-btn fa fa-angle-right"></i>
                    <div class="feedback_bar row ms-5">
                        <div class="col-4">
                            <img src="images/usercomment.png" height="240px" width="240px">
                            <div class="user ms-5 mt-4">
                                <div class="username">Miss Lucy Nguyen</div>
                                <div class="usercomment">“Your products are so wonderful.”</div>
                                <div> <span class="fa fa-star star"></span>
                                    <span class="fa fa-star star"></span>
                                    <span class="fa fa-star star"></span>
                                    <span class="fa fa-star star"></span>
                                    <span class="fa fa-star star"></span>
                                    <span class="numbered">(4.3)</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <img src="images/usercomment.png" height="240px" width="240px">
                            <div class="user ms-5 mt-4">
                                <div class="username">Miss Lucy Nguyen</div>
                                <div class="usercomment">“Your products are so wonderful.”</div>
                                <div> <span class="fa fa-star star"></span>
                                    <span class="fa fa-star star"></span>
                                    <span class="fa fa-star star"></span>
                                    <span class="fa fa-star star"></span>
                                    <span class="fa fa-star star"></span>
                                    <span class="numbered">(4.3)</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <img src="images/usercomment.png" height="240px" width="240px">
                            <div class="user ms-5 mt-4">
                                <div class="username">Miss Lucy Nguyen</div>
                                <div class="usercomment">“Your products are so wonderful.”</div>
                                <div> <span class="fa fa-star star"></span>
                                    <span class="fa fa-star star"></span>
                                    <span class="fa fa-star star"></span>
                                    <span class="fa fa-star star"></span>
                                    <span class="fa fa-star star"></span>
                                    <span class="numbered">(4.3)</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <img src="images/usercomment.png" height="240px" width="240px">
                            <div class="user ms-5 mt-4">
                                <div class="username">Miss Lucy Nguyen</div>
                                <div class="usercomment">“Your products are so wonderful.”</div>
                                <div> <span class="fa fa-star star"></span>
                                    <span class="fa fa-star star"></span>
                                    <span class="fa fa-star star"></span>
                                    <span class="fa fa-star star"></span>
                                    <span class="fa fa-star star"></span>
                                    <span class="numbered">(4.3)</span>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="title d-flex" style="margin-top:150px;">
                        <div class="secondary2 ms-5 "></div>
                        <div class="secondary2-text px-2 py-2">Advantages</div>
                    </div>

                    <div class="introduction secondary1 col-3 my-3 ps-5">Service</div>
                    <div class="row ms-5 mt-5 service">
                        <div class="col-4 ms-5">
                            <img src="{{asset('img/Services.png')}}" class="ms-5" height="113px" width="113px">
                            <div class="user ms-5 mt-4 me-5">
                                <div class="username">Fast delivery</div>
                                <div class="service" style="text-indent:-3cm;">Free shipping for orders over 100$ </div>
                            </div>
                        </div>
                        <div class="col-4 ms-3">
                            <img src="{{asset('img/Services (1).png')}}" class="ms-5" height="113px" width="113px">
                            <div class="user ms-3 mt-4">
                                <div class="username">24/7 Customer Service</div>
                                <div class="service">24/7 Customer Support and Care </div>
                            </div>
                        </div>
                        <div class="col-2 ms-4">
                            <img src="{{asset('img/Services (2).png')}}" class="ms-5" height="113px" width="113px">
                            <div class="user ms-4 mt-4">
                                <div class="username ps-3">Warranty Policy</div>
                                <div class="service" style="white-space: nowrap">30-day money-back guarantee </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section style="margin-top: 150px;">
      <!-- footer -->
      @component("components.footer")
    @endcomponent
    <!-- - -->
    </section>


    <script src="js/bootstrap.bundle.min.js"> </script>

    <script src="js/heart_action.js"></script>

</body>

</html>
