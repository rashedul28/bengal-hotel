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
                <a class="pure-menu-heading" href="#">Admin</a>

                <ul class="pure-menu-list">
                    <li>
                        <a href="{{route('admin-addroom')}}" class="pure-menu-link">
                            Add room
                        </a>
                    </li>
                    <li>
                        <a href="{{route('admin-viewroom')}}" class="pure-menu-link">
                            View room
                        </a>
                    </li>
                    <li>
                        <a href="{{route('booked-rooms')}}" class="pure-menu-link">
                            Booked Room
                        </a>
                    </li>
                    <li>
                        <a href="{{route('free-rooms')}}" class="pure-menu-link">
                            Free Room
                        </a>
                    </li>
                    <li>
                        <a href="#" class="pure-menu-link">
                            Contact
                        </a>
                    </li>
                    <li>
                        <a href="{{route('logout')}}" class="pure-menu-link">
                            Log out
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <div id="main">
            @include('flash-message')
            @yield('content')
        </div>
    </div>
</body>

</html>