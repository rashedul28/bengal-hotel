<!doctype html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://purecss.io/css/pure/pure-min.css">
    <link rel="stylesheet" href="https://purecss.io/layouts/side-menu/styles.css">
    <script src="https://purecss.io/js/ui.js"></script>
</head>

<body>
    <div id="layout">
        <a href="#menu" id="menuLink" class="menu-link">
            <!-- Hamburger icon -->
            <span></span>
        </a>

        <div id="menu">
            <div class="pure-menu">
                <a class="pure-menu-heading" href="{{route('guest-dashboard')}}">Guest</a>

                <ul class="pure-menu-list">
                    <li>
                        <a href="#" class="pure-menu-link">
                            About Us
                        </a>
                    </li>
                    <li>
                        <a href="{{route('profile-view')}}" class="pure-menu-link">
                            Profile
                        </a>
                    </li>
                    <li>
                        <a href="{{route('guest-viewroom')}}" class="pure-menu-link">
                            Rooms
                        </a>
                    </li>
                    <li>
                        <a href="#" class="pure-menu-link">
                            Booking
                        </a>
                    </li>
                    <li>
                        <a href="#" class="pure-menu-link">
                            Contact Us
                        </a>
                    </li>
                    <li>
                        <a href="{{route('logout')}}" class="pure-menu-link">
                            Logout
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <div id="main">
            @yield('content')
        </div>
    </div>
</body>

</html>