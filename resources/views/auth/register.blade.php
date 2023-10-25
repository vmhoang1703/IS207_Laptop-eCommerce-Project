<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/register.css') }}">
    <title>Sign up</title>
</head>

<body>
    @include('../components/header_signup')
    <div class="main_content">
        <div class="main_left_content">
            <img src="{{ asset('img/sign in _ sign up screen.png') }}" alt="Sign in - Sign up" class="signup_img">
        </div>
        <div class="main_right_content">
            <!-- text -->
            <div>
                <h1 class="tittle_signup">SIGN
                    <strong class="text_up">UP</strong>
                </h1>
                <p style="color: #8C8888;">Already have an account? <a href="login" class="text_signin">Sign in</a></p>
            </div>
            <!-- Form for registration -->
            <form action="" method="POST" class="input_info_signup">
                @csrf <!-- Add CSRF token for security -->
                <input type="text" name="fullname" placeholder="Fullname" class="fullname">
                <input type="text" name="date_of_birth" placeholder="Date of birth" class="date_of_birth">
                <input type="email" name="email" placeholder="Email" class="email">
                <input type="password" name="password" placeholder="Password" class="password">
                <input type="password" name="password_confirmation" placeholder="Confirm password" class="confirm_password">
                <p>How did you hear about us?</p>
                <select name="how_did_you_hear" class="choose">
                    <option value="online">Online</option>
                    <option value="friend">Friend</option>
                    <option value="advertising">Advertising</option>
                </select>
            </form>
            <!-- Button -->
            <div>
                <button type="submit" class="btn_signup_maincontent">Sign Up</button>
            </div>
        </div>
    </div>
    @include('../components/footer')
</body>

</html>