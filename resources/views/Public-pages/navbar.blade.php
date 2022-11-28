    <!-- ##### Header Area Start ##### -->
    <header class="header-area">
        <!-- Navbar Area -->
        <div class="palatin-main-menu">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <!-- Menu -->
                    <nav class="classy-navbar justify-content-between" id="palatinNav">

                        <!-- Nav brand -->
                        <a href="{{route('root')}}" class="nav-brand"><img src="img/core-img/logo.png" alt=""></a>

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu">

                            <!-- close btn -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>

                            <!-- Nav Start -->
                            <div class="classynav">
                                <ul>
                                    <li><a href="{{route('root')}}">Home</a></li>
                                    <li><a href="{{route('about')}}">About Us</a></li>
                                    <!-- <li><a href="#">Pages</a>
                                        <ul class="dropdown">
                                            <li><a href="{{route('root')}}">Home</a></li>
                                            <li><a href="{{route('about')}}">About Us</a></li> -->
                                    <li><a href="{{route('services')}}">Services</a></li>
                                    <li><a href="{{route('rooms')}}">Rooms</a></li>
                                    <!-- <li><a href="{{route('blog')}}">News</a></li> -->
                                    <!-- <li><a href="{{route('contact')}}">Contact</a></li> -->
                                    <!-- <li><a href="{{route('elements')}}">Elements</a></li> -->
                                    <!-- </ul> -->
                                    <!-- </li> -->
                                    <!-- <li><a href="#">Mega Menu</a>
                                        <div class="megamenu">
                                            <ul class="single-mega cn-col-4">
                                                <li><a href="{{route('root')}}">Home</a></li>
                                                <li><a href="{{route('about')}}">About Us</a></li>
                                                <li><a href="{{route('services')}}">Services</a></li>
                                                <li><a href="{{route('rooms')}}">Rooms</a></li>
                                                <li><a href="{{route('blog')}}">News</a></li>
                                                <li><a href="{{route('contact')}}">Contact</a></li>
                                                <li><a href="{{route('elements')}}">Elements</a></li>
                                            </ul>
                                            <ul class="single-mega cn-col-4">
                                                <li><a href="{{route('root')}}">Home</a></li>
                                                <li><a href="{{route('about')}}">About Us</a></li>
                                                <li><a href="{{route('services')}}">Services</a></li>
                                                <li><a href="{{route('rooms')}}">Rooms</a></li>
                                                <li><a href="{{route('blog')}}">News</a></li>
                                                <li><a href="{{route('contact')}}">Contact</a></li>
                                                <li><a href="{{route('elements')}}">Elements</a></li>
                                            </ul>
                                            <ul class="single-mega cn-col-4">
                                                <li><a href="{{route('root')}}">Home</a></li>
                                                <li><a href="{{route('about')}}">About Us</a></li>
                                                <li><a href="{{route('services')}}">Services</a></li>
                                                <li><a href="{{route('rooms')}}">Rooms</a></li>
                                                <li><a href="{{route('blog')}}">News</a></li>
                                                <li><a href="{{route('contact')}}">Contact</a></li>
                                                <li><a href="{{route('elements')}}">Elements</a></li>
                                            </ul>
                                            <ul class="single-mega cn-col-4">
                                                <li><a href="{{route('root')}}">Home</a></li>
                                                <li><a href="{{route('about')}}">About Us</a></li>
                                                <li><a href="{{route('services')}}">Services</a></li>
                                                <li><a href="{{route('rooms')}}">Rooms</a></li>
                                                <li><a href="{{route('blog')}}">News</a></li>
                                                <li><a href="{{route('contact')}}">Contact</a></li>
                                                <li><a href="{{route('elements')}}">Elements</a></li>
                                            </ul>
                                        </div>
                                    </li> -->
                                    <!-- <li><a href="{{route('services')}}">Services</a></li> -->
                                    <li><a href="{{route('contact')}}">Contact</a></li>
                                </ul>

                                <!-- Button -->
                                <div class="menu-btn">
                                    <a href="{{route('create')}}" class="btn palatin-btn">Join us</a>
                                </div>
                                <!-- <div class="menu-btn">
                                    <a href="#" class="btn palatin-btn">Manager</a>
                                </div>
                                <div class="menu-btn">
                                    <a href="#" class="btn palatin-btn">Admin</a>
                                </div> -->

                            </div>
                            <!-- Nav End -->
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ##### Header Area End ##### -->

    @yield('content')