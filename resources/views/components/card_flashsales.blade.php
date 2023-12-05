<li class="card">
    <div class="discount-tag">-{{ $product->discount }}% </div>
    <div class="img">

        @if ($product->images->where('is_main', 1)->isNotEmpty())
        <img src="{{ asset($product->images->where('is_main', 1)->first()->image_path) }}" alt="{{ $product->name }}" style="height: 150px; width: 190px">
        @else
        <img src="{{ asset('img/logo.jpg') }}" alt="{{ $product->name }}" style="height: 150px; width: 190px">
        @endif
    </div>
    <div class="card-action">
        <div class="btn1 buttons">
            <button onclick="location.href='#'" >Buy now</button>
            <button onclick="location.href='#'" class="btn" id="success">Add to cart</button>
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
            <!-- @for ($i = 0; $i < 5; $i++) @if ($i < $product->starRating)
                <span class="fa fa-star star"></span>
                @else
                <span class="fa fa-star"></span>
                @endif
                @endfor -->
        </div>
    </div>

</li>
