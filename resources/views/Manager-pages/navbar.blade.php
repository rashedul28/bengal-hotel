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
                <a class="pure-menu-heading" href="#">Manager</a>

                <ul class="pure-menu-list">
                    <li>
                        <a href="#" class="pure-menu-link">
                            Add room
                        </a>
                    </li>
                    <li>
                        <a href="#" class="pure-menu-link">
                            View room
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
            @yield('content')
        </div>
    </div>
</body>

</html>