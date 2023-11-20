<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cửa hàng</title>
    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap_css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{asset('css/product_card.css') }}">
    <link rel="stylesheet" href="{{asset('css/store.css') }}">
    <link rel="stylesheet" href="{{asset('css/responsive/store_res.css') }}">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="js/range.js" defer></script>
    <script src="js/pagination.js" defer></script>
</head>

<body>
        <!-- header -->
        @component("components.header")
    @endcomponent
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
                    <!-- Store -->
                    <div class="col-sm-9 fix  ms-5 mt-5">
                    <div class="store ms-5" >
                    <div class="carousel_store carousel ms-5">
                        <div class="card">
                            <div class="heart">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none" stroke="black" class="heart1">
                                    <path d="M11 7C8.239 7 6 9.216 6 11.95C6 14.157 6.875 19.395 15.488 24.69C15.6423 24.7839 15.8194 24.8335 16 24.8335C16.1806 24.8335 16.3577 24.7839 16.512 24.69C25.125 19.395 26 14.157 26 11.95C26 9.216 23.761 7 21 7C18.239 7 16 10 16 10C16 10 13.761 7 11 7Z" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </div>
                            <div class="img"><img src="{{asset('img/keboard.png')}}" alt="img"></div>
                            <div class="card-action">
                                <div class="btn">
                                    <button>Buy now</button>
                                    <button>Add cart</button>
                                </div>
                            </div>
                            <div class="info-card">
                                <div class="productname">AK-900 Wired Keyboard1</div>
                                <div class="cost"> 50$ <span class="discount">53$</span></div>
                                <div class="star-bar">
                                    <span class="fa fa-star star"></span>
                                    <span class="fa fa-star star"></span>
                                    <span class="fa fa-star star"></span>
                                    <span class="fa fa-star star"></span>
                                    <span class="fa fa-star star"></span>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="heart">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none" stroke="black" class="heart1">
                                    <path d="M11 7C8.239 7 6 9.216 6 11.95C6 14.157 6.875 19.395 15.488 24.69C15.6423 24.7839 15.8194 24.8335 16 24.8335C16.1806 24.8335 16.3577 24.7839 16.512 24.69C25.125 19.395 26 14.157 26 11.95C26 9.216 23.761 7 21 7C18.239 7 16 10 16 10C16 10 13.761 7 11 7Z" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </div>
                            <div class="img"><img src="{{asset('img/keboard.png')}}" alt="img"></div>
                            <div class="card-action">
                                <div class="btn">
                                    <button>Buy now</button>
                                    <button>Add cart</button>
                                </div>
                            </div>
                            <div class="info-card">
                                <div class="productname">AK-900 Wired Keyboard1</div>
                                <div class="cost"> 50$ <span class="discount">53$</span></div>
                                <div class="star-bar">
                                    <span class="fa fa-star star"></span>
                                    <span class="fa fa-star star"></span>
                                    <span class="fa fa-star star"></span>
                                    <span class="fa fa-star star"></span>
                                    <span class="fa fa-star star"></span>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="heart">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none" stroke="black" class="heart1">
                                    <path d="M11 7C8.239 7 6 9.216 6 11.95C6 14.157 6.875 19.395 15.488 24.69C15.6423 24.7839 15.8194 24.8335 16 24.8335C16.1806 24.8335 16.3577 24.7839 16.512 24.69C25.125 19.395 26 14.157 26 11.95C26 9.216 23.761 7 21 7C18.239 7 16 10 16 10C16 10 13.761 7 11 7Z" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </div>
                            <div class="img"><img src="{{asset('img/keboard.png')}}" alt="img"></div>
                            <div class="card-action">
                                <div class="btn">
                                    <button>Buy now</button>
                                    <button>Add cart</button>
                                </div>
                            </div>
                            <div class="info-card">
                                <div class="productname">AK-900 Wired Keyboard1</div>
                                <div class="cost"> 50$ <span class="discount">53$</span></div>
                                <div class="star-bar">
                                    <span class="fa fa-star star"></span>
                                    <span class="fa fa-star star"></span>
                                    <span class="fa fa-star star"></span>
                                    <span class="fa fa-star star"></span>
                                    <span class="fa fa-star star"></span>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="heart">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none" stroke="black" class="heart1">
                                    <path d="M11 7C8.239 7 6 9.216 6 11.95C6 14.157 6.875 19.395 15.488 24.69C15.6423 24.7839 15.8194 24.8335 16 24.8335C16.1806 24.8335 16.3577 24.7839 16.512 24.69C25.125 19.395 26 14.157 26 11.95C26 9.216 23.761 7 21 7C18.239 7 16 10 16 10C16 10 13.761 7 11 7Z" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </div>
                            <div class="img"><img src="{{asset('img/keboard.png')}}" alt="img"></div>
                            <div class="card-action">
                                <div class="btn">
                                    <button>Buy now</button>
                                    <button>Add cart</button>
                                </div>
                            </div>
                            <div class="info-card">
                                <div class="productname">AK-900 Wired Keyboard1</div>
                                <div class="cost"> 50$ <span class="discount">53$</span></div>
                                <div class="star-bar">
                                    <span class="fa fa-star star"></span>
                                    <span class="fa fa-star star"></span>
                                    <span class="fa fa-star star"></span>
                                    <span class="fa fa-star star"></span>
                                    <span class="fa fa-star star"></span>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="heart">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none" stroke="black" class="heart1">
                                    <path d="M11 7C8.239 7 6 9.216 6 11.95C6 14.157 6.875 19.395 15.488 24.69C15.6423 24.7839 15.8194 24.8335 16 24.8335C16.1806 24.8335 16.3577 24.7839 16.512 24.69C25.125 19.395 26 14.157 26 11.95C26 9.216 23.761 7 21 7C18.239 7 16 10 16 10C16 10 13.761 7 11 7Z" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </div>
                            <div class="img"><img src="{{asset('img/keboard.png')}}" alt="img"></div>
                            <div class="card-action">
                                <div class="btn">
                                    <button>Buy now</button>
                                    <button>Add cart</button>
                                </div>
                            </div>
                            <div class="info-card">
                                <div class="productname">AK-900 Wired Keyboard1</div>
                                <div class="cost"> 50$ <span class="discount">53$</span></div>
                                <div class="star-bar">
                                    <span class="fa fa-star star"></span>
                                    <span class="fa fa-star star"></span>
                                    <span class="fa fa-star star"></span>
                                    <span class="fa fa-star star"></span>
                                    <span class="fa fa-star star"></span>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="heart">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none" stroke="black" class="heart1">
                                    <path d="M11 7C8.239 7 6 9.216 6 11.95C6 14.157 6.875 19.395 15.488 24.69C15.6423 24.7839 15.8194 24.8335 16 24.8335C16.1806 24.8335 16.3577 24.7839 16.512 24.69C25.125 19.395 26 14.157 26 11.95C26 9.216 23.761 7 21 7C18.239 7 16 10 16 10C16 10 13.761 7 11 7Z" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </div>
                            <div class="img"><img src="{{asset('img/keboard.png')}}" alt="img"></div>
                            <div class="card-action">
                                <div class="btn">
                                    <button>Buy now</button>
                                    <button>Add cart</button>
                                </div>
                            </div>
                            <div class="info-card">
                                <div class="productname">AK-900 Wired Keyboard1</div>
                                <div class="cost"> 50$ <span class="discount">53$</span></div>
                                <div class="star-bar">
                                    <span class="fa fa-star star"></span>
                                    <span class="fa fa-star star"></span>
                                    <span class="fa fa-star star"></span>
                                    <span class="fa fa-star star"></span>
                                    <span class="fa fa-star star"></span>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="heart">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none" stroke="black" class="heart1">
                                    <path d="M11 7C8.239 7 6 9.216 6 11.95C6 14.157 6.875 19.395 15.488 24.69C15.6423 24.7839 15.8194 24.8335 16 24.8335C16.1806 24.8335 16.3577 24.7839 16.512 24.69C25.125 19.395 26 14.157 26 11.95C26 9.216 23.761 7 21 7C18.239 7 16 10 16 10C16 10 13.761 7 11 7Z" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </div>
                            <div class="img"><img src="{{asset('img/keboard.png')}}" alt="img"></div>
                            <div class="card-action">
                                <div class="btn">
                                    <button>Buy now</button>
                                    <button>Add cart</button>
                                </div>
                            </div>
                            <div class="info-card">
                                <div class="productname">AK-900 Wired Keyboard1</div>
                                <div class="cost"> 50$ <span class="discount">53$</span></div>
                                <div class="star-bar">
                                    <span class="fa fa-star star"></span>
                                    <span class="fa fa-star star"></span>
                                    <span class="fa fa-star star"></span>
                                    <span class="fa fa-star star"></span>
                                    <span class="fa fa-star star"></span>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="heart">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none" stroke="black" class="heart1">
                                    <path d="M11 7C8.239 7 6 9.216 6 11.95C6 14.157 6.875 19.395 15.488 24.69C15.6423 24.7839 15.8194 24.8335 16 24.8335C16.1806 24.8335 16.3577 24.7839 16.512 24.69C25.125 19.395 26 14.157 26 11.95C26 9.216 23.761 7 21 7C18.239 7 16 10 16 10C16 10 13.761 7 11 7Z" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </div>
                            <div class="img"><img src="{{asset('img/keboard.png')}}" alt="img"></div>
                            <div class="card-action">
                                <div class="btn">
                                    <button>Buy now</button>
                                    <button>Add cart</button>
                                </div>
                            </div>
                            <div class="info-card">
                                <div class="productname">AK-900 Wired Keyboard1</div>
                                <div class="cost"> 50$ <span class="discount">53$</span></div>
                                <div class="star-bar">
                                    <span class="fa fa-star star"></span>
                                    <span class="fa fa-star star"></span>
                                    <span class="fa fa-star star"></span>
                                    <span class="fa fa-star star"></span>
                                    <span class="fa fa-star star"></span>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="heart">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none" stroke="black" class="heart1">
                                    <path d="M11 7C8.239 7 6 9.216 6 11.95C6 14.157 6.875 19.395 15.488 24.69C15.6423 24.7839 15.8194 24.8335 16 24.8335C16.1806 24.8335 16.3577 24.7839 16.512 24.69C25.125 19.395 26 14.157 26 11.95C26 9.216 23.761 7 21 7C18.239 7 16 10 16 10C16 10 13.761 7 11 7Z" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </div>
                            <div class="img"><img src="{{asset('img/keboard.png')}}" alt="img"></div>
                            <div class="card-action">
                                <div class="btn">
                                    <button>Buy now</button>
                                    <button>Add cart</button>
                                </div>
                            </div>
                            <div class="info-card">
                                <div class="productname">AK-900 Wired Keyboard1</div>
                                <div class="cost"> 50$ <span class="discount">53$</span></div>
                                <div class="star-bar">
                                    <span class="fa fa-star star"></span>
                                    <span class="fa fa-star star"></span>
                                    <span class="fa fa-star star"></span>
                                    <span class="fa fa-star star"></span>
                                    <span class="fa fa-star star"></span>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="heart">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none" stroke="black" class="heart1">
                                    <path d="M11 7C8.239 7 6 9.216 6 11.95C6 14.157 6.875 19.395 15.488 24.69C15.6423 24.7839 15.8194 24.8335 16 24.8335C16.1806 24.8335 16.3577 24.7839 16.512 24.69C25.125 19.395 26 14.157 26 11.95C26 9.216 23.761 7 21 7C18.239 7 16 10 16 10C16 10 13.761 7 11 7Z" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </div>
                            <div class="img"><img src="{{asset('img/keboard.png')}}" alt="img"></div>
                            <div class="card-action">
                                <div class="btn">
                                    <button>Buy now</button>
                                    <button>Add cart</button>
                                </div>
                            </div>
                            <div class="info-card">
                                <div class="productname">AK-900 Wired Keyboard1</div>
                                <div class="cost"> 50$ <span class="discount">53$</span></div>
                                <div class="star-bar">
                                    <span class="fa fa-star star"></span>
                                    <span class="fa fa-star star"></span>
                                    <span class="fa fa-star star"></span>
                                    <span class="fa fa-star star"></span>
                                    <span class="fa fa-star star"></span>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="heart">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none" stroke="black" class="heart1">
                                    <path d="M11 7C8.239 7 6 9.216 6 11.95C6 14.157 6.875 19.395 15.488 24.69C15.6423 24.7839 15.8194 24.8335 16 24.8335C16.1806 24.8335 16.3577 24.7839 16.512 24.69C25.125 19.395 26 14.157 26 11.95C26 9.216 23.761 7 21 7C18.239 7 16 10 16 10C16 10 13.761 7 11 7Z" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </div>
                            <div class="img"><img src="{{asset('img/keboard.png')}}" alt="img"></div>
                            <div class="card-action">
                                <div class="btn">
                                    <button>Buy now</button>
                                    <button>Add cart</button>
                                </div>
                            </div>
                            <div class="info-card">
                                <div class="productname">AK-900 Wired Keyboard1</div>
                                <div class="cost"> 50$ <span class="discount">53$</span></div>
                                <div class="star-bar">
                                    <span class="fa fa-star star"></span>
                                    <span class="fa fa-star star"></span>
                                    <span class="fa fa-star star"></span>
                                    <span class="fa fa-star star"></span>
                                    <span class="fa fa-star star"></span>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="heart">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none" stroke="black" class="heart1">
                                    <path d="M11 7C8.239 7 6 9.216 6 11.95C6 14.157 6.875 19.395 15.488 24.69C15.6423 24.7839 15.8194 24.8335 16 24.8335C16.1806 24.8335 16.3577 24.7839 16.512 24.69C25.125 19.395 26 14.157 26 11.95C26 9.216 23.761 7 21 7C18.239 7 16 10 16 10C16 10 13.761 7 11 7Z" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </div>
                            <div class="img"><img src="{{asset('img/keboard.png')}}" alt="img"></div>
                            <div class="card-action">
                                <div class="btn">
                                    <button>Buy now</button>
                                    <button>Add cart</button>
                                </div>
                            </div>
                            <div class="info-card">
                                <div class="productname">AK-900 Wired Keyboard1</div>
                                <div class="cost"> 50$ <span class="discount">53$</span></div>
                                <div class="star-bar">
                                    <span class="fa fa-star star"></span>
                                    <span class="fa fa-star star"></span>
                                    <span class="fa fa-star star"></span>
                                    <span class="fa fa-star star"></span>
                                    <span class="fa fa-star star"></span>
                                </div>
                            </div>
                        </div>
                         <!-- heart action -->
                         <script>
                                document.querySelectorAll(".heart1").forEach(item =>
                                    item.addEventListener('click', function() {
                                        if (this.style.fill == "none")
                                          {
                                             this.style.fill = "#DB4444";
                                             this.style.stroke = "#DB4444";
                                          }
                                        else
                                            {
                                                this.style.fill = "none";
                                                this.style.stroke = "black";
                                            }
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
         <!-- footer -->
      @component("components.footer")
      @endcomponent
     <!-- - -->

</body>

</html>
