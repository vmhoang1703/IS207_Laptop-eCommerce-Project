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
     <div class="container-xxl ">          
        <ul id="myBreadcrumb" class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Cửa hàng </a></li>
            <li class="breadcrumb-item"><a href="#">Laptop </a></li>
            <li class="breadcrumb-item"><a href="#">Dell XPS 9710 17 inch Core i7 </a></li>
            <li class="breadcrumb-item"><a href="#">Buy now </a></li>
            <li class="breadcrumb-item active">Checkout</li>
        </ul>
    </div>
    <!--  -->
    <div class="container   w-100 ">
      <form action="">
        <div class="row w-100 ">
            <div class="col-6 d-flex flex-column mt-4">
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
                        <label class="form-check-label exclude ">
                          <input class=" exclude form-check-input" type="checkbox" name="remember">Save this information for faster check-out next time
                        </label>
                      </div>
                    </div>
                     
                  
                
            </div>
            <div class="col-6  ">
                <div class=" infor-payment  d-flex flex-column mt-5 ">
                    <div class="row mt-5 mb-3 ">
                        <div class="product-tite col-6 d-flex "> 
                            <img src="https://via.placeholder.com/150" style="height: 65px; width: 65px; object-fit: cover;"  class="product-img " >
                            <div class="text-start" > Dell XPS 9710 17 inch Core i7 </div>
                        </div>
                       
                        <div class="product-price col-6 text-end  "> $2000 </div>
                    </div>
                    <!--  -->
                    <div class="total-infor__subtotal row mt-3 "> 
                        <div class=" col-6 text-start"> Subtotal: </div>
                        <div id="total-infor__subtotal " class=" col-6 text-end"> $2000  </div>
                    </div>
                    <div class="line-grey mt-2 mb-3"></div>
                    <div class="total-infor__shipping row mt-2 "> 
                        <div class=" col-6 text-start"> Shipping: </div>
                        <div id="total-infor__shipping " class=" col-6 text-end"> Free  </div>
                    </div>
                    <div class="line-grey mt-2 mb-3"></div>
                    <div class="total-infor__discount row mt-2 "> 
                        <div class=" col-6 text-start"> Discount: </div>
                        <div id="total-infor__discount " class=" col-6 text-end"> $5 </div>
                    </div>
                    <div class="line-grey mt-2 mb-3"></div>
                    <div class="total-infor__total row mt-2 "> 
                        <div class=" col-6 text-start"> Total: </div>
                        <div id="total-infor__total " class=" col-6 text-end"> $1995 </div>
                    </div>

                      <!--  -->

                    <div class="line-grey mt-2 mb-3"></div>

                    
                    <button class="row payment-method mt-3 d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#exampleModal"  id="paymentMethodBtn" >
                        <img id="method-img-main" class="col-1"  src="./payment-icon.svg"  alt="payment-icon">
                        <div class=" method-name col-6 text-start ">Choose Payment Method </div>
                        <div class="col-5 text-end method-change "> >> </div>
                    </button>

                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog d-flex ">
                        <div class="modal-content "  >
                          <div class="modal-header" style="height: 116px;" >
                            <h5 class=" modal-title w-100 text-center" id="exampleModalLabel">Payment Method</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>

                          <div class=" w-100" style="height: 10px;background: #DEDDDD; "></div>
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
                            <button type="button" id="btn-agree" class=" btn   btn-danger " data-bs-dismiss="modal" > I agree</button>
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