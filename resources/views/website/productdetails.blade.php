<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/productdetails.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap_css/bootstrap.min.css') }}">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Scripts -->
    <script src="js/cardslider.js" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <title>Chi tiết sản phẩm</title>
</head>

<body>
    <div class="container">
        <div class="title ">
            <span class="Deactive">Store / </span>
            <span class="Deactive"> Laptop / </span>
            <span class="Active"> Dell XPS 9710 17 inch Core i7</span>
        </div>
        <!-- Product-Details -->
        <div class="card-wrapper">
            <div class="card">
                <!-- card left -->
                <div class="product-imgs">
                    <div class="img-display">
                        <div class="heart">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none" class="heart1">
                                <path d="M11 7C8.239 7 6 9.216 6 11.95C6 14.157 6.875 19.395 15.488 24.69C15.6423 24.7839 15.8194 24.8335 16 24.8335C16.1806 24.8335 16.3577 24.7839 16.512 24.69C25.125 19.395 26 14.157 26 11.95C26 9.216 23.761 7 21 7C18.239 7 16 10 16 10C16 10 13.761 7 11 7Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                            <!-- heart action -->
                            <script>
                                document.querySelectorAll(".heart1").forEach(item =>
                                    item.addEventListener('click', function() {
                                        if (this.style.fill != "black")
                                            this.style.fill = "black"
                                        else
                                            this.style.fill = "none"
                                    })
                                )
                            </script>
                        </div>
                        <div class="img-showcase">
                            <img src="{{asset('img/detail product 4.png')}}" alt="shoe image">
                            <img src="{{asset('img/detail product 1.png')}}" alt="shoe image">
                            <img src="{{asset('img/detail product 2.png')}}" alt="shoe image">
                            <img src="{{asset('img/detail product 3.png')}}" alt="shoe image">
                        </div>
                    </div>
                    <div class="img-select">
                        <div class="img-item">
                            <a href="#" data-id="1">
                                <img src="{{asset('img/detail product 4.png')}}" alt="shoe image">
                            </a>
                        </div>
                        <div class="img-item">
                            <a href="#" data-id="2">
                                <img src="{{asset('img/detail product 1.png')}}" alt="shoe image">
                            </a>
                        </div>
                        <div class="img-item">
                            <a href="#" data-id="3">
                                <img src="{{asset('img/detail product 2.png')}}" alt="shoe image">
                            </a>
                        </div>
                        <div class="img-item">
                            <a href="#" data-id="4">
                                <img src="{{asset('img/detail product 3.png')}}" alt="shoe image">
                            </a>
                        </div>
                    </div>
                </div>
                <!-- card right -->
                <div class="product-content">
                    <div class="product-title">Dell XPS 9710 17 inch Core i7-11800H RAM 32GB SSD 1TB UHD RTX3050 Ti</div>
                    <div class="product-rating mt-3">
                        <svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path id="Vector" d="M14.673 7.17173C15.7437 6.36184 15.1709 4.65517 13.8284 4.65517H11.3992C10.7853 4.65517 10.243 4.25521 10.0617 3.66868L9.33754 1.32637C8.9309 0.0110567 7.0691 0.0110564 6.66246 1.32637L5.93832 3.66868C5.75699 4.25521 5.21469 4.65517 4.60078 4.65517H2.12961C0.791419 4.65517 0.215919 6.35274 1.27822 7.16654L3.39469 8.78792C3.85885 9.1435 4.05314 9.75008 3.88196 10.3092L3.11296 12.8207C2.71416 14.1232 4.22167 15.1704 5.30301 14.342L7.14861 12.9281C7.65097 12.5432 8.34903 12.5432 8.85139 12.9281L10.6807 14.3295C11.7636 15.159 13.2725 14.1079 12.8696 12.8046L12.09 10.2827C11.9159 9.71975 12.113 9.10809 12.5829 8.75263L14.673 7.17173Z" fill="#FFAD33" />
                        </svg>
                        <svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path id="Vector" d="M14.673 7.17173C15.7437 6.36184 15.1709 4.65517 13.8284 4.65517H11.3992C10.7853 4.65517 10.243 4.25521 10.0617 3.66868L9.33754 1.32637C8.9309 0.0110567 7.0691 0.0110564 6.66246 1.32637L5.93832 3.66868C5.75699 4.25521 5.21469 4.65517 4.60078 4.65517H2.12961C0.791419 4.65517 0.215919 6.35274 1.27822 7.16654L3.39469 8.78792C3.85885 9.1435 4.05314 9.75008 3.88196 10.3092L3.11296 12.8207C2.71416 14.1232 4.22167 15.1704 5.30301 14.342L7.14861 12.9281C7.65097 12.5432 8.34903 12.5432 8.85139 12.9281L10.6807 14.3295C11.7636 15.159 13.2725 14.1079 12.8696 12.8046L12.09 10.2827C11.9159 9.71975 12.113 9.10809 12.5829 8.75263L14.673 7.17173Z" fill="#FFAD33" />
                        </svg>
                        <svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path id="Vector" d="M14.673 7.17173C15.7437 6.36184 15.1709 4.65517 13.8284 4.65517H11.3992C10.7853 4.65517 10.243 4.25521 10.0617 3.66868L9.33754 1.32637C8.9309 0.0110567 7.0691 0.0110564 6.66246 1.32637L5.93832 3.66868C5.75699 4.25521 5.21469 4.65517 4.60078 4.65517H2.12961C0.791419 4.65517 0.215919 6.35274 1.27822 7.16654L3.39469 8.78792C3.85885 9.1435 4.05314 9.75008 3.88196 10.3092L3.11296 12.8207C2.71416 14.1232 4.22167 15.1704 5.30301 14.342L7.14861 12.9281C7.65097 12.5432 8.34903 12.5432 8.85139 12.9281L10.6807 14.3295C11.7636 15.159 13.2725 14.1079 12.8696 12.8046L12.09 10.2827C11.9159 9.71975 12.113 9.10809 12.5829 8.75263L14.673 7.17173Z" fill="#FFAD33" />
                        </svg>
                        <svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path id="Vector" d="M14.673 7.17173C15.7437 6.36184 15.1709 4.65517 13.8284 4.65517H11.3992C10.7853 4.65517 10.243 4.25521 10.0617 3.66868L9.33754 1.32637C8.9309 0.0110567 7.0691 0.0110564 6.66246 1.32637L5.93832 3.66868C5.75699 4.25521 5.21469 4.65517 4.60078 4.65517H2.12961C0.791419 4.65517 0.215919 6.35274 1.27822 7.16654L3.39469 8.78792C3.85885 9.1435 4.05314 9.75008 3.88196 10.3092L3.11296 12.8207C2.71416 14.1232 4.22167 15.1704 5.30301 14.342L7.14861 12.9281C7.65097 12.5432 8.34903 12.5432 8.85139 12.9281L10.6807 14.3295C11.7636 15.159 13.2725 14.1079 12.8696 12.8046L12.09 10.2827C11.9159 9.71975 12.113 9.10809 12.5829 8.75263L14.673 7.17173Z" fill="#FFAD33" />
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15" fill="none">
                            <path opacity="0.25" d="M14.673 7.17173C15.7437 6.36184 15.1709 4.65517 13.8284 4.65517H11.3992C10.7853 4.65517 10.243 4.25521 10.0617 3.66868L9.33754 1.32637C8.9309 0.0110567 7.0691 0.0110564 6.66246 1.32637L5.93832 3.66868C5.75699 4.25521 5.21469 4.65517 4.60078 4.65517H2.12961C0.791419 4.65517 0.215919 6.35274 1.27822 7.16654L3.39469 8.78792C3.85885 9.1435 4.05314 9.75008 3.88196 10.3092L3.11296 12.8207C2.71416 14.1232 4.22167 15.1704 5.30301 14.342L7.14861 12.9281C7.65097 12.5432 8.34903 12.5432 8.85139 12.9281L10.6807 14.3295C11.7636 15.159 13.2725 14.1079 12.8696 12.8046L12.09 10.2827C11.9159 9.71975 12.113 9.10809 12.5829 8.75263L14.673 7.17173Z" fill="black" />
                        </svg>
                        <span>(150)</span>
                    </div>

                    <div class="product-price">
                        <p class="last-price">$2000</p>
                    </div>

                    <div class="product-detail">
                        <div class="Description">Description </div>
                        <div class="infor">
                            <div>New 100%, Fullbox</div>
                            <div>Color: Black CPU: i7-11800H (2.3GHz, 24MB cache, Up to 4.6GHz)</div>
                            <div>RAM: 32GB DDR4-3200MHz</div>
                            <div>Storage: 1TB M.2 PCIe NVMe SSD</div>
                            <div>Display: 17.0″ UHD+ (3840 x 2400) InfinityEdge Touch</div>
                            <div>Anti-Reflective 500-Nit Display</div>
                            <div>GPU: NVIDIA® GeForce RTX™ 3050 Ti 4GB GDDR6</div>
                            <div>Connectivity: 4x ThunderBolt 4, 1x SD slot, 3.5mm Jack </div>
                            <div>Weight: 2.21 kg</div>
                        </div>

                        <div class="Description mt-2 ">Quantity </div>
                    </div>
                    <div class="purchase-info ms-5 mt-3">
                        <span class="minus">-</span>
                        <span class="num">0</span>
                        <span class="plus">+</span>
                        <script>
                            const plus = document.querySelector(".plus"),
                                minus = document.querySelector(".minus"),
                                num = document.querySelector(".num");
                            let a = 0;
                            plus.addEventListener("click", () => {
                                a++;
                                a = (a < 10) ? "" + a : a;
                                num.innerText = a;
                            });
                            minus.addEventListener("click", () => {
                                if (a > 0) {
                                    a--;
                                    a = (a < 10) ? "" + a : a;
                                    num.innerText = a;
                                }
                            });
                        </script>
                    </div>
                    <hr class="mt-5">
                    <div class="btn">
                        <button>Add to cart </button>
                        <button>Buy now</button>
                    </div>
                    <div class="mt-5" style="margin-left:15%;">
                        <table>
                            <tr>
                                <td class="ps-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40" fill="none">
                                        <g clip-path="url(#clip0_102_1895)">
                                            <path d="M11.6668 31.6667C13.5078 31.6667 15.0002 30.1743 15.0002 28.3333C15.0002 26.4924 13.5078 25 11.6668 25C9.82588 25 8.3335 26.4924 8.3335 28.3333C8.3335 30.1743 9.82588 31.6667 11.6668 31.6667Z" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M28.3333 31.6667C30.1743 31.6667 31.6667 30.1743 31.6667 28.3333C31.6667 26.4924 30.1743 25 28.3333 25C26.4924 25 25 26.4924 25 28.3333C25 30.1743 26.4924 31.6667 28.3333 31.6667Z" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M8.3335 28.3335H7.00016C5.89559 28.3335 5.00016 27.4381 5.00016 26.3335V21.6668M3.3335 8.3335H19.6668C20.7714 8.3335 21.6668 9.22893 21.6668 10.3335V28.3335M15.0002 28.3335H25.0002M31.6668 28.3335H33.0002C34.1047 28.3335 35.0002 27.4381 35.0002 26.3335V18.3335M35.0002 18.3335H21.6668M35.0002 18.3335L30.5828 10.9712C30.2213 10.3688 29.5703 10.0002 28.8678 10.0002H21.6668" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M8 28H6.66667C5.5621 28 4.66667 27.1046 4.66667 26V21.3333M3 8H19.3333C20.4379 8 21.3333 8.89543 21.3333 10V28M15 28H24.6667M32 28H32.6667C33.7712 28 34.6667 27.1046 34.6667 26V18M34.6667 18H21.3333M34.6667 18L30.2493 10.6377C29.8878 10.0353 29.2368 9.66667 28.5343 9.66667H21.3333" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M5 11.8184H11.6667" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M1.81836 15.4546H8.48503" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M5 19.0908H11.6667" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_102_1895">
                                                <rect width="40" height="40" fill="white" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </td>
                                <td>
                                    <div class="heading">Freeship </div>
                                    <div class="text">Free shipping for orders over $100 </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="ps-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40" fill="none">
                                        <g clip-path="url(#clip0_102_1900)">
                                            <path d="M33.3332 18.3332C32.9256 15.4002 31.565 12.6826 29.4609 10.599C27.3569 8.51539 24.6261 7.18137 21.6893 6.80242C18.7525 6.42348 15.7725 7.02064 13.2085 8.50191C10.6445 9.98319 8.63859 12.2664 7.49984 14.9998M6.6665 8.33317V14.9998H13.3332" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M6.6665 21.6665C7.0741 24.5995 8.43472 27.3171 10.5388 29.4007C12.6428 31.4843 15.3736 32.8183 18.3104 33.1973C21.2472 33.5762 24.2271 32.979 26.7912 31.4978C29.3552 30.0165 31.3611 27.7333 32.4998 24.9998M33.3332 31.6665V24.9998H26.6665" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_102_1900">
                                                <rect width="40" height="40" fill="white" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </td>
                                <td>
                                    <div class="heading">Return </div>
                                    <div class="text">One week from the date of receipt</div>
                                </td>
                            </tr>


                        </table>
                    </div>

                </div>
            </div>
        </div>
        <!-- Similar Product -->
        <div class="title d-flex ">
            <div class="secondary2 ms-5"></div>
            <div class="secondary2-text px-2 py-2">Similar products</div>
        </div>
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
                </div>
            </div>
        </div>
    </div>
</body>

</html>