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
    @component('components.header_signup')
    @endcomponent
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
            <form action="{{ route('login.send') }}" method="POST" class="input_info_signin">
                @csrf <!-- Add CSRF token for security -->
                <input type="text" name="username" placeholder="Username" class="username">
                <input type="password" name="password" placeholder="Password" class="password">
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
            </form>
            <div class="container_other_login">
                <a href="" class="other_login" role="button">
                    <img style="position: relative; top: 25%; left: 45%;" src="{{ asset('img/FB icon in sign in.png') }}" alt="google icon">
                </a>
                <a href="{{ route('google.login') }}" class="other_login" role="button">
                    <img style="position: relative; top: 25%; left: 40%;" class="other_login_img" src="{{ asset('img/google icon.png') }}" alt="google icon">
                </a>
            </div>
        </div>
    </div>
    @component('components.footer')
    @endcomponent
</body>
</html>