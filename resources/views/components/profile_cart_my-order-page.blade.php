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
            <div class="product-item-text">${{ $order->total }}</div>
        </div>
        <div class="line-product-item-text main-title col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-3 d-flex">
            <div class="product-item-text">{{ $order->status }}</div>
        </div>
        <div class="line-product-item-text button-box main-title col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-3 d-flex">
            <button class="product-item-text btn btn-danger btn-detail" data-bs-toggle="modal" data-bs-target="#delivery-modal-{{ $order->order_id }}" data-order-id="{{ $order->order_id }}" data-modal-id="delivery-modal-{{ $order->order_id }}">
                Detail
            </button>
            <button class="product-item-text btn btn-primary btn-cancel-order" data-bs-toggle="modal" data-bs-target="#cancel-order-modal-{{ $order->order_id }}" data-order-id="{{ $order->order_id }}" data-modal-id="delivery-modal">
                Cancel
            </button>
        </div>
    </div>
</div>


<div class="modal fade" id="delivery-modal-{{ $order->order_id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Following</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="container d-flex flex-column justify-content-center">
                    <div class="card-item row">
                        <div class=" col-xxl-2">
                            <img class=" product-img " src="{{ asset($order->product->images->where('is_main', 1)->first()->image_path) }}" alt=" ">
                        </div>
                        <div class=" col-xxl-8 d-flex flex-column gap-2">
                            <div class=" card-item-name ">{{ $order->product->title }}</div>
                            <div class=" card-item-id ">ID: {{ $order->order_id }}</div>
                            <div class=" card-item-quantity ">Quantity: {{ $order->quantity }}</div>
                            <div class=" card-item-price "> ${{ $order->total }}</div>

                        </div>
                    </div>
                    <div class="shipping-process">
                        <img class=" " src="{{asset('img/Ship-1.svg')}}" alt="">
                        <img class="" src="{{asset('img/Ship-2.svg')}}" alt="">
                        <img class="shipping-not-passed" src="{{asset('img/Ship-3.svg')}}" alt="">
                        <img class="shipping-not-passed" src="{{asset('img/Ship-4.svg')}}" alt="">
                    </div>
                    <div class="status-shipping text-center mb-4"> Đơn hàng đang vận chuyện </div>
                    <div class="line-grey"></div>
                    <div class=" order-status ">
                        <div class="  order-status-title mt-3 mb-3 "> Order Status </div>
                        <div class="order-status-detail d-flex flex-column ">
                            <div class=" detail-line row mt-2 ">
                                <img class="col-xxl-1 icon-status-order " src="{{ asset('img/check-box-shipping.svg')}} " alt="">
                                <div class="col-xxl-9 shipping-infor ps-auto d-flex flex-column  ">
                                    <h3 class="shipping-infor-title  text-start"> In delivery- 17/12 </h3>
                                    <div class="shipping-infor-site">Ga Sài Gòn </div>
                                </div>
                                <div class="col-xxl-2 shipping-infor-time   text-end"> 15:20 PM</div>
                            </div>
                            <!--  -->
                            <div class=" detail-line row mt-2 ">
                                <img class="col-xxl-1 icon-status-order " src="{{ asset('img/check-box-shipping.svg')}} " alt="">
                                <div class="col-xxl-9 shipping-infor ps-auto d-flex flex-column  ">
                                    <h3 class="shipping-infor-title  text-start"> In delivery- 17/12 </h3>
                                    <div class="shipping-infor-site">Ga Sài Gòn </div>
                                </div>
                                <div class="col-xxl-2 shipping-infor-time   text-end"> 15:20 PM</div>
                            </div>
                            <div class=" detail-line row mt-2 ">
                                <img class="col-xxl-1 icon-status-order " src="{{ asset('img/check-box-shipping.svg')}} " alt="">
                                <div class="col-xxl-9 shipping-infor ps-auto d-flex flex-column  ">
                                    <h3 class="shipping-infor-title  text-start"> In delivery- 17/12 </h3>
                                    <div class="shipping-infor-site">Ga Sài Gòn </div>
                                </div>
                                <div class="col-xxl-2 shipping-infor-time   text-end"> 15:20 PM</div>
                            </div>
                            <div class=" detail-line row mt-2 ">
                                <img class="col-xxl-1 icon-status-order " src="{{ asset('img/check-box-shipping.svg')}} " alt="">
                                <div class="col-xxl-9 shipping-infor ps-auto d-flex flex-column  ">
                                    <h3 class="shipping-infor-title  text-start"> In delivery- 17/12 </h3>
                                    <div class="shipping-infor-site">Ga Sài Gòn </div>
                                </div>
                                <div class="col-xxl-2 shipping-infor-time   text-end"> 15:20 PM</div>
                            </div>
                            <div class=" detail-line row mt-2 ">
                                <img class="col-xxl-1 icon-status-order " src="{{ asset('img/check-box-shipping.svg')}} " alt="">
                                <div class="col-xxl-9 shipping-infor ps-auto d-flex flex-column  ">
                                    <h3 class="shipping-infor-title  text-start"> In delivery- 17/12 </h3>
                                    <div class="shipping-infor-site">Ga Sài Gòn </div>
                                </div>
                                <div class="col-xxl-2 shipping-infor-time   text-end"> 15:20 PM</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="cancel-order-modal-{{ $order->order_id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">

            <div class="modal-cancel-popup modal-body" data-delivery="ordering">

                <div id="cancel_step_1" class="container d-flex flex-column justify-content-center ">
                    <div class="box-icon-cancel d-flex justify-content-center align-items-center m-5 row">
                        <img src="{{asset('img/icon-cancel-order.svg')}}" alt="" class="icon-cancel-oder">
                    </div>
                    <div class="question_cancel d-flex justify-content-center align-items-center ">
                        Are you sure to cancel your order?
                    </div>
                </div>

                <div id="cancel_step_2" class="reason-cancel d-flex flex-column justify-content-center align-items-center gap-3 mt-4 d-none">
                    <div class="reason-head d-flex flex-column justify-content-center align-items-center "> Chose the reason why you want to cancel your order? </div>
                    <div class="form-check_cancel ">

                        <div class="line-check mt-3 w-80 d-flex justify-content-start gap-3">
                            <input class="form-check-input" type="radio" name="reason cancel" id="not-address-inquiries">
                            <label class="form-check-label d-flex align-items-center  justify-content-center" for="not-address-inquiries">
                                The seller does not address inquiries
                            </label>
                        </div>


                        <div class="line-check mt-3 w-80 d-flex justify-content-start gap-3">
                            <input class="form-check-input" type="radio" name="reason cancel" id="change-the-product">
                            <label class="form-check-label d-flex align-items-center  justify-content-center" for="change-the-product">
                                Want to change the product model
                            </label>
                        </div>


                        <div class="line-check mt-3 w-80 d-flex justify-content-start gap-3">
                            <input class="form-check-input" type="radio" name="reason cancel" id="change-the-address">
                            <label class="form-check-label d-flex align-items-center  justify-content-center" for="change-the-address">
                                Want to change the address
                            </label>
                        </div>

                        <div class="line-check mt-3 w-80 d-flex justify-content-start gap-3">
                            <input class="form-check-input" type="radio" name="reason cancel" id="Change-my-mind">
                            <label class="form-check-label d-flex align-items-center  justify-content-center" for="Change-my-mind">
                                Change my mind
                            </label>
                        </div>


                        <div class="line-check mt-3 w-80 d-flex justify-content-start gap-3">
                            <input class="type-check" type="text" placeholder=" Type other answer" name="Type-other-answer" id="Type-other-answer">
                        </div>

                    </div>
                </div>


                <div id="cancel_step_3" class="container d-flex flex-column justify-content-center d-none " data-status="failure">
                    <div class="box-icon-cancel d-flex justify-content-center align-items-center m-5 row">
                        <img src="{{asset('img/cancel_success-icon.svg ')}}" alt="" class="icon-cancel-oder">
                    </div>
                    <div class="question_cancel d-flex justify-content-center align-items-center ">
                        Canceling suceed
                    </div>
                </div>


                <div id="cancel_step_4" class="container d-flex flex-column justify-content-center d-none  " data-status="success">
                    <div class="box-icon-cancel d-flex justify-content-center align-items-center m-5 row">
                        <img src=" {{asset('img/cancel_success-icon.svg ')}}" alt="" class="icon-cancel-oder">
                    </div>
                    <div class="question_cancel d-flex justify-content-center align-items-center ">
                        Canceling unsuceed
                    </div>
                    <div class="question_cancel-reason mt-2 text-center">
                        You cannot cancel the order because it is in transit. Please contact the shipper directly if you wish to cancel
                    </div>
                </div>
            </div>

            <div class="modal-footer mb-4  cancel_order-modal__footer  ">
                <button id="return_btn" type="button" class="btn btn-primary btn-cancel-modal " data-bs-dismiss="modal"> Return</button>
                <button id="confirm_btn" type="button" class="btn btn-primary btn-cancel-modal "> Confirm </button>
                <button id="proceed_btn" type="button" class="btn btn-primary btn-cancel-modal d-none ">Proceed to cancel</button>
            </div>
        </div>
    </div>
</div>

<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

<!-- Bootstrap JS (Bundle) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<script>
    $(document).ready(function() {
        function loadOrderDetails(orderId, modalId) {
            $.ajax({
                url: '/order-details',
                method: 'GET',
                data: {
                    orderId: orderId
                },
                success: function(data) {
                    updateDeliveryModalContent(data, modalId);
                    $('#' + modalId).modal('show');
                },
                error: function(error) {
                    console.error('Error fetching order details:', error);
                }
            });
        }

        function updateDeliveryModalContent(data, modalId) {
            var modalSelector = '#' + modalId + ' ';

            $(modalSelector + '.card-item-name').text(data.product.title);
            $(modalSelector + '.card-item-id').text('ID: ' + data.order_id);
            $(modalSelector + '.card-item-quantity').text('Quantity: ' + data.quantity);
            $(modalSelector + '.card-item-price').text('$' + data.total);
        }

        $('.btn-detail').on('click', function() {
            var orderId = $(this).data('order-id');
            var modalId = 'delivery-modal-' + orderId; // Unique ID for the delivery modal
            loadOrderDetails(orderId, modalId);
        });

        $('.btn-cancel-order').on('click', function() {
            var orderId = $(this).data('order-id');
            var modalId = 'cancel-order-modal-' + orderId;

            // Fetch order status via AJAX
            $.ajax({
                url: '/check-order-status',
                method: 'GET',
                data: {
                    orderId: orderId
                },
                success: function(data) {
                    var orderStatus = data.status;
                    if (orderStatus === 'Pending' || orderStatus === 'Preparing') {
                        // Show the "cancel_step_1" modal
                        $('#' + modalId + ' #cancel_step_1').removeClass('d-none');
                        $('#' + modalId + ' #cancel_step_2').addClass('d-none');
                        $('#' + modalId + ' #cancel_step_3').addClass('d-none');
                        $('#' + modalId + ' #cancel_step_4').addClass('d-none');
                        $('#' + modalId).modal('show');
                    } else {
                        // Handle the case where the order cannot be canceled
                        // You can show a different modal or display a message to the user
                        alert('Cannot cancel order with status: ' + orderStatus);
                    }
                },
                error: function(error) {
                    console.error('Error fetching order status:', error);
                }
            });
        });

    });
</script>