<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="{{asset('css/resetpass.css')}}">
  <title>reset password </title>
</head>

<body>
      <!-- header -->
      @component("components.header_signup")
      @endcomponent
    <!-- container -->
    <div class="container mt-5" style="margin: botom 200px;">
      <div class="row">
        <div class="col-lg-4 col-sm-12 mb-5"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="26" viewBox="0 0 68 26" fill="none" class="back">
          <path d="M0.833683 11.9336C0.191564 12.5776 0.193087 13.6202 0.837085 14.2623L11.3317 24.7263C11.9757 25.3684 13.0183 25.3669 13.6604 24.7229C14.3025 24.0789 14.301 23.0363 13.657 22.3941L4.32848 13.0928L13.6298 3.76429C14.2719 3.12029 14.2704 2.07768 13.6264 1.43556C12.9824 0.793437 11.9398 0.79496 11.2977 1.43896L0.833683 11.9336ZM67.8638 11.3533L1.99734 11.4496L2.00216 14.7429L67.8686 14.6467L67.8638 11.3533Z" fill="black"/>
          </svg></div>

      <div class="col-lg-8 col-sm-12">
         <h5>Reset your password </h5>
        <form>
          <div class="form-group">
            <label for="formGroupExampleInput" class="text">Type in your registered email address to reset password</label>
            <input type="text" class="form-control mt-3" id="formGroupExampleInput" placeholder="Email Address *">
            <button type="submit" class="btn btn-danger mt-3 btn-rspw">NEXT <i class="fa fa-arrow-right" aria-hidden="true"></i></button>
          </div>
        </form> </div>  </div>
    </div>
     <!-- footer -->
     @component("components.footer")
        @endcomponent
</body>

</html>
