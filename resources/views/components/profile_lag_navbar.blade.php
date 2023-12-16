<head>
  <meta charset="UTF-8" />
  <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0" /> -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="./style.css" />
  <link rel="stylesheet" href="{{ asset('css/css_components/profile_lag_navbar.css') }}">
  <link rel="stylesheet" href="{{ asset('css/myaccount.css') }}">
  <script src="js/myaccount.js"></script>
  <title>My account</title>
</head>

<body>
  <nav class="nav display-mobile-none flex-column">
    <ul class="navbar-nav">
      <h3 class="nav-title">Manage My Account</h3>
      <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="#" onclick="activateNavItem(this)">My Profile</a>
      </li>
      <h3 class="nav-title">My Orders</h3>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('myorder.show') }}" onclick="activateNavItem(this)">My Order</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#" onclick="activateNavItem(this)">My Pre-order</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#" onclick="activateNavItem(this)">My Cancellation</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#" onclick="activateNavItem(this)">My Order History</a>
      </li>
      <button data-toggle="modal" data-target="#logoutModal" class="btn-logout nav-title d-flex align-items-center gap-4">
        Log out
        <img src="{{ asset('img/Logout.svg') }}" alt="">
      </button>
    </ul>
  </nav>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">x</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="{{ route('logout') }}">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <!-- Core plugin JavaScript-->
  <script src="{{ asset('vendor/jquery-easing/jquery.easing.min.js') }}"></script>

  <!-- Custom scripts for all pages-->
  <script src="{{ asset('js/sb-admin-2.min.js') }}"></script>

  <!-- Page level plugins -->
  <script src="{{ asset('vendor/chart.js/Chart.min.js') }}"></script>

  <!-- Page level plugins -->
  <script src="{{ asset('vendor/datatables/jquery.dataTables.min.js') }}"></script>
  <script src="{{ asset('vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>
</body>