<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About us</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap_css/bootstrap.min.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link rel="stylesheet" href="{{ asset('css/contact_us.css') }}">
    <script src="js/dropdown.js"></script>
    <script src="js/countdown.js"></script>
    <script src="js/carousel.js"> </script>
</head>

<body>
    @component('components.header_signup')
    @endcomponent

    @component('components.footer')
    @endcomponent
</body>
</html>