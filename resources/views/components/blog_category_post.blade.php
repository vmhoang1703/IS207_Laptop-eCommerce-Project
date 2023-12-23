<div class="cart-post d-flex flex-row gap-4 mb-5">
    <a class="" href="{{ route('article.show', $blog->slug) }}">
        @if(isset($blog->images) && count($blog->images) > 0)
        <img src="{{ asset($blog->images[0]->image_path) }}" alt="" class="avt-post">
        @endif
    </a>
    <div class="d-flex flex-column justify-content-center gap-pc-4">
        <div class="cart_category">{{ $blog->category->title }}</div>
        <a href="{{ route('article.show', $blog->slug) }}" class="cart_title">{{ $blog->title }}</a>
        <div class="cart_sub">{{ $blog->summary }}</div>
    </div>
</div>