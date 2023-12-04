<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>

<body>
    @component('components.header_signup')
    @endcomponent
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
                    <p>You don't have an account? <a href="{{ route('register.show') }}" class="text_sign_up">Sign up</a></p>
                </div>
                <!-- Input information  -->
                <form class="container text-center" action="{{ route('login.send') }}" method="post">
                    @csrf
                    <div class="input_info_signin">
                        <input type="text" name="username" placeholder="Username" class="username">
                        <input type="password" name="password" placeholder="Password" class="password">
                    </div>
                    <div class="remember_and_forgot pb-3">
                        <div class="remember">
                            <input type="checkbox">
                            Remember me
                        </div>
                        <div class="forgot">
                            <a href="" class="">Forgot password?</a>
                        </div>
                    </div>
                    <input type="submit" value="Sign in" class="btn_signin text-white">
                    <p class="or_signin mt-2">Or sign in</p>
                </form>
                <!-- Button -->
                <div class="col-sm-12 col-lg-12 row container text-center">
                    <button class=" col-sm-5 col-lg-5 other_login">
                        <img src="{{ asset('img/FB icon in sign in.png') }}" alt="facebook icon">
                    </button>
                    <button class="col-sm-5 col-lg-5 offset-2 other_login">
                        <a href="{{ route('google.login') }}"><img src="{{ asset('img/google icon.png') }}" alt="google icon"></a>
                    </button>
                </div>
            </div>
        </div>
    </div>
    @component('components.footer')
    @endcomponent
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
