<li class="card " data-id="{{ $product->product_id }}">
    <div class="img mb-0">
        <span class="fa fa-heart heart heart-item ">
            <!-- <span id="total-favorite-count" class="ms-2">{{ $product->total_favorite_count }}</span> -->
        </span>
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
</li>