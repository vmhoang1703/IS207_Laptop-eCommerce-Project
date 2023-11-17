<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cửa hàng</title>
    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap_css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{asset('css/store.css') }}">
    <link rel="stylesheet" href="{{asset('css/responsive/store_res.css') }}">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="js/dropdown.js"></script>
    <script src="js/range.js" defer></script>
    <script src="js/pagination.js" defer></script>
</head>

<body>
    <!-- Header
    <section class="header ">
        <div class="Top-header">
            <div class="container py-2 px-5 ">
                <div class="row ">
                    <div class="col-sm-8 ">
                        SUMMER SHOPPING SPREE WITH UP TO 50% OFF!
                    </div>
                    <div class="SHOPNOW col-sm-2 pe-3 ">
                        <a href="#">SHOP NOW </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="container pt-5">
            <div class="row">
                <div class="header-logo col-sm-3">

                    <img class="logo" src="{{asset('img/logo.jpg')}}" width="174px" height="48px">
                    <div class="logo-text">Computer World - Electronic Components </div>
                </div>
                <div class="menu-header col-sm-1">
                    <a href="#">HOME </a>
                </div>
                <div class="menu-header col-sm-1">
                    <a href="#">STORE </a>
                </div>
                <div class="menu-header col-sm-1">
                    <a href="#">ABOUT US </a>
                </div>
                <div class="menu-header col-sm-1">
                    <a href="#">CONTACT </a>
                </div>
                <div class="responsive-menu col-sm-1 mt-5">
                    <div class="drop-down filter-item">
                        <button><i class="fa fa-bars" aria-hidden="true"></i></button>
                        <i></i>
                    </div>
                    <ul class="menu-bar menu-text">
                        <li><a href="#"> HOME </a></li>
                        <li> <a href="#"> STORE </a></li>
                        <li><a href="#"> ABOUT US </a></li>
                        <li><a href="#"> CONTACT </a></li>
                    </ul>
                </div>
                <div class="col-sm-3 ">
                    <div class="input-group mb-3">
                        <input type="text" class="search" placeholder="What are you looking for ?" aria-label="What are you looking for ?" aria-describedby="basic-addon2">
                        <span class="input-group-text" id=""><i class="fa fa-search"></i></span>
                    </div>
                </div>
                <div class="col-sm-1">
                    <span class="fa fa-heart-o pe-4 heart " aria-hidden="true"></span>

                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart3">
                            <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                        </svg>
                    </span>
                </div>
                <div class="col-sm-1">
                    <img src="{{asset('img/user.png')}}" width="40%"></a>
                </div>
            </div>
        </div>
        <hr style="width: 100%">
    </section> -->
    <section class="maincontain">
        <!-- main content -->
        <section class="main-content">
            <div class="container">
                <div class="row pb-5">
                    <!-- filter bar & menu -->
                    <div class="col-sm-2 filter-responsive">
                        <div class="filter">
                            <table class="filter-content">
                                <tr>
                                    <td>
                                        <a class="filtertext ps-5">Filter</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="group">
                                            <div class="progress"></div>
                                            <div class="range-input">
                                                <input class="range-min" max="10000" type="range" value="0" step="500">

                                                <input class="range-max" max="10000" type="range" value="10000" step="500">
                                            </div>
                                            <div class="range-text">
                                                <div class="text-min">0</div>
                                                <div class="text-max">10000</div>
                                            </div>
                                        </div>
                                        <div class="title_text d-flex">
                                            <div class="filter-item">lowest </div>
                                            <div class="filter-item">highest </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div id="cat_link"><a>Categories</a></div>
                                        <ul class="menu-bar">
                                            <li>
                                                <div class="drop-down filter-item">
                                                    <span>Laptop</span>
                                                    <i class="fa fa-angle-down" aria-hidden="true"></i>
                                                </div>
                                                <!-- </li> -->
                                                <ul class="menu-bar">
                                                    <li>
                                                        <div class="drop-down filter-item ">
                                                            <span>Monitor</span>
                                                            <i class="fa fa-angle-down deactive" aria-hidden="true"></i>
                                                        </div>

                                                        <ul class="menu-bar">
                                                            <li><label><input name="" type="checkbox"> 13 inch</label> </li>
                                                            <li><label><input name="" type="checkbox"> 14 inch</label> </li>
                                                            <li><label><input name="" type="checkbox"> Trên 15 inch</label> </li>
                                                        </ul>

                                                    </li>
                                                    <li class="li-hr">
                                                        <hr>
                                                    </li>
                                                    <li>
                                                        <div class="drop-down filter-item">
                                                            <span>CPU</span>
                                                            <i class="fa fa-angle-down" aria-hidden="true"></i>
                                                        </div>
                                                        <ul class="menu-bar">
                                                            <li><label><input name="" type="checkbox"> Intel celeron</label> </li>
                                                            <li><label><input name="" type="checkbox"> Intel pentium</label> </li>
                                                            <li><label><input name="" type="checkbox"> Intel core i5</label> </li>
                                                            <li><label><input name="" type="checkbox"> Intel core i7</label> </li>
                                                            <li><label><input name="" type="checkbox"> Amd ryzen 5</label> </li>
                                                            <li><label><input name="" type="checkbox"> Amd ryzen 7</label> </li>
                                                        </ul>
                                                    </li>
                                                    <li class="li-hr">
                                                        <hr>
                                                    </li>
                                                    <li>
                                                        <div class="drop-down filter-item">
                                                            <span>Ram</span>
                                                            <i class="fa fa-angle-down" aria-hidden="true"></i>
                                                        </div>
                                                        <ul class="menu-bar">
                                                            <li><label><input name="" type="checkbox"> 4GB</label> </li>
                                                            <li><label><input name="" type="checkbox"> 8GB</label> </li>
                                                            <li><label><input name="" type="checkbox"> 16GB</label> </li>
                                                            <li><label><input name="" type="checkbox"> 32GB</label> </li>
                                                            <li><label><input name="" type="checkbox"> 64GB</label> </li>
                                                        </ul>
                                                    </li>
                                                    <li class="li-hr">
                                                        <hr>
                                                    </li>
                                                    <li>
                                                        <div class="drop-down filter-item">
                                                            <span>Ổ cứng</span>
                                                            <i class="fa fa-angle-down" aria-hidden="true"></i>
                                                        </div>
                                                        <ul class="menu-bar">
                                                            <li><label><input name="" type="checkbox"> Ssd 1 tb</label> </li>
                                                            <li><label><input name="" type="checkbox"> Ssd 512 gb</label> </li>
                                                            <li><label><input name="" type="checkbox"> Ssd 256 gb</label> </li>
                                                            <li><label><input name="" type="checkbox"> Ssd 128 gb</label> </li>
                                                        </ul>
                                                    </li>


                                                </ul>
                                            </li>
                                            <li class="li-hr">
                                                <hr>
                                            </li>

                                            <li>
                                                <div class="drop-down filter-item">
                                                    <span>Accessories</span>
                                                    <i class="fa fa-angle-down" aria-hidden="true"></i>
                                                </div>
                                                <ul class="menu-bar">
                                                    <li>Power banks </li>
                                                    <li>Cables, chargers </li>
                                                    <li>Phone cases </li>
                                                    <li>Speakers </li>
                                                    <li>Headphones </li>
                                                </ul>
                                            </li>
                                            <li class="li-hr">
                                                <hr>
                                            </li>
                                            <li>
                                                <div class="drop-down filter-item">
                                                    <span>PCs, printer, screens</span>
                                                    <i class="fa fa-angle-down" aria-hidden="true"></i>
                                                </div>
                                                <ul class="menu-bar">
                                                    <li>Printers </li>
                                                    <li>Printer ink </li>
                                                    <li>Monitor </li>
                                                    <li>Gaming PC </li>
                                                </ul>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div class="col-sm-9 fix  ms-5 mt-5">
                        <div class="store">
                            <div class="card">
                                <div class="img">
                                    <img src="{{ asset('img/keboard.png') }}" alt="img" class="mt-4">
                                </div>
                                <div class="card-action">
                                    <div class="btn">
                                        <button>Buy now</button>
                                        <button>Add Cart</button>
                                    </div>
                                </div>
                                <div style="white-space: nowrap;">
                                    <div class="productname ms-2">AK-900 Wired Keyboard</div>
                                    <div class="cost ms-2"> 50$ <span class="discount">53$</span></div>
                                    <div class="star-bar ms-3">
                                        <span class="fa fa-star star"></span>
                                        <span class="fa fa-star star"></span>
                                        <span class="fa fa-star star"></span>
                                        <span class="fa fa-star star"></span>
                                        <span class="fa fa-star star"></span>
                                        <span class="numbered">(4.3)</span>
                                    </div>
                                    <div class="fa fa-heart heart mt-2"> </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="img">

                                    <img src="{{ asset('img/keboard.png') }}" alt="img" class="mt-4">
                                </div>
                                <div class="card-action">
                                    <div class="btn">
                                        <button>Buy now</button>
                                        <button>Add Cart</button>
                                    </div>
                                </div>
                                <div style="white-space: nowrap;">
                                    <div class="productname ms-2">AK-900 Wired Keyboard</div>
                                    <div class="cost ms-2"> 50$ <span class="discount">53$</span></div>
                                    <div class="star-bar ms-3">
                                        <span class="fa fa-star star"></span>
                                        <span class="fa fa-star star"></span>
                                        <span class="fa fa-star star"></span>
                                        <span class="fa fa-star star"></span>
                                        <span class="fa fa-star star"></span>
                                        <span class="numbered">(4.3)</span>
                                    </div>
                                    <div class="fa fa-heart heart mt-2"> </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="img">

                                    <img src="{{ asset('img/keboard.png') }}" alt="img" class="mt-4">
                                </div>
                                <div class="card-action">
                                    <div class="btn">
                                        <button>Buy now</button>
                                        <button>Add Cart</button>
                                    </div>
                                </div>
                                <div style="white-space: nowrap;">
                                    <div class="productname ms-2">AK-900 Wired Keyboard</div>
                                    <div class="cost ms-2"> 50$ <span class="discount">53$</span></div>
                                    <div class="star-bar ms-3">
                                        <span class="fa fa-star star"></span>
                                        <span class="fa fa-star star"></span>
                                        <span class="fa fa-star star"></span>
                                        <span class="fa fa-star star"></span>
                                        <span class="fa fa-star star"></span>
                                        <span class="numbered">(4.3)</span>
                                    </div>
                                    <div class="fa fa-heart heart mt-2"> </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="img">

                                    <img src="{{ asset('img/keboard.png') }}" alt="img" class="mt-4">
                                </div>
                                <div class="card-action">
                                    <div class="btn">
                                        <button>Buy now</button>
                                        <button>Add Cart</button>
                                    </div>
                                </div>
                                <div style="white-space: nowrap;">
                                    <div class="productname ms-2">AK-900 Wired Keyboard</div>
                                    <div class="cost ms-2"> 50$ <span class="discount">53$</span></div>
                                    <div class="star-bar ms-3">
                                        <span class="fa fa-star star"></span>
                                        <span class="fa fa-star star"></span>
                                        <span class="fa fa-star star"></span>
                                        <span class="fa fa-star star"></span>
                                        <span class="fa fa-star star"></span>
                                        <span class="numbered">(4.3)</span>
                                    </div>
                                    <div class="fa fa-heart heart mt-2"> </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="img">

                                    <img src="{{ asset('img/keboard.png') }}" alt="img" class="mt-4">
                                </div>
                                <div class="card-action">
                                    <div class="btn">
                                        <button>Buy now</button>
                                        <button>Add Cart</button>
                                    </div>
                                </div>
                                <div style="white-space: nowrap;">
                                    <div class="productname ms-2">AK-900 Wired Keyboard</div>
                                    <div class="cost ms-2"> 50$ <span class="discount">53$</span></div>
                                    <div class="star-bar ms-3">
                                        <span class="fa fa-star star"></span>
                                        <span class="fa fa-star star"></span>
                                        <span class="fa fa-star star"></span>
                                        <span class="fa fa-star star"></span>
                                        <span class="fa fa-star star"></span>
                                        <span class="numbered">(4.3)</span>
                                    </div>
                                    <div class="fa fa-heart heart mt-2"> </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="img">

                                    <img src="{{ asset('img/keboard.png') }}" alt="img" class="mt-4">
                                </div>
                                <div class="card-action">
                                    <div class="btn">
                                        <button>Buy now</button>
                                        <button>Add Cart</button>
                                    </div>
                                </div>
                                <div style="white-space: nowrap;">
                                    <div class="productname ms-2">AK-900 Wired Keyboard</div>
                                    <div class="cost ms-2"> 50$ <span class="discount">53$</span></div>
                                    <div class="star-bar ms-3">
                                        <span class="fa fa-star star"></span>
                                        <span class="fa fa-star star"></span>
                                        <span class="fa fa-star star"></span>
                                        <span class="fa fa-star star"></span>
                                        <span class="fa fa-star star"></span>
                                        <span class="numbered">(4.3)</span>
                                    </div>
                                    <div class="fa fa-heart heart mt-2"> </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="img">

                                    <img src="{{ asset('img/keboard.png') }}" alt="img" class="mt-4">
                                </div>
                                <div class="card-action">
                                    <div class="btn">
                                        <button>Buy now</button>
                                        <button>Add Cart</button>
                                    </div>
                                </div>
                                <div style="white-space: nowrap;">
                                    <div class="productname ms-2">AK-900 Wired Keyboard</div>
                                    <div class="cost ms-2"> 50$ <span class="discount">53$</span></div>
                                    <div class="star-bar ms-3">
                                        <span class="fa fa-star star"></span>
                                        <span class="fa fa-star star"></span>
                                        <span class="fa fa-star star"></span>
                                        <span class="fa fa-star star"></span>
                                        <span class="fa fa-star star"></span>
                                        <span class="numbered">(4.3)</span>
                                    </div>
                                    <div class="fa fa-heart heart mt-2"> </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="img">

                                    <img src="{{ asset('img/keboard.png') }}" alt="img" class="mt-4">
                                </div>
                                <div class="card-action">
                                    <div class="btn">
                                        <button>Buy now</button>
                                        <button>Add Cart</button>
                                    </div>
                                </div>
                                <div style="white-space: nowrap;">
                                    <div class="productname ms-2">AK-900 Wired Keyboard</div>
                                    <div class="cost ms-2"> 50$ <span class="discount">53$</span></div>
                                    <div class="star-bar ms-3">
                                        <span class="fa fa-star star"></span>
                                        <span class="fa fa-star star"></span>
                                        <span class="fa fa-star star"></span>
                                        <span class="fa fa-star star"></span>
                                        <span class="fa fa-star star"></span>
                                        <span class="numbered">(4.3)</span>
                                    </div>
                                    <div class="fa fa-heart heart mt-2"> </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="img">

                                    <img src="{{ asset('img/keboard.png') }}" alt="img" class="mt-4">
                                </div>
                                <div class="card-action">
                                    <div class="btn">
                                        <button>Buy now</button>
                                        <button>Add Cart</button>
                                    </div>
                                </div>
                                <div style="white-space: nowrap;">
                                    <div class="productname ms-2">AK-900 Wired Keyboard</div>
                                    <div class="cost ms-2"> 50$ <span class="discount">53$</span></div>
                                    <div class="star-bar ms-3">
                                        <span class="fa fa-star star"></span>
                                        <span class="fa fa-star star"></span>
                                        <span class="fa fa-star star"></span>
                                        <span class="fa fa-star star"></span>
                                        <span class="fa fa-star star"></span>
                                        <span class="numbered">(4.3)</span>
                                    </div>
                                    <div class="fa fa-heart heart mt-2"> </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="img">

                                    <img src="{{ asset('img/keboard.png') }}" alt="img" class="mt-4">
                                </div>
                                <div class="card-action">
                                    <div class="btn">
                                        <button>Buy now</button>
                                        <button>Add Cart</button>
                                    </div>
                                </div>
                                <div style="white-space: nowrap;">
                                    <div class="productname ms-2">AK-900 Wired Keyboard</div>
                                    <div class="cost ms-2"> 50$ <span class="discount">53$</span></div>
                                    <div class="star-bar ms-3">
                                        <span class="fa fa-star star"></span>
                                        <span class="fa fa-star star"></span>
                                        <span class="fa fa-star star"></span>
                                        <span class="fa fa-star star"></span>
                                        <span class="fa fa-star star"></span>
                                        <span class="numbered">(4.3)</span>
                                    </div>
                                    <div class="fa fa-heart heart mt-2"> </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="img">

                                    <img src="{{ asset('img/keboard.png') }}" alt="img" class="mt-4">
                                </div>
                                <div class="card-action">
                                    <div class="btn">
                                        <button>Buy now</button>
                                        <button>Add Cart</button>
                                    </div>
                                </div>
                                <div style="white-space: nowrap;">
                                    <div class="productname ms-2">AK-900 Wired Keyboard</div>
                                    <div class="cost ms-2"> 50$ <span class="discount">53$</span></div>
                                    <div class="star-bar ms-3">
                                        <span class="fa fa-star star"></span>
                                        <span class="fa fa-star star"></span>
                                        <span class="fa fa-star star"></span>
                                        <span class="fa fa-star star"></span>
                                        <span class="fa fa-star star"></span>
                                        <span class="numbered">(4.3)</span>
                                    </div>
                                    <div class="fa fa-heart heart mt-2"> </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="img">

                                    <img src="{{ asset('img/keboard.png') }}" alt="img" class="mt-4">
                                </div>
                                <div class="card-action">
                                    <div class="btn">
                                        <button>Buy now</button>
                                        <button>Add Cart</button>
                                    </div>
                                </div>
                                <div style="white-space: nowrap;">
                                    <div class="productname ms-2">AK-900 Wired Keyboard</div>
                                    <div class="cost ms-2"> 50$ <span class="discount">53$</span></div>
                                    <div class="star-bar ms-3">
                                        <span class="fa fa-star star"></span>
                                        <span class="fa fa-star star"></span>
                                        <span class="fa fa-star star"></span>
                                        <span class="fa fa-star star"></span>
                                        <span class="fa fa-star star"></span>
                                        <span class="numbered">(4.3)</span>
                                    </div>
                                    <div class="fa fa-heart heart mt-2"> </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="img">

                                    <img src="{{ asset('img/keboard.png') }}" alt="img" class="mt-4">
                                </div>
                                <div class="card-action">
                                    <div class="btn">
                                        <button>Buy now</button>
                                        <button>Add Cart</button>
                                    </div>
                                </div>
                                <div style="white-space: nowrap;">
                                    <div class="productname ms-2">AK-900 Wired Keyboard</div>
                                    <div class="cost ms-2"> 50$ <span class="discount">53$</span></div>
                                    <div class="star-bar ms-3">
                                        <span class="fa fa-star star"></span>
                                        <span class="fa fa-star star"></span>
                                        <span class="fa fa-star star"></span>
                                        <span class="fa fa-star star"></span>
                                        <span class="fa fa-star star"></span>
                                        <span class="numbered">(4.3)</span>
                                    </div>
                                    <div class="fa fa-heart heart mt-2"> </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="img">

                                    <img src="{{ asset('img/keboard.png') }}" alt="img" class="mt-4">
                                </div>
                                <div class="card-action">
                                    <div class="btn">
                                        <button>Buy now</button>
                                        <button>Add Cart</button>
                                    </div>
                                </div>
                                <div style="white-space: nowrap;">
                                    <div class="productname ms-2">AK-900 Wired Keyboard</div>
                                    <div class="cost ms-2"> 50$ <span class="discount">53$</span></div>
                                    <div class="star-bar ms-3">
                                        <span class="fa fa-star star"></span>
                                        <span class="fa fa-star star"></span>
                                        <span class="fa fa-star star"></span>
                                        <span class="fa fa-star star"></span>
                                        <span class="fa fa-star star"></span>
                                        <span class="numbered">(4.3)</span>
                                    </div>
                                    <div class="fa fa-heart heart mt-2"> </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="img">

                                    <img src="{{ asset('img/keboard.png') }}" alt="img" class="mt-4">
                                </div>
                                <div class="card-action">
                                    <div class="btn">
                                        <button>Buy now</button>
                                        <button>Add Cart</button>
                                    </div>
                                </div>
                                <div style="white-space: nowrap;">
                                    <div class="productname ms-2">AK-900 Wired Keyboard</div>
                                    <div class="cost ms-2"> 50$ <span class="discount">53$</span></div>
                                    <div class="star-bar ms-3">
                                        <span class="fa fa-star star"></span>
                                        <span class="fa fa-star star"></span>
                                        <span class="fa fa-star star"></span>
                                        <span class="fa fa-star star"></span>
                                        <span class="fa fa-star star"></span>
                                        <span class="numbered">(4.3)</span>
                                    </div>
                                    <div class="fa fa-heart heart mt-2"> </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="img">

                                    <img src="{{ asset('img/keboard.png') }}" alt="img" class="mt-4">
                                </div>
                                <div class="card-action">
                                    <div class="btn">
                                        <button>Buy now</button>
                                        <button>Add Cart</button>
                                    </div>
                                </div>
                                <div style="white-space: nowrap;">
                                    <div class="productname ms-2">AK-900 Wired Keyboard</div>
                                    <div class="cost ms-2"> 50$ <span class="discount">53$</span></div>
                                    <div class="star-bar ms-3">
                                        <span class="fa fa-star star"></span>
                                        <span class="fa fa-star star"></span>
                                        <span class="fa fa-star star"></span>
                                        <span class="fa fa-star star"></span>
                                        <span class="fa fa-star star"></span>
                                        <span class="numbered">(4.3)</span>
                                    </div>
                                    <div class="fa fa-heart heart mt-2"> </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="img">

                                    <img src="{{ asset('img/keboard.png') }}" alt="img" class="mt-4">
                                </div>
                                <div class="card-action">
                                    <div class="btn">
                                        <button>Buy now</button>
                                        <button>Add Cart</button>
                                    </div>
                                </div>
                                <div style="white-space: nowrap;">
                                    <div class="productname ms-2">AK-900 Wired Keyboard</div>
                                    <div class="cost ms-2"> 50$ <span class="discount">53$</span></div>
                                    <div class="star-bar ms-3">
                                        <span class="fa fa-star star"></span>
                                        <span class="fa fa-star star"></span>
                                        <span class="fa fa-star star"></span>
                                        <span class="fa fa-star star"></span>
                                        <span class="fa fa-star star"></span>
                                        <span class="numbered">(4.3)</span>
                                    </div>
                                    <div class="fa fa-heart heart mt-2"> </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="img">

                                    <img src="{{ asset('img/keboard.png') }}" alt="img" class="mt-4">
                                </div>
                                <div class="card-action">
                                    <div class="btn">
                                        <button>Buy now</button>
                                        <button>Add Cart</button>
                                    </div>
                                </div>
                                <div style="white-space: nowrap;">
                                    <div class="productname ms-2">AK-900 Wired Keyboard</div>
                                    <div class="cost ms-2"> 50$ <span class="discount">53$</span></div>
                                    <div class="star-bar ms-3">
                                        <span class="fa fa-star star"></span>
                                        <span class="fa fa-star star"></span>
                                        <span class="fa fa-star star"></span>
                                        <span class="fa fa-star star"></span>
                                        <span class="fa fa-star star"></span>
                                        <span class="numbered">(4.3)</span>
                                    </div>
                                    <div class="fa fa-heart heart mt-2"> </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="img">

                                    <img src="{{ asset('img/keboard.png') }}" alt="img" class="mt-4">
                                </div>
                                <div class="card-action">
                                    <div class="btn">
                                        <button>Buy now</button>
                                        <button>Add Cart</button>
                                    </div>
                                </div>
                                <div style="white-space: nowrap;">
                                    <div class="productname ms-2">AK-900 Wired Keyboard</div>
                                    <div class="cost ms-2"> 50$ <span class="discount">53$</span></div>
                                    <div class="star-bar ms-3">
                                        <span class="fa fa-star star"></span>
                                        <span class="fa fa-star star"></span>
                                        <span class="fa fa-star star"></span>
                                        <span class="fa fa-star star"></span>
                                        <span class="fa fa-star star"></span>
                                        <span class="numbered">(4.3)</span>
                                    </div>
                                    <div class="fa fa-heart heart mt-2"> </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="img">

                                    <img src="{{ asset('img/keboard.png') }}" alt="img" class="mt-4">
                                </div>
                                <div class="card-action">
                                    <div class="btn">
                                        <button>Buy now</button>
                                        <button>Add Cart</button>
                                    </div>
                                </div>
                                <div style="white-space: nowrap;">
                                    <div class="productname ms-2">AK-900 Wired Keyboard</div>
                                    <div class="cost ms-2"> 50$ <span class="discount">53$</span></div>
                                    <div class="star-bar ms-3">
                                        <span class="fa fa-star star"></span>
                                        <span class="fa fa-star star"></span>
                                        <span class="fa fa-star star"></span>
                                        <span class="fa fa-star star"></span>
                                        <span class="fa fa-star star"></span>
                                        <span class="numbered">(4.3)</span>
                                    </div>
                                    <div class="fa fa-heart heart mt-2"> </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="img">

                                    <img src="{{ asset('img/keboard.png') }}" alt="img" class="mt-4">
                                </div>
                                <div class="card-action">
                                    <div class="btn">
                                        <button>Buy now</button>
                                        <button>Add Cart</button>
                                    </div>
                                </div>
                                <div style="white-space: nowrap;">
                                    <div class="productname ms-2">AK-900 Wired Keyboard</div>
                                    <div class="cost ms-2"> 50$ <span class="discount">53$</span></div>
                                    <div class="star-bar ms-3">
                                        <span class="fa fa-star star"></span>
                                        <span class="fa fa-star star"></span>
                                        <span class="fa fa-star star"></span>
                                        <span class="fa fa-star star"></span>
                                        <span class="fa fa-star star"></span>
                                        <span class="numbered">(4.3)</span>
                                    </div>
                                    <div class="fa fa-heart heart mt-2"> </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="img">

                                    <img src="{{ asset('img/keboard.png') }}" alt="img" class="mt-4">
                                </div>
                                <div class="card-action">
                                    <div class="btn">
                                        <button>Buy now</button>
                                        <button>Add Cart</button>
                                    </div>
                                </div>
                                <div style="white-space: nowrap;">
                                    <div class="productname ms-2">AK-900 Wired Keyboard</div>
                                    <div class="cost ms-2"> 50$ <span class="discount">53$</span></div>
                                    <div class="star-bar ms-3">
                                        <span class="fa fa-star star"></span>
                                        <span class="fa fa-star star"></span>
                                        <span class="fa fa-star star"></span>
                                        <span class="fa fa-star star"></span>
                                        <span class="fa fa-star star"></span>
                                        <span class="numbered">(4.3)</span>
                                    </div>
                                    <div class="fa fa-heart heart mt-2"> </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="img">

                                    <img src="{{ asset('img/keboard.png') }}" alt="img" class="mt-4">
                                </div>
                                <div class="card-action">
                                    <div class="btn">
                                        <button>Buy now</button>
                                        <button>Add Cart</button>
                                    </div>
                                </div>
                                <div style="white-space: nowrap;">
                                    <div class="productname ms-2">AK-900 Wired Keyboard</div>
                                    <div class="cost ms-2"> 50$ <span class="discount">53$</span></div>
                                    <div class="star-bar ms-3">
                                        <span class="fa fa-star star"></span>
                                        <span class="fa fa-star star"></span>
                                        <span class="fa fa-star star"></span>
                                        <span class="fa fa-star star"></span>
                                        <span class="fa fa-star star"></span>
                                        <span class="numbered">(4.3)</span>
                                    </div>
                                    <div class="fa fa-heart heart mt-2"> </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="img">

                                    <img src="{{ asset('img/keboard.png') }}" alt="img" class="mt-4">
                                </div>
                                <div class="card-action">
                                    <div class="btn">
                                        <button>Buy now</button>
                                        <button>Add Cart</button>
                                    </div>
                                </div>
                                <div style="white-space: nowrap;">
                                    <div class="productname ms-2">AK-900 Wired Keyboard</div>
                                    <div class="cost ms-2"> 50$ <span class="discount">53$</span></div>
                                    <div class="star-bar ms-3">
                                        <span class="fa fa-star star"></span>
                                        <span class="fa fa-star star"></span>
                                        <span class="fa fa-star star"></span>
                                        <span class="fa fa-star star"></span>
                                        <span class="fa fa-star star"></span>
                                        <span class="numbered">(4.3)</span>
                                    </div>
                                    <div class="fa fa-heart heart mt-2"> </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="img">

                                    <img src="{{ asset('img/keboard.png') }}" alt="img" class="mt-4">
                                </div>
                                <div class="card-action">
                                    <div class="btn">
                                        <button>Buy now</button>
                                        <button>Add Cart</button>
                                    </div>
                                </div>
                                <div style="white-space: nowrap;">
                                    <div class="productname ms-2">AK-900 Wired Keyboard</div>
                                    <div class="cost ms-2"> 50$ <span class="discount">53$</span></div>
                                    <div class="star-bar ms-3">
                                        <span class="fa fa-star star"></span>
                                        <span class="fa fa-star star"></span>
                                        <span class="fa fa-star star"></span>
                                        <span class="fa fa-star star"></span>
                                        <span class="fa fa-star star"></span>
                                        <span class="numbered">(4.3)</span>
                                    </div>
                                    <div class="fa fa-heart heart mt-2"> </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="img">

                                    <img src="{{ asset('img/keboard.png') }}" alt="img" class="mt-4">
                                </div>
                                <div class="card-action">
                                    <div class="btn">
                                        <button>Buy now</button>
                                        <button>Add Cart</button>
                                    </div>
                                </div>
                                <div style="white-space: nowrap;">
                                    <div class="productname ms-2">AK-900 Wired Keyboard</div>
                                    <div class="cost ms-2"> 50$ <span class="discount">53$</span></div>
                                    <div class="star-bar ms-3">
                                        <span class="fa fa-star star"></span>
                                        <span class="fa fa-star star"></span>
                                        <span class="fa fa-star star"></span>
                                        <span class="fa fa-star star"></span>
                                        <span class="fa fa-star star"></span>
                                        <span class="numbered">(4.3)</span>
                                    </div>
                                    <div class="fa fa-heart heart mt-2"> </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="img">

                                    <img src="{{ asset('img/keboard.png') }}" alt="img" class="mt-4">
                                </div>
                                <div class="card-action">
                                    <div class="btn">
                                        <button>Buy now</button>
                                        <button>Add Cart</button>
                                    </div>
                                </div>
                                <div style="white-space: nowrap;">
                                    <div class="productname ms-2">AK-900 Wired Keyboard</div>
                                    <div class="cost ms-2"> 50$ <span class="discount">53$</span></div>
                                    <div class="star-bar ms-3">
                                        <span class="fa fa-star star"></span>
                                        <span class="fa fa-star star"></span>
                                        <span class="fa fa-star star"></span>
                                        <span class="fa fa-star star"></span>
                                        <span class="fa fa-star star"></span>
                                        <span class="numbered">(4.3)</span>
                                    </div>
                                    <div class="fa fa-heart heart mt-2"> </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="img">

                                    <img src="{{ asset('img/keboard.png') }}" alt="img" class="mt-4">
                                </div>
                                <div class="card-action">
                                    <div class="btn">
                                        <button>Buy now</button>
                                        <button>Add Cart</button>
                                    </div>
                                </div>
                                <div style="white-space: nowrap;">
                                    <div class="productname ms-2">AK-900 Wired Keyboard</div>
                                    <div class="cost ms-2"> 50$ <span class="discount">53$</span></div>
                                    <div class="star-bar ms-3">
                                        <span class="fa fa-star star"></span>
                                        <span class="fa fa-star star"></span>
                                        <span class="fa fa-star star"></span>
                                        <span class="fa fa-star star"></span>
                                        <span class="fa fa-star star"></span>
                                        <span class="numbered">(4.3)</span>
                                    </div>
                                    <div class="fa fa-heart heart mt-2"> </div>
                                </div>
                            </div>
                            <!-- heart action -->
                            <script>
                                document.querySelectorAll(".heart").forEach(item =>
                                    item.addEventListener('click', function() {
                                        if (this.style.color != "red")
                                            this.style.color = "red"
                                        else
                                            this.style.color = "black"
                                    })
                                )
                            </script>
                            <!-- ----------------------------------------- -->

                        </div>
                    </div>
                </div>
        </section>
        <div class="box">
        <div class="pagination">
                    <ul>
                           <!-- trong script -->
                   </ul>
                </div>
        </div>

</body>

</html>
