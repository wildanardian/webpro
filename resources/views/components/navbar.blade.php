<header id="header">
    <nav>
        <h1 class="ms-4 fs-2 fw-bold"><a href="{{ url('/') }}" class="text-decoration-none text-dark">ReBook.</a></h1>
        <ul>
            <li><a href="{{ url('/') }}" class="text-dark text-decoration-none">Home</a></li>
            <li><a href="{{ route('booking') }}" class="text-dark text-decoration-none">MyBookings</a></li>
        </ul>

        @guest
            @if (Route::has('login'))
                <a href="{{ route('login.form') }}" class="btn btn-outline-primary me-4">Login</a>
            @endif
        @else
            <div class="sub-menu-wrap shadow-lg" id="subMenu">
                <div class="sub-menu bg-white" style="padding: 20px;">
                    <div class="user-info d-flex align-items-center">
                        @if (Auth::user()->avatar == null)
                            <img src="{{ asset('image/user.png') }}" alt="" srcset="" style="width: 60px; margin-right: 10px; border-radius: 50%;">
                        @else
                            <img src="{{ Auth::user()->avatar }}" alt="" srcset="" style="width: 60px; margin-right: 10px; border-radius: 50%;">
                        @endif
                        <h3 style="padding-top: 15px;">{{ Auth::user()->username }}</h3>
                    </div>
                    <hr class="w-100" style="background-color: gray;">

                    <a href="profil.html" class="sub-menu-link">
                        @if (Auth::user()->avatar == null)
                            <img src="{{ asset('image/user.png') }}" alt="" style="width: 35px;">
                        @else
                            <img src="{{ Auth::user()->avatar }}" alt="" style="width: 35px;">
                        @endif
                        <p>Edit Profile</p>
                        <span>></span>
                    </a>
                    <a href="{{ route('restaurant') }}" class="sub-menu-link">
                        <img src="{{ asset('image/home.svg') }}" alt="">
                        <p>My Restaurant</p>
                        <span>></span>
                    </a>
                    <a href="{{ route('logout') }}" class="sub-menu-link">
                        <img src="{{ asset('image/logout.svg') }}" alt="">
                        <p>Logout</p>
                        <span class="mt-1">></span>
                    </a>
                </div>
            </div>

        @endguest

    </nav>
    <hr class="mt-0" style="padding: 1px; background-color: grey;">
</header>
