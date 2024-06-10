 <!-- styles  -->
 <link rel="stylesheet" href="{{ asset('css/header_signup.css') }}">

 <!-- Fonts -->
 <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&family=Roboto:wght@400;500&display=swap" rel="stylesheet">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <!-- scripts -->
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
 <script src="{{ asset('js/dropdown.js') }}" defer></script>
 <!-- Header -->
 <section class="header ">
     <div class="Top-header">
         <div class="container py-2 px-5 ">
             <div class="row ms-3 ">
                 <div class="SSS col-lg-6 col-md-12">
                     SUMMER SHOPPING SPREE WITH UP TO 50% OFF!
                 </div>
                 <div class="SHOPNOW col-lg-2 col-md-12 pe-3 ">
                     <a href="#">SHOP NOW </a>
                 </div>
             </div>
         </div>
     </div>

     <div class="container pt-5">
         <div class="row">
             <div class="header-logo col-lg-2 col-md-12 mb-2">
                 <img class="logo" src="{{asset('img/logo.jpg')}}" width="174px" height="48px">
                 <div class="logo-text">Computer World - Electronic Components </div>
             </div>
             <div class="col-sm-6 d-flex justify-content-evenly">
                 <div class="menu-header ms-5">
                     <a href="{{ route('home.show') }}">HOME </a>
                 </div>
                 <div class="menu-header ps-5 ">
                     <a href="{{ route('store.show') }}">STORE </a>
                 </div>
                 <div class="menu-header ps-5 " style="white-space: nowrap;">
                     <a href="{{ route('blog.show') }}">BLOG </a>
                 </div>
                 <div class="menu-header ps-5 " style="white-space: nowrap;">
                     <a href="{{ route('aboutus.show') }}">ABOUT US </a>
                 </div>
                 <div class="menu-header  ps-5">
                     <a href="{{ route('contactus.show') }}">CONTACT </a>
                 </div>
             </div>
             <div class="col-lg-4 col-md-12 d-flex justify-content-evenly right_header">
                 <div class="search_box mb-4">
                     <input type="text" class="search_box_input" id="searchInput" placeholder="Search for products...">
                     <button class="btn_search" onclick="searchProducts()">
                         <i class="fa fa-search"></i>
                     </button>
                 </div>
                 <div class="icon_menu mb-4">
                     <span class="pe-2">
                         <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 32 32" fill="none" stroke="black" class="heart1">
                             <path d="M11 7C8.239 7 6 9.216 6 11.95C6 14.157 6.875 19.395 15.488 24.69C15.6423 24.7839 15.8194 24.8335 16 24.8335C16.1806 24.8335 16.3577 24.7839 16.512 24.69C25.125 19.395 26 14.157 26 11.95C26 9.216 23.761 7 21 7C18.239 7 16 10 16 10C16 10 13.761 7 11 7Z" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                         </svg>
                     </span>
                     <a href="{{ route('cart.show') }}" style="color:black !important">
                         <span class="pe-2">
                             <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart3">
                                 <style>
                                     .bi-cart3 {
                                         fill: black;
                                     }
                                 </style>
                                 <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                             </svg>
                         </span>
                     </a>
                     <span class="pe-2">
                         <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bell" viewBox="0 0 16 16">
                             <path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zM8 1.918l-.797.161A4.002 4.002 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4.002 4.002 0 0 0-3.203-3.92L8 1.917zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5.002 5.002 0 0 1 13 6c0 .88.32 4.2 1.22 6z" />
                         </svg>
                     </span>
                 </div>
                 <a href="{{ route('profile.show') }}">
                     <div class="mb-4" style="cursor:pointer">
                         <img src="{{asset('img/user.png')}}" width="36px" height="36px">
                     </div>
                 </a>

             </div>
         </div>
         <div class="row">
             <div class="responsive-menu col-sm-1">
                 <div class="drop-down filter-item">
                     <button><i class="fa fa-bars" aria-hidden="true"></i></button>
                     <i></i>
                 </div>
                 <ul class="menu-bar menu-text">
                     <li><a href="{{ route('home.show') }}"> HOME </a></li>
                     <li> <a href="{{ route('store.show') }}"> STORE </a></li>
                     <li><a href="{{ route('blog.show') }}"> BLOG </a></li>
                     <li><a href="{{ route('aboutus.show') }}" style="white-space:nowrap"> ABOUT US </a></li>
                     <li><a href="{{ route('contactus.show') }}"> CONTACT </a></li>
                 </ul>
             </div>
         </div>
     </div>
     <hr style="width: 100%">
 </section>

 <script>
     function searchProducts() {
         var searchQuery = $("#searchInput").val();

         $.ajax({
             type: "POST",
             url: "/store/search",
             data: {
                 searchQuery: searchQuery,
             },
             success: function(data) {
                 // Handle the search results here
                 $(".carousel_store").empty(); // Clear existing products

                 $.each(data.products, function(index, product) {
                     $.ajax({
                         type: "GET",
                         url: "/store/filter/" + product.product_id + "/main-image",
                         success: function(imageData) {
                             var mainImagePath = imageData.main_image_path;

                             var cardDiv = document.createElement("div");
                             cardDiv.classList.add("card");
                             cardDiv.setAttribute("data-id", product.product_id);

                             var heartDiv = document.createElement("div");
                             heartDiv.classList.add("heart");

                             var svgElement = document.createElementNS(
                                 "http://www.w3.org/2000/svg",
                                 "svg"
                             );
                             svgElement.setAttribute(
                                 "xmlns",
                                 "http://www.w3.org/2000/svg"
                             );
                             svgElement.setAttribute("width", "32");
                             svgElement.setAttribute("height", "32");
                             svgElement.setAttribute("viewBox", "0 0 32 32");
                             svgElement.setAttribute("fill", "none");
                             svgElement.setAttribute("stroke", "black");
                             svgElement.classList.add("heart1");

                             var pathElement = document.createElementNS(
                                 "http://www.w3.org/2000/svg",
                                 "path"
                             );
                             pathElement.setAttribute(
                                 "d",
                                 "M11 7C8.239 7 6 9.216 6 11.95C6 14.157 6.875 19.395 15.488 24.69C15.6423 24.7839 15.8194 24.8335 16 24.8335C16.1806 24.8335 16.3577 24.7839 16.512 24.69C25.125 19.395 26 14.157 26 11.95C26 9.216 23.761 7 21 7C18.239 7 16 10 16 10C16 10 13.761 7 11 7Z"
                             );
                             pathElement.setAttribute("stroke-width", "1.5");
                             pathElement.setAttribute("stroke-linecap", "round");
                             pathElement.setAttribute("stroke-linejoin", "round");

                             svgElement.appendChild(pathElement);
                             heartDiv.appendChild(svgElement);

                             var imgDiv = document.createElement("div");
                             imgDiv.classList.add("img");

                             var imgAnchor = document.createElement("a");
                             imgAnchor.setAttribute(
                                 "href",
                                 `/store/${product.slug}`
                             );
                             imgAnchor.style.textDecoration = "none";

                             var imgElement = document.createElement("img");
                             imgElement.setAttribute("src", mainImagePath);
                             imgElement.setAttribute("alt", product.name);
                             imgElement.style.height = "150px";
                             imgElement.style.width = "150px";

                             imgAnchor.appendChild(imgElement);
                             imgDiv.appendChild(imgAnchor);

                             var cardActionDiv = document.createElement("div");
                             cardActionDiv.classList.add("card-action");

                             var btn1Div = document.createElement("div");
                             btn1Div.classList.add("btn1", "buttons");

                             var buyNowBtn = document.createElement("button");
                             buyNowBtn.textContent = "Buy now";

                             var addToCartBtn = document.createElement("button");
                             addToCartBtn.classList.add(
                                 "btn",
                                 "success",
                                 "add-to-cart-btn"
                             );
                             addToCartBtn.textContent = "Add to cart";
                             addToCartBtn.setAttribute(
                                 "data-product-id",
                                 product.product_id
                             );

                             btn1Div.appendChild(buyNowBtn);
                             btn1Div.appendChild(addToCartBtn);
                             cardActionDiv.appendChild(btn1Div);

                             var infoCardDiv = document.createElement("div");
                             infoCardDiv.classList.add("info-card");

                             var nameAnchor = document.createElement("a");
                             nameAnchor.textContent = product.title;
                             nameAnchor.style.textDecoration = "none";
                             nameAnchor.style.color = "black";


                             var costDiv = document.createElement("div");
                             costDiv.classList.add("cost");
                             costDiv.textContent = product.price + "$ ";


                             var starBarDiv = document.createElement("div");
                             starBarDiv.classList.add("star-bar");

                             for (var i = 0; i < 5; i++) {
                                 var starSpan = document.createElement("span");
                                 starSpan.classList.add("fa", "fa-star", "star");
                                 starBarDiv.appendChild(starSpan);
                             }

                             infoCardDiv.appendChild(nameAnchor);
                             infoCardDiv.appendChild(costDiv);
                             infoCardDiv.appendChild(starBarDiv);

                             cardDiv.appendChild(heartDiv);
                             cardDiv.appendChild(imgDiv);
                             cardDiv.appendChild(cardActionDiv);
                             cardDiv.appendChild(infoCardDiv);

                             heartDiv.addEventListener("click", function() {
                                 heartaction();
                                 updateFavouriteCount(product.product_id, heartDiv);

                             });


                             addToCartBtn.addEventListener("click", function() {
                                 var productId = $(this).data("product-id");

                                 $.ajax({
                                     url: "/cart/add",
                                     type: "POST",
                                     headers: {
                                         "Content-Type": "application/json",
                                         "X-CSRF-Token": csrfToken,
                                     },
                                     data: JSON.stringify({
                                         product_id: productId,
                                     }),
                                     success: function(response) {
                                         console.log(response);
                                         createToast("success");
                                     },
                                     error: function(error) {
                                         console.error(error);
                                     },
                                 });
                             });

                             $(".carousel_store").append(cardDiv);
                         },
                         error: function(xhr, status, error) {
                             console.error(xhr.responseText);
                         },
                     });
                 });
             },
             error: function(xhr, status, error) {
                 console.error(xhr.responseText);
             },
         });
     }
 </script>