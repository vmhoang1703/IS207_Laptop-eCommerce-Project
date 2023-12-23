<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-lec World</title>
    <link rel="stylesheet" href="{{ asset('css/blog_category.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</head>

<body class="d-flex flex-column align-items-center">
    @component("components.header")
    @endcomponent

    <div class="slider container-fluid-xxl  row mt-2 d-flex flex-column justify-content-center align-items-center gap-3 mb-4 ">
        @foreach($blogs as $blog)
        <div class="category-name text-center "> {{ $blog->category->title }} </div>
        <div class="category-sub text-center "> "This is a place to share information related to the {{ $blog->category->title }} field"</div>
        <nav class="display-none-mobile" style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-custom d-flex justify-content-center ">
                <li class="breadcrumb-item"><a href="#">Blog</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{ $blog->category->title }}</li>
            </ol>
        </nav>
        @break
        @endforeach
    </div>

    <div class="container-xxl container-xl container-lg container-md container-sm row mt-3 ">
        <div class="col-xxl-8 col-xl-8 pe-2 d-flex flex-column gap-3">

            @foreach($blogs as $blog)
            @component("components.blog_category_post", ['blog' => $blog])
            @endcomponent
            @endforeach

        </div>
        <div class="col-xxl-1 col-xl-1 "></div>
        <div class="col-xxl-3 col-xl-3 d-flex flex-column gap-3 pe-2 margin-left-40 margin-top-20 ">
            <div class="title-category mb-3">Categories </div>
            <div class="cart_box_category d-flex gap-3">

                @if($blogsBusiness->title == 'Business - Blog')
                <a href="{{ route('category.show', $blogsBusiness->slug) }}" class=" pe-2">
                    <div class="cart_category-mini  d-flex align-items-center gap-3 p-3">
                        <img src="{{ asset('img/Business-icon.png') }}" alt="" class="icon-category">
                        <div class="cart_category_name">Business</div>
                    </div>
                </a>
                @endif

                @if($blogsStartup->title == 'Startup - Blog')
                <a href="{{ route('category.show', $blogsStartup->slug) }}">
                    <div class="cart_category-mini  d-flex align-items-center gap-3 p-3">
                        <img src="{{ asset('img/Startup-icon.png') }}" alt="" class="icon-category">
                        <div class="cart_category_name">Startup</div>
                    </div>
                </a>
                @endif

                @if($blogsEconomy->title == 'Economy - Blog')
                <a href="{{ route('category.show', $blogsEconomy->slug) }}">
                    <div class="cart_category-mini  d-flex align-items-center gap-3 p-3">
                        <img src="{{ asset('img/Economy-icon.png') }}" alt="" class="icon-category">
                        <div class="cart_category_name">Economy</div>
                    </div>
                </a>
                @endif

                @if($blogsTechnology->title == 'Technology - Blog')
                <a href="{{ route('category.show', $blogsTechnology->slug) }}" class=" pe-2">
                    <div class="cart_category-mini  d-flex align-items-center gap-3 p-3">
                        <img src="{{ asset('img/Technology-icon.png') }}" alt="" class="icon-category">
                        <div class="cart_category_name">Technology</div>
                    </div>
                </a>
                @endif

            </div>


            <div class="title-category mt-4 mb-3">All Tags </div>
            <a href=" " class="box_all-tag d-flex gap-2 mb-4 ">
                <div class="category_tag text-center"> Business </div>
                <div class="category_tag text-center"> Experience </div>
                <div class="category_tag text-center"> Screen </div>
                <div class="category_tag text-center"> Technology</div>
            </a>

        </div>
    </div>

    <!-- Pagination -->
    <div class="d-flex justify-content-center mt-4">
        {{ $blogs->links('vendor.pagination.bootstrap-4') }}
    </div>
    <!-- /Pagination -->

    @component("components.footer")
    @endcomponent

</body>

</html>