<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About us</title>
    <link rel="stylesheet" href="{{ asset('css/about_us.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap_css/bootstrap.min.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="js/dropdown.js"></script>
    <script src="js/countdown.js"></script>
    <script src="js/carousel.js"> </script>
</head>

<body>
    @component('components.header_signup')
    @endcomponent
    <div class="row container-aboutus">
        <div class="row col-12 col-lg-12 col-md-12 col-sm-12 container-fluid container-text " style="margin-top: 5%;">
            <div class="offset-1 col-10 col-lg-5 col-md-10 col-sm-10 pt-5">
                <h1 class="mb-5">Our story</h1>
                <p style="line-height: 26px;">Welcome to the ultimate hub for all your computing needs! Our cutting-edge e-commerce platform offers an extensive range of the latest laptops and top-of-the-line components, meticulously curated to meet your every tech requirement. Whether you're seeking high-performance laptops for professional endeavors or sleek and portable models for everyday use, we have a diverse selection to cater to your unique preferences.
                </p>
                <p style="line-height: 26px;">
                    Our commitment doesn't end with laptops; we also boast an exhaustive collection of components and accessories, ensuring that you have access to everything necessary for customizing and optimizing your computing experience. From powerful processors and high-speed RAM to reliable storage solutions and top-tier graphics cards, our comprehensive inventory has you covered.
                </p>
            </div>
            <div class="col-10 col-lg-5 col-md-10 col-sm-10 img-aboutus">
                <img src="{{ asset('img/image 64.png') }}" alt="image" class="img-fluid">
            </div>
        </div>
        <div class="row col-12 col-lg-12 col-md-12 col-sm-12 justify-content-center" style="margin: 100px 0 100px;">
            <div class="row  col-12 col-lg-10 col-md-10 col-sm-12 container-service-aboutus " >
                <div class="col-4 col-sm-4 col-md-2 col-lg-2 service-aboutus">
                    <img src="{{ asset('img/Services(3).png') }}" alt="">
                    <p><strong>10.5k </strong><br> Sellers active our site</p>
                </div>
                <div class="col-4 col-sm-4 col-md-2 col-lg-2 service-aboutus" style="background-color: #DB4444;">
                    <img src="{{ asset('img/Services(4).png') }}" alt="">
                    <p class="text-white" ><strong>33k </strong><br>Monthly Product Sale</p>
                </div>
                <div class="col-4 col-sm-4 col-md-2 col-lg-2 service-aboutus">
                    <img src="{{ asset('img/Services(5).png') }}" alt="">
                    <p><strong>45.5k</strong> <br> Customer active in our site</p>
                </div>
                <div class="col-4 col-sm-4 col-md-2 col-lg-2 service-aboutus">
                    <img src="{{ asset('img/Services(6).png') }}" alt="">
                    <p><strong>25k </strong><br> Annual gross sale in our site</p>
                </div>
            </div>
        </div>
    </div>
    @component('components.footer')
    @endcomponent
</body>
</html>