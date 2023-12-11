<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-lec World</title>
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

    <div class="row mb-5">
        <h1 class="row col-lg-12 col-md-12 col-sm-12 title-contact-us mt-3 mb-3"> Contact us</h1>
        <div class="row col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="row col-lg-5 col-md-4 col-sm-4 col-4 ">
                <div class="offset-lg-2 offset-md-2 offset-1 col-lg-8 col-md-8 col-sm-12 col-12 contaniner-contact pt-4 pb-4">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="row col-lg-12 col-md-12 col-sm-12 col-12" class="">
                            <img src="{{ asset('img/icons-phone.png') }}" alt="phone" class="col-lg-2 col-md-4 col-sm-6 col-6 icon-contact">
                            <strong class="col-lg-9 col-md-9 col-sm-12 col-12 call-to-us">Call to us</strong>
                        </div>
                        <p class="none-dis-res contact-detail">We are available 24/7, 7 days a week.</p>
                        <p class="contact-detail">Phone: 099-999-9999</p>
                    </div>
                    <hr>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="row col-lg-12 col-md-12 col-sm-12 col-12" class="">
                            <img src="{{ asset('img/icons-mail.png') }}" alt="mail" class="col-lg-2 col-md-4 col-sm-6 col-6 icon-contact">
                            <strong class="col-lg-9 col-md-9 col-sm-12 col-12 write-to-us">Write to us</strong>
                        </div>
                        <p class="none-dis-res contact-detail">Fill out our form and we will contact you within 24 hours.</p>
                        <p class="contact-detail">Emails: elecworld@gmail.com</p>
                        <p class="contact-detail">Emails: supportelecworld@gmail.com</p>
                    </div>
                </div>
            </div>
            <div class=" col-lg-7 col-md-8 col-sm-8 col-8 contaniner-contact pt-4 pb-4">
                <form action="" class="offset-lg-1 offset-md-1 col-lg-10 col-md-10 col-sm-12 col-12 ">
                    <div class=" col-lg-12 col-md-12 col-sm-12 col-12 container-input row">
                        <input type="text" name="" id="" placeholder="Your Name" class="input-mes col-sm-12 col-12">
                        <input type="text" name="" id="" placeholder="Your Email" class="input-mes col-sm-12 col-12">
                        <input type="text" name="" id="" placeholder="Your Phone" class="input-mes col-sm-12 col-12">
                    </div>
                    <textarea name="" id="" cols="30" rows="10" placeholder="Your Message" class="row col-lg-12 col-md-12 col-sm-12 col-12 message"></textarea>
                    <button type="submit" class="offset-lg-9 offset-md-6 col-lg-3 col-md-6 col-sm-8 col-8 btn-send-message">Send Message</button>
                </form>
            </div>
        </div>
    </div>
    @component('components.footer')
    @endcomponent
</body>

</html>