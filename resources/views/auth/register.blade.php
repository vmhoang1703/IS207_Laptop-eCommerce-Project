<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/register.css') }}">
</head>

<body>
    @component('components.header')
    @endcomponent
    <div class="row container-fluid mt-5">
        <div class="col-lg-6 col-sm-6 container_img ">
            <img src="{{ asset('img/sign in _ sign up screen.png') }}" alt="sign in _ sign up image" class="img_signup w-100">
        </div>
        <div class="col-lg-6 col-sm-6 row container_information mt-5 ">
            <div class="offset-2">
                <div>
                    <h1 class="tittle_signup">SIGN
                        <strong class="">UP</strong>
                    </h1>
                    <p style="color: #8C8888;">Already have an account? <a href="{{ route('login.show') }}" class="text_signin">Sign in</a></p>
                </div>
                <form action="{{ route('register.send') }}" method="POST" class="input_info_signup">

                    <input type="text" name="name" placeholder="Name" class="fullname ">
                    <input type="text" name="username" placeholder="Username" class="username">
                    <input type="email" name="email" placeholder="Email" class="email">
                    <input type="password" name="password" placeholder="Password" class="password">
                    <input type="password" name="password_confirmation" placeholder="Confirm password" class="confirm_password">
                    <p style="color: #333;">How did you hear about us?</p>
                    <select name="how_did_you_hear" class="choose">
                        <option value="online">Online</option>
                        <option value="friend">Friend</option>
                        <option value="advertising">Advertising</option>
                    </select>
                </form>
                <div>
                    <button type="submit" class="btn_signup_maincontent ">Sign Up</button>
                </div>
            </div>
        </div>
    </div>
    </div>
    @component('components.footer')
    @endcomponent
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>