<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/cartlist.css') }}">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</head>

<body class="d-flex flex-column align-items-center">
    @component("components.header")
    @endcomponent

    <form id="myForm" action=" " class="container-xxl  container-xcontainer-lg  container-md container-sm  list-item d-flex flex-column  gap-2">
        <div  class=" d-flex row mt-3 mb-3 container-xxl container-xl container-lg  container-md container-sm">
            <div class="col-xxl-1 col-xl-1 col-lg-1  "></div>
            <div id="tabel_title"  class=" row col-xxl-10  col-xl-10 col-lg-10 border-box  d-flex align-items-center pe-5 ps-5">
                <div class="col-xxl-4 col-xl-4 col-lg-5 table-title text-start"> Product </div>
                <div class="col-xxl-3 col-xl-3 col-lg-2 ps-5 table-title text-start "> Price </div>
                <div class="col-xxl-3 col-xl-3 col-lg-3 ps-5  table-title text-start "> Quantity </div>
                <div class="col-xxl-2 col-xl-2 col-lg-2 table-title text-end  "> Subtotal</div>
            </div>
            <div class="col-xxl-1 col-xl-1 col-lg-1"></div>
        </div>
    </div>
    @component("components.cartlist")
    @endcomponent


        <div class=" ms-auto notice-error "></div>
        <div class="btn-end d-flex justify-content-end row ">
            <button type="button" class=" col-xxl-10  col-xl-11 col-lg-12  mt-1 btn-payment btn btn-danger " onclick="proceedToPayment()">Proceed to payment</button>
            <div class="col-xxl-1 col-xl-1 col-lg-1"></div>
        </div>


    </form>
    @component("components.footer")
    @endcomponent

    <script>
        var csrfToken = "{{ csrf_token() }}";
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="{{ asset('js/cartlist.js')}}" defer> </script>
</body>

</html>