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
    <!-- <link rel="stylesheet" href="style.css"> -->
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
    <section class="breadcumb-area bg-img d-flex align-items-center justify-content-center" style="background-image: url(img/bg-img/bg-2.jpg);">
        <div class="bradcumbContent">
            <h2>About us</h2>
        </div>
    </section>
    <!-- ##### Breadcumb Area End ##### -->

    <!-- ##### About Us Area Start ##### -->
    <section class="about-us-area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-lg-6">
                    <div class="about-text mb-100">
                        <div class="section-heading">
                            <div class="line-"></div>
                            <h2>A place to remember</h2>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris sceleri sque, at rutrum nulla dictum. Ut ac ligula sapien. Suspendisse cursus faucibus finibus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris sceleri sque, at rutrum nulla dictum. Ut ac ligula sapien. Suspendisse cursus faucibus finibus.</p>
                        <a href="#" class="btn palatin-btn mt-50">Read More</a>
                    </div>
                </div>

                <div class="col-12 col-lg-6">
                    <div class="about-thumbnail mb-100">
                        <img src="img/bg-img/2.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### About Us Area End ##### -->

    <!-- ##### Milestones Area Start ##### -->
    <section class="our-milestones section-padding-100-0 bg-img bg-overlay bg-fixed" style="background-image: url(img/bg-img/bg-4.jpg);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-8">
                    <div class="section-heading text-center white">
                        <div class="line-"></div>
                        <h2>Our Milestones</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris sceleri sque, at rutrum nulla dictum. Ut ac ligula sapien. Suspendisse cursus faucibus finibus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris sceleri sque, at rutrum nulla dictum.</p>
                    </div>
                </div>
            </div>

            <div class="row">

                <!-- Single Cool Facts -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-cool-fact mb-100 wow fadeInUp" data-wow-delay="300ms">
                        <div class="scf-text">
                            <i class="icon-cocktail-1"></i>
                            <h2><span class="counter">231</span></h2>
                            <p>Cocktails/day</p>
                        </div>
                    </div>
                </div>

                <!-- Single Cool Facts -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-cool-fact mb-100 wow fadeInUp" data-wow-delay="500ms">
                        <div class="scf-text">
                            <i class="icon-swimming-pool"></i>
                            <h2><span class="counter">3</span></h2>
                            <p>Pools</p>
                        </div>
                    </div>
                </div>

                <!-- Single Cool Facts -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-cool-fact mb-100 wow fadeInUp" data-wow-delay="700ms">
                        <div class="scf-text">
                            <i class="icon-resort"></i>
                            <h2><span class="counter">79</span></h2>
                            <p>Rooms</p>
                        </div>
                    </div>
                </div>

                <!-- Single Cool Facts -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-cool-fact mb-100 wow fadeInUp" data-wow-delay="900ms">
                        <div class="scf-text">
                            <i class="icon-restaurant"></i>
                            <h2><span class="counter">25</span></h2>
                            <p>Apartments</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- ##### Milestones Area End ##### -->

    <!-- ##### Hotels Area Start ##### -->
    <section class="our-hotels-area section-padding-100-0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center">
                        <div class="line-"></div>
                        <h2>Our Hotel</h2>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
                <!-- Single Hotel Info -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-hotel-info mb-100">
                        <div class="hotel-info-text">
                            <h6><span class="fa fa-check"></span> Donec malesuada lorem maximus mauris</h6>
                            <h6><span class="fa fa-check"></span> Integer tempus ligula sem, id feugiat</h6>
                            <h6><span class="fa fa-check"></span> Malesuada lorem maximus mauris sceleri </h6>
                        </div>
                        <div class="hotel-img">
                            <img src="img/bg-img/3.jpg" alt="">
                        </div>
                    </div>
                </div>
                <!-- Single Hotel Info -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-hotel-info mb-100">
                        <div class="hotel-info-text">
                            <h6><span class="fa fa-check"></span> Tempus ligula sem, id feugiat quam</h6>
                            <h6><span class="fa fa-check"></span> Integer tempus ligula sem, id feugiat</h6>
                            <h6><span class="fa fa-check"></span> Esuada lorem maximus mauris sceleri</h6>
                        </div>
                        <div class="hotel-img">
                            <img src="img/bg-img/10.jpg" alt="">
                        </div>
                    </div>
                </div>
                <!-- Single Hotel Info -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-hotel-info mb-100">
                        <div class="hotel-info-text">
                            <h6><span class="fa fa-check"></span> Tempus ligula sem, id feugiat quam</h6>
                            <h6><span class="fa fa-check"></span> Integer tempus ligula sem, id feugiat</h6>
                            <h6><span class="fa fa-check"></span> Esuada lorem maximus mauris sceleri</h6>
                        </div>
                        <div class="hotel-img">
                            <img src="img/bg-img/11.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Hotels Area End ##### -->

    <!-- ##### Testimonial Area Start ##### -->
    <section class="testimonial-area section-padding-100 bg-img" style="background-image: url(img/core-img/pattern.png);">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="testimonial-content">
                        <div class="section-heading text-center">
                            <div class="line-"></div>
                            <h2>What Clients Say</h2>
                        </div>

                        <!-- Testimonial Slides -->
                        <div class="testimonial-slides owl-carousel">

                            <!-- Single Testimonial -->
                            <div class="single-testimonial">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris sceleri sque, at rutrum nulla dictum. Ut ac ligula sapien. Suspendisse cursus faucibus finibus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris sceleri sque, at rutrum nulla dictum. Ut ac ligula sapien. Suspendisse cursus faucibus finibus.</p>
                                <h6>Michael Smith, <span>Client</span></h6>
                                <img src="img/core-img/trip.png" alt="">
                            </div>

                            <!-- Single Testimonial -->
                            <div class="single-testimonial">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris sceleri sque, at rutrum nulla dictum. Ut ac ligula sapien. Suspendisse cursus faucibus finibus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris sceleri sque, at rutrum nulla dictum. Ut ac ligula sapien. Suspendisse cursus faucibus finibus.</p>
                                <h6>Nazrul Islam, <span>Developer</span></h6>
                                <img src="img/core-img/trip.png" alt="">
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Testimonial Area End ##### -->

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