<head>
    <meta charset="UTF-8" />
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0" /> -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="./style.css" />
    <link rel="stylesheet" href="{{ asset('css/css_components/profile_lag_navbar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/myaccount.css') }}">
    <script src="js/myaccount.js"></script>
    <title>My account</title>
  </head>
<nav class="nav display-mobile-none flex-column">
    <ul class="navbar-nav">
      <h3 class="nav-title">Manage My Account</h3>
      <li class="nav-item">
        <a
          class="nav-link active"
          aria-current="page"
          href="#"
          onclick="activateNavItem(this)"
          >My Profile</a
        >
      </li>
      <h3 class="nav-title">My Orders</h3>
      <li class="nav-item">
        <a class="nav-link" href="#" onclick="activateNavItem(this)"
          >My Order</a
        >
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#" onclick="activateNavItem(this)"
          >My Pre-order</a
        >
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#" onclick="activateNavItem(this)"
          >My Cancellation</a
        >
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#" onclick="activateNavItem(this)"
          >My Order History</a
        >
      </li>
      <button onclick="location.href='/logout'" class="btn-logout nav-title d-flex align-items-center gap-4">
    Log out
    <img src="{{ asset('img/Logout.svg') }}" alt="">
</button>
    </ul>
  </nav>