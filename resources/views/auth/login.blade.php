<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>

<body>
    <!-- header -->
    @include('../components/header_signup')
    <!-- main content -->
    <!-- Left image -->
    <div class="main_content">
        <div class="main_left_content">
            <img src="{{ asset('img/sign in _ sign up screen.png') }}" alt="Sign in - Sign up" class="signup_img">
        </div>
        <div class="main_right_content">
            <!-- text  -->
            <div>
                <h1 class="tittle_signin">SIGN
                    <strong class="text_in">IN</strong>
                </h1>
                <p>You don't have an account? <a href="register" class="text_sign_up">Sign up</a></p>
            </div>
            <!-- Form for login -->
            <form action="" method="POST" class="input_info_signin">
                @csrf <!-- Add CSRF token for security -->
                <input type="text" name="username" placeholder="Username" class="username">
                <input type="password" name="password" placeholder="Password" class="password">
            </form>
            <div class="remember_and_forgot">
                <div class="remember">
                    <input type="checkbox" name="remember" id="remember">
                    <label for="remember">Remember me</label>
                </div>
                <a href="" class="forgot">Forgot password?</a>
            </div>
            <!-- Button -->
            <div class="signin">
                <button type="submit" class="btn_signin">Sign In</button>
                <p class="or_signin">Or sign in</p>
            </div>
            <div class="container_other_login">
                <button class="other_login">
                    <img src="{{ asset('img/FB icon in sign in.png') }}" alt="facebook icon">
                </button>
                <button class="other_login">
                    <img src="{{ asset('img/google icon.png') }}" alt="google icon">
                </button>
            </div>
        </div>
    </div>
    @include('../components/footer')
</body>

</html>