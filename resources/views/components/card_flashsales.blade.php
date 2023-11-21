<li class="card">
    <div class="discount-tag">-{{ $product->discount }}% </div>
    <div class="img">
        <img src="{{ asset('storage/' . $product->images->first()->image_path) }}" alt="{{ $product->name }}" draggable="false" style="height: 150px; width: 190px">
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
            <!-- @for ($i = 0; $i < 5; $i++) @if ($i < $product->starRating)
                <span class="fa fa-star star"></span>
                @else
                <span class="fa fa-star"></span>
                @endif
                @endfor -->
        </div>
    </div>
</li>