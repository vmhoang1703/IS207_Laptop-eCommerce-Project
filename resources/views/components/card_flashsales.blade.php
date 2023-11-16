<li class="card">
    <div class="discount-tag">-{{ $product->discount }}%</div>
    <div class="img"><img style="width: 190px; height: 101px" src="{{ asset('img/macbookproM2.png') }}" alt="img" draggable="false"></div>
    <div class="card-action">

        <div class="btn">
            <button>Buy now</button>
            <button>Add To Cart</button>
        </div>
        <div class="fa fa-heart heart"> </div>
    </div>
    <div class="productname">{{ $product->name }}</div>
    <div class="cost"> {{ $product->price }}$ <span class="discount">{{ $product->price }}$</span></div>
    <div class="star-bar ms-4">
        <span class="fa fa-star star"></span>
        <span class="fa fa-star star"></span>
        <span class="fa fa-star star"></span>
        <span class="fa fa-star star"></span>
        <span class="fa fa-star star"></span>
        <span class="numbered">(4.3)</span>
    </div>
</li>