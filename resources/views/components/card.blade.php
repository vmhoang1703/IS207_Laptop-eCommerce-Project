<li class="card " data-id="{{ $product->id }}">
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
</li>