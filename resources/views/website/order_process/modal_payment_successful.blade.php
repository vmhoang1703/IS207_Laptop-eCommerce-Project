<!-- modal thanh toán thành công -->
<div class="modal fade" id="payment-success" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered d-flex mobile-margin-none">
        <div class="modal-content modal-success-content">
            <div class="modal-body d-flex flex-column gap-3 justify-content-center align-items-center">
                <img src="{{asset('img/payment_success.svg')}}" alt="">
                <div class="payment_success_main_text"> Order succeed </div>
                <div class="payment_success_text">You have ordered successfully </div>
            </div>
            <div class="modal-footer">
                <button type="button" id="btn-return" class="btn btn-primary" data-bs-dismiss="modal">
                    <a href=" ">Return </a>
                </button>
                <button type="button" id="btn-watch-detailed-order" class="btn btn-primary" data-bs-dismiss="modal">
                    <a href=" "> Watch detailed order </a>
                </button>
            </div>
        </div>
    </div>
</div>

<!--  -->