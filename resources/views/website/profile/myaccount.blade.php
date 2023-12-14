<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0" /> -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="{{ asset('css/myaccount.css') }}">

  <title>My account</title>
</head>

<body class=" d-flex  flex-column align-items-center">
  {{-- <div class="header-fake display-mobile-none"></div> --}}
  <!-- header -->
  @component("components.header")
  @endcomponent
  <div class="head-title container-xxl container-xl container-lg container-sm d-flex align-items-center justify-content-center mt-3 mb-3">
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
    <div class="  col-xxl-8 col-xl-12 col-lg-12">
      <div id="read-mode" class="container-xxl container-xl container-lg box-infor d-flex flex-column gap-4">
        <h2 class="box-infor-title">Your Profile</h2>
        <!-- <div class="row">
          <div class="first-name-and-email col-xxl-6 col-xl-12 d-lg-flex flex-column gap-4 pe-4 padding-right-mobile-12">
            <div class="form-item">
              <label for="custom-first-name" class="form-label">Full name</label>
              <input type="text" class="form-control" id="custom-first-name" value="{{ $user->name }}" required readonly />
            </div>
            <div class="form-item">
              <label for="custom-email" class="form-label">Email address</label>
              <input type="email" class="form-control" id="custom-email" value="{{ $user->email }}" required readonly />
            </div>
          </div>
          <div class="last-name-and-address col-xxl-6 col-xl-12 d-lg-flex flex-column gap-4 ms-auto ps-4 padding-left-mobile-14 ">
            <div class="form-item">
              <label for="custom-first-name" class="form-label">Last name</label>
              <input type="text" class="form-control" id="custom-first-name" value="{{ $user->name }}" required readonly />
            </div>
            <div class="form-item">
              <label for="custom-email" class="form-label">Address</label>
              <input type="text" class="form-control" id="custom-address" value="{{ $user->address }}" required readonly />
            </div>
          </div>
        </div> -->
        <div class="row">
          <div class="form-item">
            <label for="custom-first-name" class="form-label">Full name</label>
            <input type="text" class="form-control" id="custom-first-name" value="{{ $user->name }}" required readonly />
          </div>
        </div>
        <div class="row">
          <div class="form-item">
            <label for="custom-email" class="form-label">Email address</label>
            <input type="email" class="form-control" id="custom-email" value="{{ $user->email }}" required readonly />
          </div>
        </div>
        <div class="row">
          <div class="form-item">
            <label for="custom-email" class="form-label">Address</label>
            <input type="text" class="form-control" id="custom-address" value="{{ $user->address }}" required readonly />
          </div>
        </div>
        <div class="row">
          <div class="form-item">
            <label for="custom-email" class="form-label">Phone number</label>
            <input type="text" class="form-control" id="custom-address" value="{{ $user->phone }}" required readonly />
          </div>
        </div>
        <a id="change-infor" class="mobile-font-size-14 btn btn-danger" href="{{ route('profile.edit', $user->user_id) }}">
          Edit Profile
        </a>
      </div>
      <!-- <div class="row">
          <div class="form-item">
            <label for="custom-password" class="form-label">Password</label>
            <div class="password-line d-flex input-group">
              <input type="password" class="form-control" id="custom-password" value="{{ $user->password }}" />
              <button class="btn btn-outline-secondary" type="button" id="toggle-password">
                <img class="show-password" src="{{asset('img/show-password-icon.svg')}}" alt="" />
                <img class="hide-password" src="{{asset('img/hide-password-icon.svg')}}" alt="" />
              </button>
            </div>
          </div>
        </div> -->
    </div>
  </div>
  </div>

  {{-- <div class="footer-fake mt-5"></div> --}}

  <!-- footer -->
  @component("components.footer")
  @endcomponent
  <script src=" {{ asset('js/myaccount.js') }}"></script>
</body>

</html>