<div class="line-product-item row">
    <div class="col-xxl-2 col-xl-2 col-lg-1 col-md-2 col-sm-2 d-flex justify-content-center align-items-center ">
        <img class="product-img" src="{{ asset($order->product->images->where('is_main', 1)->first()->image_path) }}" alt="">
    </div>
    <div class="line-product-item-text main-title col-xxl-3 col-xl-3 col-lg-4 col-md-3 col-sm-3 d-flex">
        <div class="pe-3 product-item-text me-auto">{{ $order->product->title }}</div>
    </div>
    <div class="row col-xxl-7 col-xl-7 col-lg-7 col-md-7 col-sm-7">
        <div class="line-product-item-text main-title col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-3">
            <div class="product-item-text">{{ $order->quantity }}</div>
        </div>
        <div class="line-product-item-text main-title col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-3">
            <div class="product-item-text">{{ $order->subtotal }}</div>
        </div>
        <div class="line-product-item-text main-title col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-3 d-flex">
            <div class="product-item-text">{{ $order->status }}</div>
        </div>
        <div class="line-product-item-text button-box main-title col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-3 d-flex">
            
                <button class="product-item-text btn btn-danger btn-detail" data-bs-toggle="modal" data-bs-target="#delivery-modal">
                    Detail
                </button>
            
                <button class="product-item-text btn btn-primary btn-cancel-oder" data-bs-toggle="modal" data-bs-target="#cancel_order-modal"> Cancel</button>
       
        </div>
    </div>
</div>