<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/cartlist.css') }}">
    <script src="{{ asset('js/cartlist.js')}}" defer> </script>

    <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
    rel="stylesheet"
  />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</head>
<body class="d-flex flex-column align-items-center" >
    @component("components.header")
    @endcomponent

<form id="myForm" action=" " class="container-xxl container-xl container-lg  container-md container-sm list-item d-flex flex-column  gap-2">
    <div class=" d-flex align-items-center row mt-3 mb-3 container-xxl container-xl container-lg  container-md container-sm  ">
        <div class="col-xxl-1 col-xl-1 col-lg-1   "></div>
        <div id="tabel_title" class=" row col-xxl-11 col-xl-11 col-lg-11  border-box  d-flex align-items-center pe-5 ps-5">
            <div class="col-xxl-4 col-xl-4 col-lg-5  table-title text-start"> Product </div>
            <div class="col-xxl-3 col-xl-3 col-lg-2  table-title text-start "> Price </div>
            <div class="col-xxl-3 col-xl-3 col-lg-3  table-title text-start "> Quantity </div>
            <div class="col-xxl-2 col-xl-2 col-lg-2  table-title text-end  "> Subtotal</div>
        </div>
    </div>
    @component("components.cartlist")
    @endcomponent

   
    <div class=" ms-auto notice-error "></div>
    <button type="button" class=" ms-auto mt-1 btn-payment btn btn-danger" onclick="proceedToPayment()">Proceed to payment</button>

   
</form>



@component("components.footer")
@endcomponent
</body>
</html>