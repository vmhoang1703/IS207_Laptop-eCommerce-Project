</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign in</title>
    <link rel="stylesheet" href="{{ asset('css/header_signup.css') }}">

</head>

<body>
    <div class="header">
        <div class="top_header">
            <p style="position: relative;right:1.5cm">SUMMER SHOPPING SPREE WITH UP TO 50% OFF! </p>
            <a href="" class="shopping_now">SHOP NOW</a>
        </div>
        <div class="nav">
            <div class="nav_content">
                <ul class="nav_list">
                    <li>
                        <div class="logo">
                           <div class="container_img_logo">
                            <img src="{{ asset('img/logo.jpg') }}" alt="logo" class="img_logo">
                           </div>
                           <div class="bottom_logo">
                            <a class="bottom_logo_text"><strong>Computer World - Electronic Components</strong></a>
                           </div>
                        </div>
                    </li>
                    <li></li>
                    <li><a href="#" class="nav_link">HOME</a></li>
                    <li><a href="#" class="nav_link">STORE</a></li>
                    <li><a href="#" class="nav_link">ABOUT US</a></li>
                    <li><a href="#" class="nav_link">CONTACT</a></li>
                    <li><button class="btn_login"><a href="{{ route('register.show') }}" class="btn_login">Sign Up</a></button></li>
                    <li></li>
                    <li></li>
                </ul>
            </div>
        </div>
    </div>
</body>

</html>