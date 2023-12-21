<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/blog_article.css') }}">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</head>

<body class="d-flex flex-column align-items-center">
    @component("components.header")
    @endcomponent

    @if($blog->images->isNotEmpty())
      @foreach($blog->images as $image)
      <img class="slider container-fluid-xxl row mt-2 " src="{{ asset($image->image_path) }}" alt="{{ $blog->title }}">
      @endforeach
      @else
      <p>No images available</p>
      @endif

    <div class=" post-box container-fluid d-flex align-items-center flex-column gap-1 ps-5 pe-5  mt-3">
        @component("components.blog_article_author", ['users' => $users, 'blog' => $blog, 'formattedDate' => $formattedDate])
        @endcomponent
        <div class="head-title w-100 text-start mt-4 "> {{$blog->title}}</div>
        @component("components.blog_article_style_post")
        @endcomponent
        <div class=" container-xxl container-xl container-lg container-md container-sm    content mt-3 p-pc-3">
            {!! $blog->content !!}
        </div>
    </div>

    <div class="heading_tag_1 w-100 ps-5 pe-5  mt-3 text-start">What to read next</div>
    <div class="cart_read w-100 ps-5 pe-5 mb-5 mt-3  row ">
        @component("components.blog_article_cart_post")
        @endcomponent

        @component("components.blog_article_cart_post")
        @endcomponent

        @component("components.blog_article_cart_post")
        @endcomponent
    </div>

    @component("components.footer")
    @endcomponent


</body>

</html>