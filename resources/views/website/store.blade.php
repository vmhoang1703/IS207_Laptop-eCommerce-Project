<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>E-lec World</title>
    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap_css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{asset('css/product_card.css') }}">
    <link rel="stylesheet" href="{{asset('css/store.css') }}">
    <link rel="stylesheet" href="{{asset('css/responsive/store_res.css') }}">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="js/range.js" defer></script>
    <script src="js/pagination.js" defer></script>
    <script src="js/filter.js" defer></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
</head>

<body>
    <!-- header -->
    @component("components.header")
    @endcomponent
    <section class="maincontain">
        <!-- main content -->
        <section class="main-content">
            <div class="container">
                <div class="row pb-5">
                    <!-- filter bar & menu -->
                    <div class="col-sm-2 filter-responsive">
                        @component('components.filter_store')
                        @endcomponent
                    </div>
                    <!-- Store -->
                    <div class="col-sm-9 fix  ms-5 mt-5">
                        <div class="store " style="margin-left:20%">
                            <div class="carousel_store carousel ">
                                @foreach($products as $product)
                                @component('components.card', ['product' => $product])
                                @endcomponent
                                @endforeach
                                <!-- ----------------------------------------- -->
                            </div>
                        </div>
                    </div>
        </section>
        <div class="box">
            <div class="pagination">
                <ul>
                    <!-- trong script -->
                </ul>
            </div>
        </div>
        <!-- footer -->
        @component("components.footer")
        @endcomponent
        <!-- - -->
        <script src="js/heart_action.js"></script>
</body>

</html>
