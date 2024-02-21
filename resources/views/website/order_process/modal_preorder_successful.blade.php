<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="{{asset('css/preorder.css')}}">
    <script src="{{asset('js/order_payment.js')}}"></script>
    <title>E-lec World</title>
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
<<<<<<< Updated upstream
    <div class="body-box d-flex align-items-center justify-content-center container-fluid">
        <div class="popup d-flex flex-column align-items-center justify-content-center gap-3 ">
            <img src="{{ asset ('img/Group1.png')}}" alt="" class="icon-payment">
            <div class="head-title">Pre-0rder succeed</div>
            <div class="sub-title">
                Successful pre-order! We'll notify you by email or system alert when your reserved product is ready. Complete the remaining payment upon availability.
            </div>
            <div class=" d-flex gap-5 mt-4">
                <a href="{{ route('home.show') }}">
                    <button type="button" class="btn-payment btn btn-primary btn-lg">Return</button>
                </a>
                <a href="{{ route('profile.showPreOrder') }}">
                    <button type="button" class="btn-payment btn btn-primary btn-lg">Watch detailed Pre-order</button>
                </a>
            </div>

=======
    <div class="modal modalS" id="Toggle_succeed" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog d-flex justify-content-center ">
            <div class="modal-content toggle" style="width:700px ;height:556px;border-radius: 16px;">
                <img class="img_succeed" src="{{asset('img/Group.png')}}">
                <div class="text_succeed">
                    <div class="heading mt-4">Pre-Order succeed</div>
                    <div class="description mt-2 mx-5">Successful pre-order! We'll notify you by email or system alert when your reserved product is ready. Complete the remaining payment upon availability. </div>
                </div>
                <div class="btn_succeed mt-3">
                    <button data-bs-dismiss="modal" aria-label="Close">Return </button>
                    <button>Watch detailed Pre-order </button>
                </div>
            </div>
>>>>>>> Stashed changes
        </div>
    </div>
    <!-- Footer -->
    <div class="footer-fake mt-5">
        @component('components.footer')
        @endcomponent
    </div>
</body>

</html>