<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0" /> -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="{{ asset('css/myaccount.css') }}">

  <title>E-lec World</title>
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
  @component("components.profile_my-account_mobile_navbar")
  @endcomponent
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