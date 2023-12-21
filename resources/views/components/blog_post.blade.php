<div class="cart-post mt-5 row">
      
    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-4 d-flex justify-content-end">
      <a class="" href="{{ route('article.show', $blog->slug) }}">
      @if($blog->images->isNotEmpty())
      @foreach($blog->images as $image)
      <img src="{{ asset($image->image_path) }}" alt="{{ $blog->title }}" class="post-img" >
      @endforeach
      @else
      <p>No images available</p>
      @endif
      </a>
    </div>
    <div class="col-xxl-8 col-xl-8 col-lg-8 col-md-8 col-sm-8 d-flex flex-column  gap-2 ps-4 ">
      <div class="cart_category-post"> STARTUP </div>
      <a href="{{ route('article.show', $blog->slug) }}" class="cart_title-post">{{$blog->title}}</a>
      <div class="cart_sub-title">{{$blog->summary}}</div>
    </div>
  </div>
