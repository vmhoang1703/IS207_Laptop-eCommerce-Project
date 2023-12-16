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
    @if(Auth::check())
    @component("components.header")
    @endcomponent
    @else
    @component("components.header_signup")
    @endcomponent
    @endif

    <section class="maincontain">
        <!-- main content -->
        <section class="main-content">
            <div class="container">
                <div class="row pb-5" style="width: 100%;">
                    <!-- filter bar & menu -->
                    <div class="col-lg-3 col-md-2  filter-responsive">
                        @component('components.filter_store')
                        @endcomponent
                    </div>

                    <!-- Store -->
                    <div class="col-lg-9 col-md-10  fix mt-5">
                        <div class="store ">
                            <div class="carousel_store carousel ">
                                @foreach($products as $product)
                                @component('components.card', ['product' => $product])
                                @endcomponent
                                @endforeach
                                <!-- ----------------------------------------- -->
                            </div>
                        </div>

                        <!-- Pagination -->
                        <div class="d-flex justify-content-center mt-4">
                            {{ $products->links('vendor.pagination.bootstrap-4') }}
                        </div>
                        <!-- /Pagination -->

                    </div>
                </div>
            </div>
        </section>

        <div class="box">
            <!-- ... (your box content) ... -->
        </div>

        <!-- footer -->
        @component("components.footer")
        @endcomponent

        <!-- - -->
        @component("components.toast")
        @endcomponent

        <script src="js/heart_action.js"></script>
        <script>
            var csrfToken = "{{ csrf_token() }}";
        </script>
        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
        <script src="{{ asset('js/addToCart.js') }}"></script>
</body>

</html>