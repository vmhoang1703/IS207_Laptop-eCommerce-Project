<div class="line-product-item row">
    <div class="col-xxl-2 col-xl-2 col-lg-1 col-md-2 col-sm-2 d-flex justify-content-center align-items-center ">
        @if ($order->product_id === '')
        @foreach ($order->products as $product)
        <img class="product-img" src="{{ asset($product['images']->where('is_main', 1)->first()->image_path) }}" alt="">
        <br>
        @endforeach
        @else
        <img class="product-img" src="{{ asset($order->product->images->where('is_main', 1)->first()->image_path) }}" alt="">
        @endif
    </div>
    <div class="name_product line-product-item-text main-title col-xxl-3 col-xl-3 col-lg-4 col-md-3  d-flex">
        <div class="pe-3 product-item-text me-auto">
            @if ($order->product_id === '')
            @foreach ($order->products as $product)
            {{ $product['title'] }}
            <br>
            @endforeach
            @else
            {{ $order->product->title }}
            @endif
        </div>
    </div>
    <div class="row col-xxl-7 col-xl-7 col-lg-7 col-md-7 ">
        <div class="quantity_product display-mobile-none line-product-item-text main-title col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-3">
            <div class="product-item-text">{{ $order->quantity }}</div>
        </div>
        <div class="subtotal_product display-mobile-none line-product-item-text main-title col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-3">
            <div class="product-item-text">${{ $order->total }}</div>
        </div>
        <div class="status_product display-mobile-none line-product-item-text main-title col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-3 d-flex">
            <div class="product-item-text display-mobile-none">{{ $order->status }}</div>
        </div>
        <!-- <div class="line-product-item-text button-box main-title col-xxl-3 col-xl-3 col-lg-3 col-md-12 col-sm-12 d-flex">
            <div class=" product-item-text  "> Change my mind </div>
       
        </div> -->
    </div>
</div>