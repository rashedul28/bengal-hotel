<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>The Palatin - Hotel &amp; Resort Template</title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Core Stylesheet -->
    <link rel="stylesheet" href=" {{asset('design/styles.css')}}" type="text/css">

</head>

<body>
    @extends('Public-pages/navbar')
    @section('content')
    <!-- Preloader -->
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="cssload-container">
            <div class="cssload-loading"><i></i><i></i><i></i><i></i></div>
        </div>
    </div>


    <!-- ##### Breadcumb Area Start ##### -->
    <section class="breadcumb-area bg-img d-flex align-items-center justify-content-center" style="background-image: url(img/bg-img/bg-5.jpg);">
        <div class="bradcumbContent">
            <h2>Services</h2>
        </div>
    </section>
    <!-- ##### Breadcumb Area End ##### -->



    <!-- ##### Service Intro Area Start ##### -->
    <section class="services-intro">
        <div class="container">
            <div class="row align-items-center">
                <!-- Service Intro Text -->
                <div class="col-12 col-lg-6">
                    <div class="service-intro-text mb-100">
                        <div class="section-heading">
                            <div class="line-"></div>
                            <h2>Amazing Services</h2>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris sceleri sque, at rutrum nulla dictum. Ut ac ligula sapien. Suspendisse cursus faucibus finibus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris sceleri sque, at rutrum nulla dictum. Ut ac ligula sapien. Suspendisse cursus faucibus finibus.</p>
                        <a href="#" class="btn palatin-btn mt-50">Read More</a>
                    </div>
                </div>

                <!-- Services Features -->
                <div class="col-12 col-lg-6">
                    <div class="row mb-100">

                        <!-- Single Cool Facts -->
                        <div class="col-12 col-sm-4">
                            <div class="single-cool-fact">
                                <div class="scf-text">
                                    <i class="icon-cocktail-1"></i>
                                    <p>Pool Beachbar</p>
                                </div>
                            </div>
                        </div>

                        <!-- Single Cool Facts -->
                        <div class="col-12 col-sm-4">
                            <div class="single-cool-fact">
                                <div class="scf-text">
                                    <i class="icon-swimming-pool"></i>
                                    <p>Infinity Pool</p>
                                </div>
                            </div>
                        </div>

                        <!-- Single Cool Facts -->
                        <div class="col-12 col-sm-4">
                            <div class="single-cool-fact">
                                <div class="scf-text">
                                    <i class="icon-beach"></i>
                                    <p>Sunbeds</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Service Intro Area End ##### -->

    <!-- ##### Core Features Start ##### -->
    <section class="core-features-area">
        <div class="container">
            <div class="row justify-content-center">

                <!-- Single Core Feature Area -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-core-feature mb-100">
                        <div class="bg-thumbnail bg-img" style="background-image: url(img/bg-img/12.jpg);"></div>
                        <!-- Content -->
                        <div class="feature-content">
                            <i class="icon-sunset"></i>
                            <h3>Wellness</h3>
                            <p>Malesuada lorem maximus mauris sceleri sque, at rutrum nulla dictum. Ut ac ligula sapien. Suspendisse cursus. faucibus finibus.</p>
                        </div>
                    </div>
                </div>

                <!-- Single Core Feature Area -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-core-feature mb-100">
                        <div class="bg-thumbnail bg-img" style="background-image: url(img/bg-img/13.jpg);"></div>
                        <!-- Content -->
                        <div class="feature-content">
                            <i class="icon-sunset"></i>
                            <h3>Spa Center</h3>
                            <p>Malesuada lorem maximus mauris sceleri sque, at rutrum nulla dictum. Ut ac ligula sapien. Suspendisse cursus. faucibus finibus.</p>
                        </div>
                    </div>
                </div>

                <!-- Single Core Feature Area -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-core-feature mb-100">
                        <div class="bg-thumbnail bg-img" style="background-image: url(img/bg-img/14.jpg);"></div>
                        <!-- Content -->
                        <div class="feature-content">
                            <i class="icon-island"></i>
                            <h3>Lounge Bar</h3>
                            <p>Malesuada lorem maximus mauris sceleri sque, at rutrum nulla dictum. Ut ac ligula sapien. Suspendisse cursus. faucibus finibus.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- ##### Core Features End ##### -->

    <!-- ##### Services Area Start ##### -->
    <section class="services-area">
        <div class="container">
            <div class="row">

                <!-- Single Service Area -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-service-area mb-100 wow fadeInUp" data-wow-delay="100ms">
                        <i class="icon-trekking"></i>
                        <h4>Bike Rentals</h4>
                        <p>Nulla massa dui, posuere non erat in, eleifend mattis dui. Vivamus luctus luctus rhoncus. Donec sagittis nulla id finibus iaculis. Mauris odio tortor.</p>
                    </div>
                </div>

                <!-- Single Service Area -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-service-area mb-100 wow fadeInUp" data-wow-delay="200ms">
                        <i class="icon-boat"></i>
                        <h4>Boat Trips</h4>
                        <p>Nulla massa dui, posuere non erat in, eleifend mattis dui. Vivamus luctus luctus rhoncus. Donec sagittis nulla id finibus iaculis. Mauris odio tortor.</p>
                    </div>
                </div>

                <!-- Single Service Area -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-service-area mb-100 wow fadeInUp" data-wow-delay="300ms">
                        <i class="icon-restaurant"></i>
                        <h4>Restaurants</h4>
                        <p>Nulla massa dui, posuere non erat in, eleifend mattis dui. Vivamus luctus luctus rhoncus. Donec sagittis nulla id finibus iaculis. Mauris odio tortor.</p>
                    </div>
                </div>

                <!-- Single Service Area -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-service-area mb-100 wow fadeInUp" data-wow-delay="400ms">
                        <i class="icon-beach"></i>
                        <h4>Massages</h4>
                        <p>Nulla massa dui, posuere non erat in, eleifend mattis dui. Vivamus luctus luctus rhoncus. Donec sagittis nulla id finibus iaculis. Mauris odio tortor.</p>
                    </div>
                </div>

                <!-- Single Service Area -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-service-area mb-100 wow fadeInUp" data-wow-delay="500ms">
                        <i class="icon-boarding-pass"></i>
                        <h4>Event Tikets</h4>
                        <p>Nulla massa dui, posuere non erat in, eleifend mattis dui. Vivamus luctus luctus rhoncus. Donec sagittis nulla id finibus iaculis. Mauris odio tortor.</p>
                    </div>
                </div>

                <!-- Single Service Area -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-service-area mb-100 wow fadeInUp" data-wow-delay="600ms">
                        <i class="icon-sign"></i>
                        <h4>Hiking</h4>
                        <p>Nulla massa dui, posuere non erat in, eleifend mattis dui. Vivamus luctus luctus rhoncus. Donec sagittis nulla id finibus iaculis. Mauris odio tortor.</p>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- ##### Services Area End ##### -->

    <!-- ##### Footer Area Start ##### -->
    <footer class="footer-area">
        <div class="container">
            <div class="row">

                <!-- Footer Widget Area -->
                <div class="col-12 col-lg-5">
                    <div class="footer-widget-area mt-50">
                        <a href="#" class="d-block mb-5"><img src="img/core-img/logo.png" alt=""></a>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris sceleri sque, at rutrum nulla dictum. Ut ac ligula sapien. Suspendisse cursus faucibus finibus. </p>
                    </div>
                </div>

                <!-- Footer Widget Area -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="footer-widget-area mt-50">
                        <h6 class="widget-title mb-5">Find us on the map</h6>
                        <img src="img/bg-img/footer-map.png" alt="">
                    </div>
                </div>

                <!-- Footer Widget Area -->
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="footer-widget-area mt-50">
                        <h6 class="widget-title mb-5">Subscribe to our newsletter</h6>
                        <form action="#" method="post" class="subscribe-form">
                            <input type="email" name="subscribe-email" id="subscribeemail" placeholder="Your E-mail">
                            <button type="submit">Subscribe</button>
                        </form>
                    </div>
                </div>

                <!-- Copywrite Text -->
                <div class="col-12">
                    <div class="copywrite-text mt-30">
                        <p><a href="#">
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                Copyright &copy;<script>
                                    document.write(new Date().getFullYear());
                                </script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ##### Footer Area End ##### -->

    <!-- ##### All Javascript Script ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="js/plugins/plugins.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>
    @endsection
</body>

</html>