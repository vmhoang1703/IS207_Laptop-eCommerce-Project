<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Login</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
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
                @if (session('warning'))
                <span class="alert alert-warning help-block">
                    <strong>{{ session('warning') }}</strong>
                </span>
                @endif
                <!-- Input information  -->
                <form class="container text-center" action="{{ route('login.send') }}" method="post">
                    @csrf
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    <div class="input_info_signin">
                        <input type="text" name="email" placeholder="Email" class="email">
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
                    <button class="col-sm-5 col-lg-5 offset-2 other_login" id="google-login">
                        <img src="{{ asset('img/google icon.png') }}" alt="Firebase icon">
                    </button>
                </div>
            </div>
        </div>
    </div>
    @component('components.footer')
    @endcomponent
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
<script type="module">
    const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
    // Import the functions you need from the SDKs you need
    import {
        initializeApp
    } from "https://www.gstatic.com/firebasejs/10.7.1/firebase-app.js";
    import {
        getAuth,
        GoogleAuthProvider,
        signInWithRedirect,
        getRedirectResult,
        signInWithPopup
    } from "https://www.gstatic.com/firebasejs/10.7.1/firebase-auth.js";
    // TODO: Add SDKs for Firebase products that you want to use
    // https://firebase.google.com/docs/web/setup#available-libraries

    // Your web app's Firebase configuration
    const firebaseConfig = {
        apiKey: "AIzaSyBAS1xauoZP0nVdkMD7rRHGfs5qnloDLeE",
        authDomain: "e-lec-world.firebaseapp.com",
        projectId: "e-lec-world",
        storageBucket: "e-lec-world.appspot.com",
        messagingSenderId: "105839979654",
        appId: "1:105839979654:web:3f0ce0041ac6a9848eb507"
    };

    // Initialize Firebase
    const app = initializeApp(firebaseConfig);
    const auth = getAuth(app);
    const provider = new GoogleAuthProvider(app);

    document.getElementById('google-login').addEventListener('click', (e) => {
        // signInWithRedirect(auth, provider);
        signInWithPopup(auth, provider)
            .then((result) => {
                // This gives you a Google Access Token. You can use it to access the Google API.
                const credential = GoogleAuthProvider.credentialFromResult(result);
                const token = credential.accessToken;
                // The signed-in user info.
                const user = result.user;
                handleUserWithGG(user);
                // IdP data available using getAdditionalUserInfo(result)
                // ...
            }).catch((error) => {
                // Handle Errors here.
                const errorCode = error.code;
                const errorMessage = error.message;
                // The email of the user's account used.
                const email = error.customData ? error.customData.email : null;
                // The AuthCredential type that was used.
                const credential = GoogleAuthProvider.credentialFromError(error);
                // ...
                alert(errorMessage);
            });
    });

    function handleUserWithGG(user) {
        if (user && user.email) {
            $.ajax({
                type: "POST",
                url: "/google-login",
                headers: {
                    "Content-Type": "application/json",
                    "X-CSRF-TOKEN": csrfToken,
                },
                data: JSON.stringify({
                    name: user.displayName,
                    email: user.email,
                    // Add other user data as needed
                }),
                success: function(response) {
                    console.log(response);
                    // Handle success if needed
                    // Redirect user to home page
                    window.location.href = "/";
                },
                error: function(error) {
                    console.error(error);
                    // Handle error if needed
                }
            });
        } else {
            console.error("User or email is undefined");
            // Handle the case where 'user' or 'user.email' is undefined
        }
    }
</script>

</html>