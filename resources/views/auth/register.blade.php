<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up</title>
    <link rel="stylesheet" href="/resources/css/register.css">
</head>
<body>
    <?php
    include("header.php");
    ?>
    <div class="main_content">
        <div class="main_left_content">
            <img src="image/sign in _ sign up screen.png" alt="Sign in - Sign up" class="signup_img">
        </div>
        <div class="main_right_content">
            <!-- text  -->
            <div>
                <h1 class="tittle_signup">SIGN 
                    <strong class="text_up">UP</strong>
                </h1>
                <p>You don't have an account?<a href="">Sign in</a></p>
            </div>
            <!-- Input information  -->
            <div>
                <input type="text" placeholder="Fullname" class="input_info_signup">
                <input type="text" placeholder="Date of birth" class="input_info_signup">
                <input type="text" placeholder="Email" class="input_info_signup">
                <input type="text" placeholder="Password" class="input_info_signup">
                <input type="text" placeholder="Confirm password" class="input_info_signup">
                <p>How did you hear about us?</p>
                <select name="" id=""  class="input_info_signup">
                    <option value="">Choose</option>
                </select>
            </div>
            <!-- Button -->
            <div>
                <button class="btn_signup_maincontent">Sign Up</button>
            </div>
        </div>
    </div>
    <?php
    include("footer.php");
    ?>
</body>

</html>