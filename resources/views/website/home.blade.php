<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Trang chủ</title>
  <link rel="stylesheet" href="{{ asset('css/home.css') }}">
  <link rel="stylesheet" href="{{ asset('css/bootstrap_css/bootstrap.min.css') }}">

  <link rel="stylesheet" href="css/cssdetail/responsive.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&family=Roboto:wght@400;500&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="js/jsdetail/dropdown.js"></script>
  <script src="js/jsdetail/countdown.js"></script>

</head>

<body>
  <!-- Header -->
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
        <div class="header-logo col-sm-4">
          <img class="logo" src="images/logo.jpg" width="174px" height="48px">
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
        <div class="signup col-sm-1 ">
          <button class="btn-signup"> Sign up </button>
        </div>
      </div>
    </div>
    <hr style="width: 100%">
  </section>
  <!-- main content -->
  <section class="main-content">
    <div class="header-content">
      <div class="container">
        <div class="row">
          <!-- filter bar & menu -->
          <div class="col-sm-2 pb-5 filter-responsive">
            <div class="filter">
              <table class="filter-content">
                <tr>
                  <td>
                    <a class="filtertext ps-5">Filter</a>
                  </td>
                </tr>
                <tr>
                  <td id="min-max">
                    <label for="price" style="font-size:12px">Price</label><br />
                    <input type="range" id="vol" name="vol" min="0" max="100">
                    <datalist id="values">
                      <option value="0" label="lowest"></option>
                      <option value="100" label="highest" id="highest"></option>
                    </datalist>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div id="cat_link"><a>Categories</a></div>
                    <ul class="menu-bar">
                      <li class="filter-item">Laptop</li>
                      <li class="li-hr">
                        <hr>
                      </li>
                      <li>
                        <div class="drop-down filter-item">
                          <span>Accessories</span>
                          <i class="fa fa-angle-down" aria-hidden="true"></i>
                        </div>
                        <ul class="menu-bar">
                          <li><a href="#">Power banks </a></li>
                          <li><a href="#">Cables, chargers </a></li>
                          <li><a href="#">Phone cases </a> </li>
                          <li><a href="#">Speakers</a> </li>
                          <li><a href="#">Headphones </a> </li>
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
                          <li><a href="#"> Printers </a></li>
                          <li> <a href="#"> Printer ink </a></li>
                          <li><a href="#"> Monitor </a></li>
                          <li><a href="#">Gaming PC </a></li>
                        </ul>
                      </li>
                    </ul>
                  </td>
                </tr>
              </table>
            </div>
          </div>
          <div class="col-sm-10 pt-4">
            <!-- advertise MACBOOK -->
            <div class="advertise ">
              <div class="row">
                <div class="ads col-5 p-5 ms-5">
                  <div class="aditems"> <img src="images/apple logo.png" class="img-fluid me-4">
                    <span> Macbook pro 16 inch 2023 (M2 Max) </span>
                  </div>
                  <div class="aditems">
                    <p class="ads New-arrival"> New arrival </p>
                  </div>
                  <div class="aditems pt-5 mt-5">
                    <a href="#" style="color:white ;text-decoration: underline;">Shop now <i class="fa fa-arrow-right"
                        aria-hidden="true"></i></a>
                  </div>
                </div>
                <div class="col-6 mt-3">
                  <div class="slideshow-container">
                    <div class="mySlides animation">
                      <img src="images/macbook intro.png" class="img-fluid">
                    </div>
                    <div class="mySlides animation ">
                      <img src="images/macbook intro(1).png" class="img-fluid">
                    </div>
                    <div class="mySlides animation ">
                      <img src="images/macbook intro(2).png" class="img-fluid">
                    </div>
                    <div class="mySlides animation ">
                      <img src="images/macbook intro(3).png" class="img-fluid">
                    </div>
                  </div>
                </div>

              </div>
              <div class="mb-5" style="text-align:center">
                <span class="dot" onclick="currentSlide(1)"></span>
                <span class="dot" onclick="currentSlide(2)"></span>
                <span class="dot" onclick="currentSlide(3)"></span>
                <span class="dot" onclick="currentSlide(4)"></span>
              </div>
              <script>
                let slideIndex = 1;
                setInterval(function () {
                  slideIndex++;
                  showSlides(slideIndex);
                }, 5000)
                showSlides(slideIndex);
                function plusSlides(n) {
                  showSlides(slideIndex += n);
                }

                function currentSlide(n) {
                  showSlides(slideIndex = n);
                }
                function showSlides(n) {
                  let i;
                  let slides = document.getElementsByClassName("mySlides");
                  let dots = document.getElementsByClassName("dot");
                  if (n > slides.length) { slideIndex = 1 }
                  if (n < 1) { slideIndex = slides.length }
                  for (i = 0; i < slides.length; i++) {
                    slides[i].style.display = "none";
                  }
                  for (i = 0; i < dots.length; i++) {
                    dots[i].className = dots[i].className.replace(" active", "");
                  }
                  slides[slideIndex - 1].style.display = "block";
                  dots[slideIndex - 1].className += " active";
                }
              </script>
            </div>
          </div>
        </div>
        <div class="title d-flex ">
          <div class="secondary2 ms-5"></div>
          <div class="secondary2-text px-2 py-2">Today </div>
        </div>
        <div class="flashsales">

          <div class=" container">
            <div class=" row">
              <div class="introduction secondary1 col-3 my-3 ps-5">Flash Sales</div>
              <div class="countdown col-4">
                <div class="row textdate">
                  <div class="col-3">Days</div>
                  <div class="col-3 ps-3">Hours</div>
                  <div class="col-3 ps-4 ">Minutes</div>
                  <div class="col-3 ps-5">Seconds</div>
                </div>
                <div class="row " style=" flex-wrap:nowrap;">
                  <div class="Time col" id="Days">00 </div>
                  <div class="col text-danger pt-2" style="font-size: 16px;font-weight: 600;">:</div>
                  <div class="Time col" id="Hours">00</div>
                  <div class="col text-danger pt-2" style="font-size: 16px;font-weight: 600;">:</div>
                  <div class="Time col pe-4" id="Minutes">00</div>
                  <div class="col text-danger pt-2" style="font-size: 16px;font-weight: 600;">:</div>
                  <div class="Time col" id="Seconds">00</div>
                </div>

              </div>
            </div>
            <div class="wrapper">
              <i id="left" class="fa fa-angle-left"></i>
              <ul class="carousel">
                <li class="card">
                  <div class="discount-tag">-40% </div>
                  <div class="img"><img src="images/keboard.png" alt="img" draggable="false"></div>
                  <div class="card-action">

                    <div class="btn">
                      <button>Buy now</button>
                      <button>Add to Cart</button>
                    </div>
                    <div class="fa fa-heart heart"> </div>
                  </div>
                  <div class="productname">AK-900 Wired Keyboard</div>
                  <div class="cost"> 50$ <span class="discount">53$</span></div>
                  <div class="star-bar ms-4">
                    <span class="fa fa-star star"></span>
                    <span class="fa fa-star star"></span>
                    <span class="fa fa-star star"></span>
                    <span class="fa fa-star star"></span>
                    <span class="fa fa-star star"></span>
                    <span class="numbered">(4.3)</span>
                  </div>
                </li>
                <li class="card">
                  <div class="discount-tag">-40%</div>
                  <div class="img"><img src="images/keboard.png" alt="img" draggable="false"></div>
                  <div class="card-action">
                    <div class="btn">
                      <button>Buy now</button>
                      <button>Add to Cart</button>
                    </div>
                    <div class="fa fa-heart heart"> </div>
                  </div>
                  <div class="productname">AK-900 Wired Keyboard</div>
                  <div class="cost"> 50$ <span class="discount">53$</span></div>
                  <div class="star-bar ms-4">
                    <span class="fa fa-star star"></span>
                    <span class="fa fa-star star"></span>
                    <span class="fa fa-star star"></span>
                    <span class="fa fa-star star"></span>
                    <span class="fa fa-star star"></span>
                    <span class="numbered">(4.3)</span>
                  </div>
                </li>
                <li class="card">
                  <div class="discount-tag">-40%</div>
                  <div class="img"><img src="images/keboard.png" alt="img" draggable="false"></div>
                  <div class="card-action">

                    <div class="btn">
                      <button>Buy now</button>
                      <button>Add to Cart</button>
                    </div>
                    <div class="fa fa-heart heart"> </div>
                  </div>
                  <div class="productname">AK-900 Wired Keyboard</div>
                  <div class="cost"> 50$ <span class="discount">53$</span></div>
                  <div class="star-bar ms-4">
                    <span class="fa fa-star star"></span>
                    <span class="fa fa-star star"></span>
                    <span class="fa fa-star star"></span>
                    <span class="fa fa-star star"></span>
                    <span class="fa fa-star star"></span>
                    <span class="numbered">(4.3)</span>
                  </div>
                </li>
                <li class="card">
                  <div class="discount-tag">-40%</div>
                  <div class="img"><img src="images/keboard.png" alt="img" draggable="false"></div>
                  <div class="card-action">

                    <div class="btn">
                      <button>Buy now</button>
                      <button>Add to Cart</button>
                    </div>
                    <div class="fa fa-heart heart"> </div>
                  </div>
                  <div class="productname">AK-900 Wired Keyboard</div>
                  <div class="cost"> 50$ <span class="discount">53$</span></div>
                  <div class="star-bar ms-4">
                    <span class="fa fa-star star"></span>
                    <span class="fa fa-star star"></span>
                    <span class="fa fa-star star"></span>
                    <span class="fa fa-star star"></span>
                    <span class="fa fa-star star"></span>
                    <span class="numbered">(4.3)</span>
                  </div>
                </li>
                <li class="card">
                  <div class="discount-tag">-40%</div>
                  <div class="img"><img src="images/keboard.png" alt="img" draggable="false"></div>
                  <div class="card-action">

                    <div class="btn">
                      <button>Buy now</button>
                      <button>Add to Cart</button>
                    </div>
                    <div class="fa fa-heart heart"> </div>
                  </div>
                  <div class="productname">AK-900 Wired Keyboard</div>
                  <div class="cost"> 50$ <span class="discount">53$</span></div>
                  <div class="star-bar ms-4">
                    <span class="fa fa-star star"></span>
                    <span class="fa fa-star star"></span>
                    <span class="fa fa-star star"></span>
                    <span class="fa fa-star star"></span>
                    <span class="fa fa-star star"></span>
                    <span class="numbered">(4.3)</span>
                  </div>
                </li>
                <li class="card">
                  <div class="discount-tag">-40%</div>
                  <div class="img"><img src="images/keboard.png" alt="img" draggable="false"></div>
                  <div class="card-action">

                    <div class="btn">
                      <button>Buy now</button>
                      <button>Add to Cart</button>
                    </div>
                    <div class="fa fa-heart heart">

                    </div>
                  </div>
                  <div class="productname">AK-900 Wired Keyboard</div>
                  <div class="cost"> 50$ <span class="discount">53$</span></div>
                  <div class="star-bar ms-4">
                    <span class="fa fa-star star"></span>
                    <span class="fa fa-star star"></span>
                    <span class="fa fa-star star"></span>
                    <span class="fa fa-star star"></span>
                    <span class="fa fa-star star"></span>
                    <span class="numbered">(4.3)</span>
                  </div>
                </li>
              </ul>
              <i id="right" class="fa fa-angle-right"></i>
            </div>
            <!-- carousel  -->
            <script src="js/jsdetail/carousel.js"> </script>
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
          <ul class="carousel ">
            <li class="card ">
              <div class="img mb-0">
                <div class="fa fa-heart heart heart-item"> </div>
                <img src="images/keboard.png" alt="img" draggable="false">
              </div>

              <div class="productname">AK-900 Wired Keyboard</div>
              <div class="cost"> 50$ <span class="discount">53$</span></div>
              <div class="star-bar ms-4">
                <span class="fa fa-star star"></span>
                <span class="fa fa-star star"></span>
                <span class="fa fa-star star"></span>
                <span class="fa fa-star star"></span>
                <span class="fa fa-star star"></span>
                <span class="numbered">(4.3)</span>
              </div>
            </li>
            <li class="card ">
              <div class="img mb-0">
                <div class="fa fa-heart heart heart-item"> </div>
                <img src="images/keboard.png" alt="img" draggable="false">
              </div>

              <div class="productname">AK-900 Wired Keyboard</div>
              <div class="cost"> 50$ <span class="discount">53$</span></div>
              <div class="star-bar ms-4">
                <span class="fa fa-star star"></span>
                <span class="fa fa-star star"></span>
                <span class="fa fa-star star"></span>
                <span class="fa fa-star star"></span>
                <span class="fa fa-star star"></span>
                <span class="numbered">(4.3)</span>
              </div>
            </li>
            <li class="card">

              <div class="img mb-0">
                <div class="fa fa-heart heart heart-item"> </div>
                <img src="images/keboard.png" alt="img" draggable="false">
              </div>

              <div class="productname">AK-900 Wired Keyboard</div>
              <div class="cost"> 50$ <span class="discount">53$</span></div>
              <div class="star-bar ms-4">
                <span class="fa fa-star star"></span>
                <span class="fa fa-star star"></span>
                <span class="fa fa-star star"></span>
                <span class="fa fa-star star"></span>
                <span class="fa fa-star star"></span>
                <span class="numbered">(4.3)</span>
              </div>
            </li>
            <li class="card ">
              <div class="img mb-0">
                <div class="fa fa-heart heart heart-item"> </div>
                <img src="images/keboard.png" alt="img" draggable="false">
              </div>

              <div class="productname">AK-900 Wired Keyboard</div>
              <div class="cost"> 50$ <span class="discount">53$</span></div>
              <div class="star-bar ms-4">
                <span class="fa fa-star star"></span>
                <span class="fa fa-star star"></span>
                <span class="fa fa-star star"></span>
                <span class="fa fa-star star"></span>
                <span class="fa fa-star star"></span>
                <span class="numbered">(4.3)</span>
              </div>
            </li>
            <!-- heart action -->
            <script>
              document.querySelectorAll(".heart").forEach(item =>
                item.addEventListener('click', function () {
                  if (this.style.color != "red")
                    this.style.color = "red"
                  else
                    this.style.color = "black"
                })
              )
            </script>
            <!-- ----------------------------------------- -->
          </ul>
        </div>
        <div class="ads_jbl_affix">
        <div class="ads_jbl row ms-5 ">
          <div class="jbl-details col-4 my-5 mx-5">
            <div class="title_jbl"> New arrival</div>
            <div class="ESE mt-5 mb-4">Enhance sound experience</div>
            <div class="Timetext1 mb-5">
              <span class="circle me-3">
                <div id="Days1">00</div>
                <div>Days</div>
              </span>
              <span class="circle me-3 ">
                <div id="Hours1" >00</div>
                <div >Hours</div>
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
          <div class="JBL_BOOMBOX col-4 mx-5">
            <img src="images/JBL_BOOMBOX_2_HERO_020_x1 (1) 1.png">
          </div>
        </div>
      </div>
        <!-- Feature
        <div class="title d-flex" style="margin-top:150px;">
          <div class="secondary2 ms-5 "></div>
          <div class="secondary2-text px-2 py-2">Feature </div>
        </div>

        <div class="introduction secondary1 col-3 my-3 ps-5">New arrival</div>
        <div class="feature-product row ms-5">
          <div class="DELL col-4 me-3 px-5 py-5">
              <img src="images/laptop.png">
              <div class="heading">DELL-XPS-7590-0 </div>
              <div class="title-regular">Black and White versions</div>
              <div class="title-medium">Buy now</div>
          </div>
          <div class="col-4" style="width: 49%;">
            <div class="row DELL1 mb-3 me-5 ">
           <div class="textD1 col-6 ps-5">
              <div class="heading"> Bluetooth Philips </div>
              <div class="title-regular">Bluetooth Philips headphone</div>
              <div class="title-medium">Buy now</div>
            </div>
              <div class="col-1"><img src="images/headphone.png" height="260px" width="260px"> </div>
            </div>
            <div class="row">
                <div class="DELL background  me-1 col-1" style="background-image: url('images/loa.png');">
                  <div class="heading">Speakers </div>
                  <div class="title-regular"> Amazon wireless speakers</div>
                  <div class="title-medium">Buy now</div>
                </div>
                <div class="DELL background  me-1 col-1" style="background-image: url('images/PC.png')">
                  <div class="heading">BTS NC 01 </div>
                  <div class="title-regular">BTS NC 01</div>
                  <div class="title-medium">Buy now</div>
                </div>
            </div>
          </div>
        </div>  -->
         <!-- Feedback
         <div class="title d-flex" style="margin-top:150px;">
          <div class="secondary2 ms-5 "></div>
          <div class="secondary2-text px-2 py-2">Feedback </div>
        </div>

        <div class="introduction secondary1 col-3 my-3 ps-5">Testimonials</div>
        <div class="lastcontent">
        <div class="row ms-5">
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
                <span class="numbered">(4.3)</span> </div>
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
        <div class="row ms-5 mt-5">
          <div class="col-4">
            <img src="images/Services.png" class="ms-5" height="113px" width="113px">
            <div class="user ms-5 mt-4">
            <div class="username">Fast delivery</div>
            <div class="service" >Free shipping for orders over 100$ </div>
            </div>
            </div>
            <div class="col-4 ps-4">
              <img src="images/Services (1).png" class="ms-5"  height="113px" width="113px">
              <div class="user ms-3 mt-4">
              <div class="username">24/7 Customer Service</div>
              <div class="service ps-4" >24/7 Customer Support and Care </div>
              </div>
              </div>
              <div class="col-4 ps-4">
                <img src="images/Services (2).png" class="ms-5"  height="113px" width="113px">
                <div class="user ms-4 mt-4">
                <div class="username ps-3">Warranty Policy</div>
                <div class="service ps-4" >30-day money-back guarantee </div>
                </div>
                </div>
        </div>

      </div> -->
    </div>
    </div>
  </section>

  <section class="footer"> </section>

  <script src="js/bootstrap.bundle.min.js"> </script>
</body>

</html>
