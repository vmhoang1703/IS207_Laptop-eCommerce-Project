<div>
    <!-- Header -->
    <header class="header">
        <div class="container">
            <a style="position: relative;right:10%cm">SUMMER SHOPPING SPREE WITH UP TO 50% </a>
            <a href="" class="shopnow">SHOP NOW</a>
        </div>
    </header>
    <!-- nav -->
    <nav>
        <div class="container">
            <div class="nav-content">
                <div class="header-logo">
                    <div class="nameee">
                        <img src="{{ asset('img/logo.jpg') }}" alt="" class="logo">
                        Computer World - Electronic Components
                    </div>
                </div>
                <ul class="menu">
                    <li>
                        <a href="#" class="menu-link">HOME</a>
                    </li>
                    <li>
                        <a href="#" class="menu-link">STORE</a>
                    </li>
                    <li>
                        <a href="#" class="menu-link">ABOUT US</a>
                    </li>
                    <li>
                        <a href="#" class="menu-link">CONTACT</a>
                    </li>
                    <li class="menu-item">
                        <a href="#" class="menu-link">
                            <div class="input-with-icon">
                                <input style="border-radius: 5px;" type="text" placeholder="What are you looking for?" id="frm">
                                <i class="icon fa fa-search fa-fw " style="margin-top: 8px;"></i>
                            </div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="#" class="menu-link" style="position:relative; right:10px ;"><i class="fa fa-heart-o"></i></a>
                    </li>
                    <li class="menu-item">
                        <a href="#" class="menu-link" style="position:relative; right:10px ;"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart3">
                                <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                            </svg></a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('login.show') }}" class="menu-link" style="margin: auto auto;"> <img src="{{ asset('img/user.png') }}" width="40px" height="40px"></a>
                    </li>
                </ul>
            </div>
        </div>

    </nav>
    <hr style="width: 100%;margin-top: 20px;">
</div>