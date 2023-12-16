<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
    rel="stylesheet"
  />
  <link rel="stylesheet" href="{{ asset('css/my-order.css') }}">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
   
    <title>My order</title>
</head>

<body class="d-flex flex-column align-items-center">
    @component("components.header")
    @endcomponent

    <div class="head-title container-xxl container-xl container-lg container-md container-sm d-lg-flex align-items-center justify-content-center mt-3 mb-3">
        My order
    </div>
    <div class="container-xxl container-xl container-lg container-md container-sm row">
        <div class="container-xxl container-xl container-lg container-md container-sm col-xxl-4 col-xl-4 col-lg-3 col-md-4 col-sm-4">
            @component("components.profile_my-order_navbar")
            @endcomponent
        </div>
        <div class="col-xxl-8 col-xl-8 col-lg-9 col-md-8 col-sm-8">
            <div class=" p-5  container-xxl container-xl container-lg container-md container-sm box-infor d-flex flex-column gap-4">
                <div class="line-product-head row  ">
                    <div class=" col-xxl-2 col-xl-2 col-lg-1 col-md-2 col-sm-2 d-flex  ">
                    </div>
                    <div class="main-title  col-xxl-3 col-xl-3 col-lg-4 col-md-3 col-sm-3 d-flex   ">
                        <div class="  "> Product name </div>
                    </div>
                    <div class="col-xxl-7 col-xl-7 col-lg-7 col-md-7 col-sm-7 row ">
                      <div class="main-title  col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-3   ">
                          <div class=" "> Quantity </div>
                      </div>
                      <div class="main-title  col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-3   ">
                          <div class=""> Price </div>
                      </div>
                      <div class="main-title  col-xxl-3 col-xl-3 col-lg-2 col-md-2 col-sm-3 d-flex   ">
                          <div class=""> Status </div>
                      </div>
                      <div class="main-title  col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-3 d-flex   ">
                          <div class=" ms-auto"> Following </div>
                      </div>
                    </div>
                </div>
                <div class="  d-flex flex-column  gap-3 ">
                    @foreach ($orders as $order)
                    @component("components.profile_cart_my-order-page",  ['order' => $order])
                    @endcomponent
                    @endforeach
                </div>


            </div>

            <!--  -->
            <!-- Button trigger modal -->


            <!-- Modal -->
            <div class="modal fade" id="delivery-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                        <img class=" product-img " src="../Screen_3/18051e29a0086c873a703c6861f2eefb.jpg" alt=" ">
                                    </div>
                                    <div class=" col-xxl-8 d-flex flex-column gap-2">
                                        <div class=" card-item-name ">Dell XPS 9710 17 inch Core i7</div>
                                        <div class=" card-item-id ">ID: dkgnlsjg</div>
                                        <div class=" card-item-quantity ">Quantity: 1</div>
                                        <div class=" card-item-price "> 2000$</div>

                </div>
            </div>
            <div class="shipping-process">
                    <img class=" "  src="{{asset('img/Ship-1.svg')}}"  alt="">
                    <img class=""  src="{{asset('img/Ship-2.svg')}}" alt="">
                    <img class="shipping-not-passed"  src="{{asset('img/Ship-3.svg')}}" alt="">
                    <img class="shipping-not-passed"  src="{{asset('img/Ship-4.svg')}}" alt="">
            </div>
            <div class="status-shipping text-center mb-4"> Đơn hàng đang vận chuyện </div>
            <div class="line-grey"></div>
            <div class=" order-status ">
                <div class="  order-status-title mt-3 mb-3 "> Order Status </div>
                <div class="order-status-detail d-flex flex-column ">
                    <div class=" detail-line row mt-2 ">
                        <img class="col-xxl-1 icon-status-order "  src="{{ asset('img/check-box-shipping.svg')}} " alt="">
                        <div class="col-xxl-9 shipping-infor ps-auto d-flex flex-column  ">
                            <h3 class="shipping-infor-title  text-start"> In delivery- 17/12 </h3>
                            <div class="shipping-infor-site">Ga Sài Gòn </div>
                        </div>
                        <div class="col-xxl-2 shipping-infor-time   text-end"> 15:20 PM</div>
                    </div>
                    <!--  -->
                    <div class=" detail-line row mt-2 ">
                        <img class="col-xxl-1 icon-status-order "  src="{{ asset('img/check-box-shipping.svg')}} " alt="">
                        <div class="col-xxl-9 shipping-infor ps-auto d-flex flex-column  ">
                            <h3 class="shipping-infor-title  text-start"> In delivery- 17/12 </h3>
                            <div class="shipping-infor-site">Ga Sài Gòn </div>
                        </div>
                        <div class="col-xxl-2 shipping-infor-time   text-end"> 15:20 PM</div>
                    </div>
                    <div class=" detail-line row mt-2 ">
                        <img class="col-xxl-1 icon-status-order "  src="{{ asset('img/check-box-shipping.svg')}} " alt="">
                        <div class="col-xxl-9 shipping-infor ps-auto d-flex flex-column  ">
                            <h3 class="shipping-infor-title  text-start"> In delivery- 17/12 </h3>
                            <div class="shipping-infor-site">Ga Sài Gòn </div>
                        </div>
                        <div class="col-xxl-2 shipping-infor-time   text-end"> 15:20 PM</div>
                    </div>
                    <div class=" detail-line row mt-2 ">
                        <img class="col-xxl-1 icon-status-order "  src="{{ asset('img/check-box-shipping.svg')}} " alt="">
                        <div class="col-xxl-9 shipping-infor ps-auto d-flex flex-column  ">
                            <h3 class="shipping-infor-title  text-start"> In delivery- 17/12 </h3>
                            <div class="shipping-infor-site">Ga Sài Gòn </div>
                        </div>
                        <div class="col-xxl-2 shipping-infor-time   text-end"> 15:20 PM</div>
                    </div>
                    <div class=" detail-line row mt-2 ">
                        <img class="col-xxl-1 icon-status-order "  src="{{ asset('img/check-box-shipping.svg')}} " alt="">
                        <div class="col-xxl-9 shipping-infor ps-auto d-flex flex-column  ">
                            <h3 class="shipping-infor-title  text-start"> In delivery- 17/12 </h3>
                            <div class="shipping-infor-site">Ga Sài Gòn </div>
                        </div>
                        <div class="col-xxl-2 shipping-infor-time   text-end"> 15:20 PM</div>
                    </div>
                    <!--  -->
                </div>
            </div>
          </div>
        </div>
       
      </div>
    </div>
  </div>


  {{--  modal cancel  --}}

  <div class="modal fade" id="cancel_order-modal"  tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
               <input  class="type-check" type="text" placeholder=" Type other answer" name="Type-other-answer"  id="Type-other-answer"> 
              </div>

            </div>
          </div>


          <div id="cancel_step_3" class="container d-flex flex-column justify-content-center d-none " data-status="failure" >
            <div class="box-icon-cancel d-flex justify-content-center align-items-center m-5 row">
               <img src="{{asset('img/cancel_success-icon.svg ')}}" alt="" class="icon-cancel-oder">
            </div>
            <div class="question_cancel d-flex justify-content-center align-items-center ">
              Canceling suceed
            </div> 
          </div>


          <div id="cancel_step_4" class="container d-flex flex-column justify-content-center d-none  " data-status="success" >
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
            <button id="return_btn" type="button" class="btn btn-primary btn-cancel-modal " data-bs-dismiss="modal" > Return</button>
            <button id="confirm_btn" type="button" class="btn btn-primary btn-cancel-modal " > Confirm </button> 
            <button id="proceed_btn" type="button" class="btn btn-primary btn-cancel-modal d-none ">Proceed to cancel</button>
        


      </div>
      </div>
    </div>
  </div>
      <!--  -->
    </div>
  </div>



    <!-- footer -->
    @component("components.footer")
    @endcomponent
    <script src=" {{ asset('js/my-order.js') }}"></script>
</body>

</html>