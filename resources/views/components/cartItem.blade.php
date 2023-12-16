<div class="line-item d-flex align-items-center row mt-3 container-xxl">
    <div class="col-xxl-1">
        <input class="form-check-input checkbox-item" type="checkbox" value="" data-id="{{ $cartItem->cartItem_id }}">
    </div>
    <label for="check-box-item" class="form-check-label row col-xxl-11 border-box-item d-flex align-items-center pe-5 ps-5">
        <a href="#" class="product-infor d-flex gap-2 col-xxl-4 table-title text-start">
            <img class="product-img" src="{{ asset($cartItem->product->images->where('is_main', 1)->first()->image_path) }}" alt="">
            <h3 class="product-name text-start">{{ $cartItem->product->title }}</h3>
        </a>
        <div class="col-xxl-3 table-title text-start">${{ $cartItem->product->price }}</div>
        <div class="col-xxl-3 table-title text-start">
            <input id="quantity-item_{{ $cartItem->cartItem_id }}" type="number" class="product-quantity" value="{{ $cartItem->quantity }}" min="1" data-id="{{ $cartItem->cartItem_id }}">
        </div>
        <div class="col-xxl-2 table-title text-end subtotal" data-id="{{ $cartItem->cartItem_id }}">${{ $cartItem->subtotal }}</div>
    </label>
    <div class="col-xxl-1">
        <button class="btn btn-danger" onclick="deleteCartItem('{{ $cartItem->cartItem_id }}')">Delete</button>
    </div>
</div>
