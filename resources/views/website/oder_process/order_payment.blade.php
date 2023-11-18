<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
   <link rel="stylesheet" href="{{ asset('css/order_payment.css') }}">
   <script src="js/order_payment.js"></script>
    <title>Oder Process 2 </title>
</head>
<body class="d-flex flex-column " >
    <!-- header  -->
    <div class="header-fake"></div>
     <!-- breadcrumb -->
     <div class=" container container-md container-lg container-xxl container-xl container-lg container-md container-sm ">          
        <ul id="myBreadcrumb" class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Cửa hàng </a></li>
            <li class="breadcrumb-item"><a href="#">Laptop </a></li>
            <li class="breadcrumb-item"><a href="#">Dell XPS 9710 17 inch Core i7 </a></li>
            <li class="breadcrumb-item"><a href="#">Buy now </a></li>
            <li class="breadcrumb-item active">Checkout</li>
        </ul>
    </div>
    <!--  -->
    <div class="container-xxl container-xl container-lg container-md container-sm w-100 ">
      <form action="">
        <div class="  row w-100 margin-left-mobile-0 ">
            <div class=" padding-right-xl  col-xxl-6 col-xl-6 col-lg-12 col-md-12 col-sm-12 d-flex flex-column mt-4">
                <h3 class="title-form"> Billing Dettails</h3>
                    <div class="form-custommer-infor">
                      <div class="mb-3 mt-3">
                        <label for="first-name" class="form-label">First Name:
                          <span class="text-danger">*</span>
                        </label>
                        <input type="text" class="form-control" id="first-name"  name="first-name"required>
                      </div>
  
                      <div class="mb-3 mt-3">
                          <label for="street-address" class="form-label">Street Address:
                            <span class="text-danger">*</span>
                          </label>
                          <input type="text" class="form-control" id="street-address"  name="street-address" required>
                        </div>
  
                        <div class="mb-3 mt-3">
                          <label for="apartment" class="form-label">Apartment:
                          </label>
                          <input type="text" class="form-control" id="apartment"  name="apartment">
                        </div>
  
                        <div class="mb-3 mt-3">
                          <label for="city" class="form-label">Town/City:
                              <span class="text-danger">*</span>
                          </label>
                          <input type="text" class="form-control" id="city"  name="city" required>
                        </div>
  
                        <div class="mb-3 mt-3">
                          <label for="phone" class="form-label">Phone Number:
                              <span class="text-danger">*</span>
                          </label>
                          <input type="tel" class="form-control" id="phone"  name="phone" required>
                        </div>
                      
                        <div class="mb-3 mt-3">
                          <label for="email" class="form-label">Email Address:
                              <span class="text-danger">*</span>
                          </label>
                          <input type="email" class="form-control" id="email"  name="email" required>
                        </div>
  
                      <div class="form-check  mb-3">
                        <label class="form-check-label exclude text-mobile-size-14 ">
                          <input class=" exclude form-check-input" type="checkbox" name="remember">Save this information for faster check-out next time
                        </label>
                      </div>
                    </div>
                     
                  
                
            </div>
            <div class=" col-xxl-6 col-xl-6 col-lg-12 col-md-12 col-sm-12 ">
                <div class=" infor-payment  d-flex flex-column mt-5 text-mobile-size-14 ">
                    <div class="row mt-5 mb-3 margin-top-mobile-16">
                        <div class="product-tite col-xxl-6 col-xl-6 col-lg-6 col-md-8 col-sm-8 col-8 d-flex "> 
                            <img src="https://via.placeholder.com/150" style="height: 65px; width: 65px; object-fit: cover;"  class="product-img " >
                            <div class=" text-start" > Dell XPS 9710 17 inch Core i7 </div>
                        </div>
                       
                        <div class="product-price col-xxl-6 col-xl-6 col-lg-6 col-md-4 col-sm-4 col-4 text-end  "> $2000 </div>
                    </div>
                    <!--  -->
                    <div class="total-infor__subtotal row mt-3 "> 
                        <div class=" col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6 text-start"> Subtotal: </div>
                        <div id="total-infor__subtotal " class=" col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6 text-end"> $2000  </div>
                    </div>
                    <div class="line-grey mt-2 mb-3"></div>
                    <div class="total-infor__shipping row mt-2 "> 
                        <div class=" col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6 text-start"> Shipping: </div>
                        <div id="total-infor__shipping " class=" col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6 text-end"> Free  </div>
                    </div>
                    <div class="line-grey mt-2 mb-3"></div>
                    <div class="total-infor__discount row mt-2 "> 
                        <div class=" col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6 text-start"> Discount: </div>
                        <div id="total-infor__discount " class=" col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6 text-end"> $5 </div>
                    </div>
                    <div class="line-grey mt-2 mb-3"></div>
                    <div class="total-infor__total row mt-2 "> 
                        <div class=" col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6 text-start"> Total: </div>
                        <div id="total-infor__total " class=" col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6 text-end"> $1995 </div>
                    </div>

                      <!--  -->

                    <div class="line-grey mt-2 mb-3"></div>

                    
                    <div class="row payment-method mt-3 d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#exampleModal"  id="paymentMethodBtn" >
                        <img id="method-img-main" class="col-xxl-1 col-xl-1 col-lg-1 col-md-1 img-mobile-40x40" style="width: 60px; height: 60px; object-fit: contain;"  src="{{asset('img/payment-icon.svg')}}"  alt="payment-icon">
                        <div class=" method-name col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6 text-start ">Choose Payment Method </div>
                        <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-3 col-sm-3 col-3 text-end method-change text-end ms-auto">  </div>
                    </div>

                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog d-flex ">
                        <div class="modal-content "  >
                          <div class="modal-header " style="height: 116px;" >
                            <h5 class=" modal-title w-100 text-center " id="exampleModalLabel">Payment Method</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>

                          <div class=" w-100 height-mobile-5 " style="height: 10px;background: #DEDDDD; "></div>
                          <div class="modal-body d-flex flex-column gap-3 ">
                            
                            <div id="method-pay-in-store" class="method-line d-flex  ">
                              <img class="method-img" src="https://cdn2.cellphones.com.vn/x400,webp,q100/media/payment-logo/COS.png" style="width: 60px; height: 60px; object-fit: contain;" alt="Pay in store ">
                              <div class="method-name">Pay in store</div>
                            </div>
                            <div id="method-vnpay" class="method-line d-flex ">
                              <img class="method-img" src="https://cdn2.cellphones.com.vn/x/media/logo/gw2/vnpay.png" style="width: 60px; height: 60px;object-fit: contain; " alt="VNPAY ">
                              <div class="method-name">VNPAY</div>
                            </div>
                            <div id="method-visa" class="method-line d-flex ">
                              <img class="method-img" src="https://cdn2.cellphones.com.vn/x/media/logo/gw2/onepay.png" style="width: 60px; height: 60px;object-fit: contain; " alt="Visa ">
                              <div class="method-name" >Visa/Master/JCB/Napas</div>
                            </div>
                            <div id="method-momo" class="method-line d-flex ">
                              <img class="method-img" src="https://cdn2.cellphones.com.vn/x/media/logo/gw2/momo_vi.png" style="width: 60px; height: 60px;object-fit: contain; " alt=" MoMo ">
                              <div class="method-name">MoMo</div>
                            </div>
                            <div id="method-zalopay" class="method-line d-flex ">
                              <img class="method-img" src="https://cdn2.cellphones.com.vn/x/media/logo/gw2/zalopay.png" style="width: 60px; height: 60px;object-fit: contain; " alt=" ZaloPay ">
                              <div class="method-name">ZaloPay</div>
                            </div>


                         
                          </div>
                          <div class="modal-footer modal-bs5-none  d-grid">
                            <button type="button" id="btn-agree" class=" btn  btn-danger mobile-w100 " data-bs-dismiss="modal" > I agree</button>
                          </div>
                        </div>
                      </div>
                    </div>
                

                    <div class="d-grid mt-4">
                        <button type="button" class="btn btn-danger btn-oder">Order</button>
                      </div>
                </div>
            </div>
        </div>
    </div>
      </form>

    <div class="footer-fake mt-5"></div>
     <script src="./index_demo.js"> </script>
</body>
</html>