<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>header</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/header_signup.css') }}">
</head>

<body>
    <div>
        <div class="container-fluid row h-100 top_header">
            <div class="col-sm-7 text-white text_topheader ">
                SUMMER SHOPPING SPREE WITH UP TO 50% OFF!
            </div>
            <div class="col-sm-4 ">
                <a href="#" class="font-weight-bold text-white">SHOP NOW</a>
            </div>
        </div>
        <!-- navigation -->
        <div class="container_nav row ">
            <div class="col-3 navbar-expand-lg navbar-light ">
                    <a class="navbar-brand" href="#">
                        <div class="nameee font-weight-bold">
                            <img src="{{ asset('img/logo.jpg') }}" alt="" class="logo">
                            Computer World - Electronic Components
                        </div>
                    </a>
            </div>
            <div class="col-6 navbar-expand-lg navbar-light ">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto menu text-dark">
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="#">HOME</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="#">STORE</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="#">ABOUT US</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="#">CONTACT</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-3 navbar-expand-lg navbar-light ">
                    <a href="../Project/sign_up.php" class="btn text-white w-50">Sign Up</a>
            </div>
        </div>
    </div>


    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>