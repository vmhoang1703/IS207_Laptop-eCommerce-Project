<div class="line-product-item row">
    <div class="col-xxl-2 d-flex me-auto">
        <img class="product-img" src="{{ asset($order->product->images->where('is_main', 1)->first()->image_path) }}" alt="">
    </div>
    <div class="line-product-item-text main-title col-xxl-2 d-flex">
        <div class="product-item-text me-auto">{{ $order->product->title }}</div>
    </div>
    <div class="line-product-item-text main-title col-xxl-2">
        <div class="product-item-text">{{ $order->quantity }}</div>
    </div>
    <div class="line-product-item-text main-title col-xxl-2">
        <div class="product-item-text">{{ $order->subtotal }}</div>
    </div>
    <div class="line-product-item-text main-title col-xxl-2 d-flex">
        <div class="product-item-text">{{ $order->status }}</div>
    </div>
    <div class="line-product-item-text main-title col-xxl-2 d-flex">
        <div>
            <button class="product-item-text btn btn-danger btn-detail" data-bs-toggle="modal" data-bs-target="#delivery-modal">
                Detail
            </button>
        </div>
    </div>
</div>