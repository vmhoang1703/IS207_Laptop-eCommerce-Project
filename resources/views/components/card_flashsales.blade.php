<li class="card" data-id="{{ $product->product_id }}">
    <div class="discount-tag">-{{ $product->discount }}% </div>
    <div class="img">
        <a href="{{ route('detail.show', $product->slug) }}" style="text-decoration: none;">
            @if ($product->images->where('is_main', 1)->isNotEmpty())
            <img src="{{ asset($product->images->where('is_main', 1)->first()->image_path) }}" alt="{{ $product->name }}">
            @else
            <img src="{{ asset('img/logo.jpg') }}" alt="{{ $product->title }}" style="height: 150px; width: 190px">
            @endif
        </a>
    </div>
    <div class="card-action">
        <div class="btn1 buttons">
            <button onclick="location.href=`{{ route('checkout.show', $product->product_id) }}`">Buy now</button>
            <button class="add-to-cart-btn btn" id="success" data-product-id="{{ $product->product_id }}">Add to cart</button>
        </div>
    </div>
    <div class="info-card">
        <a href="{{ route('detail.show', $product->slug) }}" style="text-decoration: none; color: black">
            <div class="productname">{{ $product->title }}</div>
        </a>
        <div class="cost"> {{ $product->price }}$ <span class="discount">{{ $product->oldPrice }}$</span></div>
        <div class="star-bar">
            <span class="fa fa-star star"></span>
            <span class="fa fa-star star"></span>
            <span class="fa fa-star star"></span>
            <span class="fa fa-star star"></span>
            <span class="fa fa-star star"></span>
            <!-- @for ($i = 0; $i < 5; $i++) @if ($i < $product->starRating)
                <span class="fa fa-star star"></span>
                @else
                <span class="fa fa-star"></span>
                @endif
                @endfor -->
        </div>
    </div>

</li>