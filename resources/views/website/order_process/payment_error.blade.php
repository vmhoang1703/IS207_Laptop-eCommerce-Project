<!DOCTYPE html>
<html>
<head>
	<title>Error</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/payment_success-error.css') }}">
	<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
</head>
<body>
<div class="wrapper">
  <div class="modal_wrapper active active">
    <div class="shadow close_btn"></div>
    <div class="modal">
      <div class="modal_item e_modal active ">
        <div class="modal_body">
          <div class="s_icon">
          <ion-icon name="help"></ion-icon>
        </div>
        <div class="s_text">
          <h2>ERROR</h2>
          <p>Unfortunately we have an issue with your payment, try again later.</p>
        </div>
        </div>
        <div class="s_button">
          <button class="error_btn">Continue</button>
        </div>
      </div>
    </div>
  </div>
</div>


</body>
</html>