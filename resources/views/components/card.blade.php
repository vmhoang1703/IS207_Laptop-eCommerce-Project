<!-- <li class="card " data-id="{{ $product->id }}">
    <div class="img mb-0">
        <div class="fa fa-heart heart heart-item">
            <div id="total-favorite-count"></div>
        </div>
        <img src="{{ asset('img/keboard.png') }}" alt="img" draggable="false">
    </div>

    <div class="productname">{{ $product->name }}</div>
    <div class="cost"> {{ $product->price }}$ <span class="discount">{{ $product->oldPrice }}$</span></div>
    <div class="star-bar ms-4">
        <span class="fa fa-star star"></span>
        <span class="fa fa-star star"></span>
        <span class="fa fa-star star"></span>
        <span class="fa fa-star star"></span>
        <span class="fa fa-star star"></span>
        <span class="numbered">(4.3)</span>
    </div>
</li> -->

<div class="card" data-id="{{ $product->id }}">
    <div class="heart">
        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none" stroke="black" class="heart1">
            <path d="M11 7C8.239 7 6 9.216 6 11.95C6 14.157 6.875 19.395 15.488 24.69C15.6423 24.7839 15.8194 24.8335 16 24.8335C16.1806 24.8335 16.3577 24.7839 16.512 24.69C25.125 19.395 26 14.157 26 11.95C26 9.216 23.761 7 21 7C18.239 7 16 10 16 10C16 10 13.761 7 11 7Z" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
        </svg>
    </div>
    <div class="img">
        @if($product->images && $product->images->isNotEmpty())
        <img src="{{ asset($product->images[0]->image_path) }}" alt="{{ $product->name }}">
        @else
        <img src="{{ asset('img/default_image.jpg') }}" alt="Default Image">
        @endif
    </div>

    <div class="card-action">
        <div class="btn">
            <button>Buy now</button>
            <button>Add cart</button>
        </div>
    </div>
    <div class="info-card">
        <div class="productname">{{ $product->name }}</div>
        <div class="cost"> {{ $product->price }}$ <span class="discount">{{ $product->oldPrice }}$</span></div>
        <div class="star-bar">
            <span class="fa fa-star star"></span>
            <span class="fa fa-star star"></span>
            <span class="fa fa-star star"></span>
            <span class="fa fa-star star"></span>
            <span class="fa fa-star star"></span>
        </div>
    </div>
</div>