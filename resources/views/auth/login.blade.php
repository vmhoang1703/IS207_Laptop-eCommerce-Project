<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>

<body>
    @include('components.header_signup')
    <div class="row container-fluid mt-5">
        <div class="col-lg-6 col-sm-6 container_img ">
            <img src="{{ asset('img/sign in _ sign up screen.png') }}" alt="sign in _ sign up image" class="img_signup w-100">
        </div>

        <div class="col-lg-6 col-sm-6 container_information">
            <!-- text  -->
            <div class="">
                <div class="container">
                    <h1 class="tittle_signin">SIGN
                        <strong>IN</strong>
                    </h1>
                    <p>You don't have an account?<a href="../Project/sign_up.php" class="text_sign_up">Sign up</a></p>
                </div>
                <!-- Input information  -->
                <div class="container">
                    <form action="" class="input_info_signin">
                        <input type="username" placeholder="Username" class="username ">
                        <input type="password" placeholder="Password" class="password">
                    </form>
                    <div class="remember_and_forgot">
                        <div class="remember">
                            <input type="checkbox">
                            Remember me
                        </div>
                        <div class="forgot">
                            <a href="" class="">Forgot password?</a>
                        </div>
                    </div>
                </div>
                <!-- Button -->
                <div class="container text-center">
                    <button class="btn_signin text-white">Sign in</button>
                    <p class="or_signin">Or sign in</p>
                </div>
                <div class="col-sm-12 col-lg-12 row container text-center">
                    <button class=" col-sm-5 col-lg-5 other_login">
                        <img src="{{ asset('img/FB icon in sign in.png') }}" alt="facebook icon">
                    </button>
                    <button class="col-sm-5 col-lg-5 offset-2 other_login">
                        <img src="{{ asset('img/google icon.png') }}" alt="google icon">
                    </button>
                </div>
            </div>
        </div>
    </div>
    @include('components.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>