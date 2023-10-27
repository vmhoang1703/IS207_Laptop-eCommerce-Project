<!DOCTYPE html>
<html lang="en">


<head>
    <!-- Các thẻ meta và tiêu đề -->
    <!-- Bao gồm các tệp CSS của bạn -->
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <link rel="stylesheet" href="{{ asset('css/filter.css') }}">

    <!-- Bao gồm các tệp CSS của Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css">

    <!-- Các thẻ script và đường dẫn JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>
    <div class="wrapper">
        <!-- Header -->
        @component('components.header')
        @endcomponent

        <!-- header-content -->
        <div class="contentP">
            <div class="main-content">
                <!-- filter -->
                @component('components.filter')
                @endcomponent
                <!-- newarrival -->
                @component('components.new-arrival')
                @endcomponent
            </div>
            <!-- main content -->
            <div class="box-product">
                <!-- flashsale -->
                <div class="FlashSale">
                    <div class="production">
                        <div class="secondary2"></div> <a class="pro-textS"> Today </a>
                    </div>
                    <table>
                        <tr>
                            <td class="FSHeader" style="margin-left: -50px;">
                                <a class="pro-textL"> Flash Sales</a>
                                <div class="time">
                                    <div class="pro-textXS">Days </div>
                                    <div class="pro-textXS">Hours </div>
                                    <div class="pro-textXS">Minutes </div>
                                    <div class="pro-textXS">Second </div>
                                    <div class="time-text">
                                        <div class="pro-textM">03 </div>
                                        <div class="pro-textM-dot" style="padding-left:10px"> : </div>
                                    </div>
                                    <div class="time-text">
                                        <div class="pro-textM">23</div>
                                        <div class="pro-textM-dot" style="padding-left:10px"> : </div>
                                    </div>
                                    <div class="time-text">
                                        <div class="pro-textM">19</div>
                                        <div class="pro-textM-dot" style="padding-left:10px"> : </div>
                                    </div>
                                    <div class="time-text">
                                        <div class="pro-textM">56</div>
                                    </div>
                                </div>
                                <!-- <div class="arrowcontrol">
                                    <ul>
                                        <li>
                                            <a href="#" id="left">
                                                <span class="inner"></span>
                                                <i class="fa fa-arrow-left" aria-hidden="true"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" id="right">
                                                <span class="inner"></span>
                                                <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                            </a>
                                        </li>
                                    </ul> -->
                                </div>
                            </td>
                        </tr>
                    </table>

                    <!-- <div class="product-list" id="productList">
                        <div class="wrapper">
                            <ul class="carousel">
                                ProductCard
                                @foreach ($products as $product)
                                @component('components.product-card', [
                                'name' => $product->name,
                                'price' => $product->price,
                                'oldPrice' => $product->oldPrice,
                                ])
                                @endcomponent
                                @endforeach
                            </ul>
                            <div class="AllProduct"><a href="#">All Products</a> </div>
                        </div>
                    </div> -->

                    <section class="pt-5 pb-5">
                        <div class="container">
                            <div class="row">
                                <div class="col-6">
                                </div>
                                <div class="col-6 text-right" style="margin-top: -100px;">
                                    <a class="btn btn-primary mb-3 mr-1" href="#carouselExampleIndicators2" role="button" data-slide="prev">
                                        <i class="fa fa-arrow-left"></i>
                                    </a>
                                    <a class="btn btn-primary mb-3 " href="#carouselExampleIndicators2" role="button" data-slide="next">
                                        <i class="fa fa-arrow-right"></i>
                                    </a>
                                </div>
                                <div class="col-12">
                                    <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">
                                        <div class="carousel-inner">
                                            @foreach ($products as $product)
                                            @if ($loop->index % 3 == 0)
                                            <div class="carousel-item{{ $loop->first ? ' active' : '' }}">
                                                <div class="row">
                                                    @endif
                                                    @component('components.product-card', [
                                                    'name' => $product->name,
                                                    'price' => $product->price,
                                                    'oldPrice' => $product->oldPrice,
                                                    ])
                                                    @endcomponent
                                                    @if (($loop->last && $loop->index % 3 != 0) || $loop->index % 3 == 2)
                                                </div>
                                            </div>
                                            @endif
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                </div>

                <hr>

                <!-- BestSeller -->
                <div class="BestSeller">

                    <div class="product-list">
                        <div class="production">
                            <div class="secondary2"></div> <a class="pro-textS"> Best Seller </a>
                        </div>
                        <div class="Fa">
                            <h1>Favorite Product</h1>
                            <div class="All"><a href="#">All</a></div>
                        </div>
                        <ul>
                            <!-- ProductCard -->
                            @foreach ($products as $product)
                            @component('components.product-card', [
                            'name' => $product->name,
                            'price' => $product->price,
                            'oldPrice' => $product->oldPrice,
                            ])
                            @endcomponent
                            @endforeach
                        </ul>

                    </div>
                    <!-- Main newarrival -->

                    <div class="mainarrival">
                        <div class="mainboardads">
                            <div class="mainheaderads">
                                <table class="mainads">
                                    <tr class="ads">
                                        <td style="position: relative; top: 30px; font-size: 15px; color: yellowgreen"> <b> New arrival</b>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            <h1 style="position: relative; top: -40px; font-size: 50px;">Enhance sound experience</h1>
                                        </td>
                                    </tr>

                                </table>
                                <img src="{{ asset('img/JBL_BOOMBOX_2_HERO_020_x1 (1) 1.png') }}" class="boombox">
                            </div>

                            <div>
                                <table>
                                    <tr>
                                        <td colspan="1">
                                            <div class="maintime">

                                                <div class="circle"> <b style="font-size: 16px; position: relative; top: 20%"> 05 </b> <br> Days
                                                </div>
                                                <div class="circle"> <b style="font-size: 16px; position: relative; top: 20%"> 23 </b> <br>
                                                    Hours </div>
                                                <div class="circle"> <b style="font-size: 16px; position: relative; top: 20%"> 59 </b> <br>
                                                    Minutes </div>
                                                <div class="circle"> <b style="font-size: 16px; position: relative; top: 20%"> 35 </b> <br>
                                                    Seconds </div>

                                            </div>
                                        </td>
                                    </tr>

                                </table>
                            </div>

                            <button class="buybutton"> Buy Now! </button>

                        </div>
                    </div>
                    <!-- Feature -->
                    <div class="mainarrival">
                        <div class="tablenewarrival">
                            <div class="production" style="justify-content: left; padding-left: 0;">
                                <div class="secondary2"></div> <a class="pro-textS"> Feature </a>
                            </div>
                            <div style="margin-left: -30px;">
                                <table>
                                    <tr>
                                        <td class="TNAHeader">
                                            <a class="pro-textL" style="margin-left: -20px;"> New Arrival</a>
                                        </td>
                                    </tr>
                                </table>

                                <div class="newarrival-list">
                                    <ul>
                                        <li class="newarrival-menu">
                                            <img src="{{ asset('img/laptop.png') }}" class="laptop">
                                            <table class="infonewarrival">
                                                <tr>
                                                    <td style="position: relative; top: -20px; font-size: 24px; color: white"> <b>
                                                            DELL-XPS-7590-0</b></td>
                                                </tr>
                                                <tr>
                                                    <td style="position: relative; font-size: 12px; color: white">Black and White version</td>
                                                </tr>
                                                <tr>
                                                    <a href="#" style="position: relative; top: 3.3cm; left:40px; text-decoration: underline; font-size: 16px; color: white">
                                                        <b> Buy now</b></a>
                                                </tr>
                                            </table>
                                        </li>
                                        <li>
                                            <ul style="flex-direction: column">
                                                <li class="newarrival-menu" style="width: 600px; height: 295px;">
                                                    <table class="infonewarrival" style="width: 300;">
                                                        <tr>
                                                            <td style="position: relative; top: 3cm; font-size: 24px; color: white"> <b> Bluetooth
                                                                    Philips</b></td>
                                                        </tr>
                                                        <tr>
                                                            <td style="position: relative; top: 3.5cm; font-size: 12px; color: white">Bluetooth
                                                                Philips headphone</td>
                                                        </tr>
                                                        <tr>
                                                            <a href="#" style="position: relative; top: 6.5cm; left:40px; text-decoration: underline; font-size: 16px; color: white">
                                                                <b> Buy now</b></a>
                                                        </tr>
                                                    </table>
                                                    <img src="{{ asset('img/headphone.png') }}" class="bluetooth">
                                                </li>
                                                <li>
                                                    <ul style="padding-left: 10px;  flex-direction: row;">
                                                        <li class="newarrival-menu" style="width: 295px; height: 295px; margin-top: 10px; margin-right: 10px">
                                                            <img src="{{ asset('img/loa.png') }}" class="speaker">
                                                            <table class="infonewarrival" style="width: 300;">
                                                                <tr>
                                                                    <td style="position: absolute; top: -20px; left: 30px; width: 295px; font-size: 24px; color: white">
                                                                        <b> Speakers</b>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="position: absolute; top: 15px; left: 30px; width: 295px; font-size: 12px; color: white">
                                                                        Amazon wireless speakers</td>
                                                                </tr>
                                                                <tr>
                                                                    <a href="#" style="position: absolute;bottom: 15px; right: 42%; text-decoration: underline; font-size: 16px; color: white">
                                                                        <b> Buy now</b></a>
                                                                </tr>
                                                            </table>
                                                        </li>
                                                        <li class="newarrival-menu" style="width: 295px; height: 295px; margin-top: 10px;">
                                                            <img src="{{ asset('img/PC.png') }}" class="PC">
                                                            <table class="infonewarrival" style="width: 300;">
                                                                <tr>
                                                                    <td style="position: absolute; top: -2.1cm; left: 30px; width: 295px; font-size: 24px; color: white">
                                                                        <b> BTS NC 01</b>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="position: absolute; top: -1.2cm; left: 30px; width: 295px; font-size: 12px; color: white">
                                                                        BTS NC 01 </td>
                                                                </tr>
                                                                <tr>
                                                                    <a href="#" style="position: absolute; bottom: 15px; right: 16%; text-decoration: underline; font-size: 16px; color: white">
                                                                        <b> Buy now</b></a>
                                                                </tr>
                                                            </table>
                                                        </li>
                                                    </ul>
                                                </li>
                                        </li>
                                    </ul>
                                    </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Feedback -->
                <div class="BestSeller">
                    <div class="production">
                        <div class="secondary2"></div> <a class="pro-textS"> Feedback </a>
                    </div>
                    <div class="Fa">
                        <h1>Testimonials</h1>
                    </div>
                    <div class="Feedback">
                        <table style="padding: 30px 20px; font-size: 20px; margin: 0px auto">
                            <tr>
                                <!-- FeedbackCard -->

                            </tr>
                            <tr>
                                <td class="service">
                                    <img src="{{ asset('img/Services.png') }}" height="100px" width="100px">
                                    <p style="font-weight:600">Fast Delivery</p>
                                    <a style="font-weight:400; font-size: 15px">Free shipping for orders over $100</a>
                                </td>
                                <td class="service">
                                    <img src="{{ asset('img/Services (1).png') }}" height="100px" width="100px">
                                    <p style="font-weight:600;">24/7 Customer Service</p>
                                    <a style="font-weight:400; font-size: 15px">24/7 Customer Support and Care</a>
                                </td>
                                <td class="service">
                                    <img src="{{ asset('img/Services (2).png') }}" height="100px" width="100px">
                                    <p style="font-weight:600;">Warranty Policy</p>
                                    <a style="font-weight:400; font-size: 15px">30-day money-back guarantee</a>
                                </td>
                            </tr>
                        </table>
                    </div>


                </div>
            </div>

        </div>
    </div>
    @component('components.footer')
    @endcomponent
</body>

</html>