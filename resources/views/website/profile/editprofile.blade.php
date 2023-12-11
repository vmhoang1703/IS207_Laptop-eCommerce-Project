<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="{{ asset('css/myaccount.css') }}">
    <title>My account</title>
</head>
<body class="d-flex flex-column align-items-center">
    @component("components.header")
    @endcomponent
  <div
    class="head-title container-xxl container-xl container-lg container-sm d-flex align-items-center justify-content-center mt-3 mb-3"
  >
    My account
  </div>

   <!--  nav mobile -->
<div class=" nav-mobile container-xl container-lg container-ms mb-5 display-none padding-mobile-none ">
<nav class="  navbar navbar-expand navbar-light bg-light">
    <div class="collapse navbar-collapse" id="navbarNav-mobile">
      <ul class="navbar-nav d-flex gap-4">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle mobile-font-size-14 active" href="#" id="nav-manage-account" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Manage My Account
          </a>
          <ul class="dropdown-menu ms-3 " aria-labelledby="nav-manage-account">
            <li><a class="dropdown-item" href="#">My Profile</a></li>
          </ul>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle mobile-font-size-14" href="#" id="nav-my-oder" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            My Orders
          </a>
          <ul class="dropdown-menu" aria-labelledby="nav-my-oder">
            <li><a class="dropdown-item" href="#">My Order</a></li>
            <li><a class="dropdown-item" href="#">My Pre-order</a></li>
            <!-- <li><hr class="dropdown-divider"></li> -->
            <li><a class="dropdown-item" href="#">My Cancellation</a></li>
            <li><a class="dropdown-item" href="#">My Order History</a></li>
          </ul>
        </li>
        
      </ul>
    </div>
 
</nav>
</div>
<!--  -->
  <div class="container-xxl  row">
    <div class="container-xxl  col-xxl-4">
        @component("components.profile_lag_navbar")
        @endcomponent
      
    </div>
        <div class="col-xxl-8 col-xxl-8 col-xl-12 col-lg-12">
            <!--  -->
            <form id="edit-mode" class="  container-xxl container-xl container-lg box-infor d-flex flex-column gap-4">
                <h2 class="box-infor-title">Edit Your Profile</h2>
                <div class="row">
                  <div class="first-name-and-email col-xxl-6 col-xl-12 d-lg-flex flex-column gap-4 pe-4 padding-right-mobile-12">
                    <div class="form-item">
                      <label for="custom-first-name" class="form-label">First name</label>
                      <input type="text" class="form-control" id="custom-first-name" value="Minh Duc Hoang" >
                    </div>
                    <div class="form-item">
                      <label for="custom-email" class="form-label">Email address</label>
                      <input type="email" class="form-control" id="custom-email-last" value="name@example.com" >
                    </div>
                  </div>
                  <div class="last-name-and-address col-xxl-6 col-xl-12 d-lg-flex flex-column gap-4 ms-auto ps-4 padding-left-mobile-14 ">
                    <div class="form-item">
                      <label for="custom-last-name" class="form-label">Last name</label>
                      <input type="text" class="form-control" id="custom-last-name" value="Minh Duc Hoang" >
                    </div>
                    <div class="form-item">
                      <label for="custom-email" class="form-label">Address</label>
                      <input type="text" class="form-control" id="custom-address" value="123 tran phu" >
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="form-item">
                    <label for="custom-password" class="form-label">Password</label>
                    <div class="password-line d-flex input-group mb-3">
                      <input type="password" class="form-control" id="custom-password" value="123456" >
                      <button class="btn btn-outline-secondary" type="button" id="toggle-password">
                        <img class="show-password"src="{{ asset ('img/show-password-icon.svg')}}"alt="">
                        <img class="hide-password" src="{{ asset ('img/hide-password-icon.svg')}} " alt="">
                      </button>
                    </div>
                
                    <div class="password-line d-flex input-group mb-3">
                      <input type="password" class="form-control" id="custom-new-password" placeholder="New Password" >
                      <button class="btn btn-outline-secondary" type="button" id="toggle-new-password">
                        <img class="show-password"src="{{ asset ('img/show-password-icon.svg')}}" alt="">
                        <img class="hide-password"src="{{ asset ('img/hide-password-icon.svg')}}" alt="">
                      </button>
                    </div>
                
                    <div class="password-line d-flex input-group mb-3">
                      <input type="password" class="form-control" id="custom-confirm-password" placeholder="Confirm New Password" >
                      <button class="btn btn-outline-secondary" type="button" id="toggle-confirm-password">
                        <img class="show-password" src="{{ asset ('img/show-password-icon.svg')}}" alt="">
                        <img class="hide-password" src="{{ asset ('img/hide-password-icon.svg')}} " alt="">
                      </button>
                    </div>
                  </div>
                </div>
                <div class="btn-group  d-flex gap-3">
                <button id="reset-infor" type="reset" class="btn btn-dark mobile-font-size-14">Cancel</button>
                <button id="save-infor" type="button" class="btn btn-danger mobile-font-size-14" >Save</button>
                </div>
              </form>
              <!--  -->
        </div>

    </div>
    @component("components.footer")
    @endcomponent
   <script src=" {{ asset('js/edit-profile.js') }}"></script>

   
   
</body>
</html>
