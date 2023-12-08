<!-- styles  -->
<link rel="stylesheet" href="{{ asset('css/header_signup.css') }}">
 <!-- Fonts -->
 <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!-- scripts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="{{asset('js/home_dropdown.js')}}"  ></script>
 <!-- Header -->
 <section class="header">
        <div class="Top-header">
            <div class="container py-2 px-5 ">
                <div class="row ms-5 ">
                    <div class="SSS col-lg-6 col-md-12 col-xs-12 ">
                        SUMMER SHOPPING SPREE WITH UP TO 50% OFF!
                    </div>
                    <div class="SHOPNOW col-lg-2 col-md-12 pe-3 ">
                        <a href="#">SHOP NOW </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container pt-5">
        <div class="row ress">
            <div class="header-logo col-lg-3 col-md-12 mb-5">

                    <img class="logo" src="{{asset('img/logo.jpg')}}" width="174px" height="48px">
                    <div class="logo-text">Computer World - Electronic Components </div>
                </div>
               <div class="col-sm-5 d-flex justify-content-between">
                <div class="menu-header">
                    <a href="{{ route('home.show') }}">HOME </a>
                </div>
                <div class="menu-header ps-5">
                    <a href="{{ route('store.show') }}">STORE </a>
                </div>
                <div class="menu-header ps-5 " style="white-space: nowrap;">
                    <a href="#">BLOG </a>
                </div>
                <div class="menu-header ps-5 " style="white-space: nowrap;">
                    <a href="#">ABOUT US </a>
                </div>
                <div class="menu-header ps-5 ">
                    <a href="#">CONTACT </a>
                </div>
                </div>
                <div class="signup col-lg-2 col-md-12">
                    <button class="btn-signup"> Sign up </button>
                </div>
            </div>
            <div class="row">
            <div class="responsive-menu col-sm-1 my-5 ">
                    <div class="drop-down filter-item">
                        <button><i class="fa fa-bars" aria-hidden="true"></i></button>
                        <i></i>
                    </div>
                    <ul class="menu-bar menu-text">
                        <li><a href="{{ route('home.show') }}"> HOME </a></li>
                        <li><a href="{{ route('store.show') }}"> STORE </a></li>
                        <li><a href="#"> BLOG </a></li>
                        <li><a href="{{ route('aboutus.show') }}" style="white-space:nowrap"> ABOUT US </a></li>
                        <li><a href="#"> CONTACT </a></li>
                    </ul>
                </div>

            </div>
        </div>
    </div>
    <hr style="width: 100%;margin-top:-20px">
</section>
