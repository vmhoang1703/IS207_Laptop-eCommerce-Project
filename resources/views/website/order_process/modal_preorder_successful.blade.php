<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="{{ asset('css/payment_end_screen.css') }}">
    <script src="{{asset('js/order_payment.js')}}"></script>
    <title>Pre-Order</title>
</head>

<body class="d-flex flex-column ">
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <!-- Header  -->
    @component('components.header')
    @endcomponent
    <div class="body-box d-flex align-items-center justify-content-center container-fluid">
        <div class="popup d-flex flex-column align-items-center justify-content-center gap-3 ">
            <img  src="{{ asset ('img/outstock.png')}}" alt="" class="icon-payment">
            <div class="head-title">Out-of-stock!</div>
            <div class="sub-title">
            This product is out of stock. If you would like to pre-order, please click "Pre-order."
            </div>
            <div class=" d-flex gap-5 mt-4">
                <a href="#">
                    <button type="button" class="btn-payment btn btn-primary btn-lg">Return</button>
                </a>
                <a href="#">
                    <button type="button" class="btn-payment btn btn-primary btn-lg">Pre-order</button>
                </a>
            </div>

        </div>
    </div>


    <!-- Footer -->
    <div class="footer-fake">
        @component('components.footer')
        @endcomponent
    </div>
</body>

</html>
