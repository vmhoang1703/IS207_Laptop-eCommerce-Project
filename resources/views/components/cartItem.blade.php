<div class="line-item d-flex align-items-center row mt-3 container-xxl  container-xl container-lg container-md container-sm container-xs ">
    <div class="  input_row d-flex flex-column col-xxl-1 col-xl-1 col-lg-1 col-md-1 col-sm-1 col-1">
        <input class="form-check-input" type="checkbox" value="" id="check-box-item">
    </div>
    <label for="" class="form-check-label row col-xxl-10 border-box-item d-flex align-items-center pe-5 ps-5 col-xl-10 col-lg-10 col-md-10 col-sm-10 col-10 ">
        <a href="#" class="  align-item-cart product-infor d-flex gap-2 col-xxl-4 col-xl-4 col-lg-5  table-title text-start">
            <img class="product-img" src="{{ asset($cartItem->product->images->where('is_main', 1)->first()->image_path) }}" alt="">
            <h3 class="product-name text-start">{{ $cartItem->product->title }}</h3>
        </a>
        <div class="col-xxl-3 col-xl-3 col-lg-2 ps-5 item_price table-title text-start">${{ $cartItem->product->price }}</div>
        <div class="col-xxl-3 col-xl-3 col-lg-3 ps-5  item_quantity  table-title text-start">
            <input id="quantity-item_{{ $cartItem->cartItem_id }}" type="number" class="product-quantity " value="{{ $cartItem->quantity }}" min="1" data-id="{{ $cartItem->cartItem_id }}">
        </div>
        <div class="col-xxl-2 col-xl-2 col-lg-2  item_price-total table-title text-end subtotal" data-id="{{ $cartItem->cartItem_id }}">${{ $cartItem->subtotal }}</div>
    </label>
    <div class="col-xxl-1 col-xl-1 col-lg-1 col-md-1 col-sm-1 col-1  ">
        <button class="btn " onclick="deleteCartItem('{{ $cartItem->cartItem_id }}')">
            <img style="width: 30px; height:30px" src="{{ asset ('img/trash-bin.png')}}" alt="">
        </button>
    </div>
</div>
