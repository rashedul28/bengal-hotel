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
    <section class="breadcumb-area bg-img d-flex align-items-center justify-content-center" style="background-image: url(img/bg-img/bg-7.jpg);">
        <div class="bradcumbContent">
            <h2>News</h2>
        </div>
    </section>
    <!-- ##### Breadcumb Area End ##### -->



    <!-- ##### Blog Area Start ##### -->
    <div class="blog-area section-padding-0-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="palatin-blog-posts">

                        <!-- ##### Single Blog Post ##### -->
                        <div class="single-blog-post mb-100 wow fadeInUp" data-wow-delay="100ms">
                            <!-- Post Thumb -->
                            <div class="blog-post-thumb">
                                <img src="img/blog-img/1.jpg" alt="">
                            </div>
                            <!-- Post Content -->
                            <div class="post-content">
                                <!-- Post Date-->
                                <a href="#" class="post-date btn palatin-btn">June 25, 2018</a>
                                <!-- Post Title -->
                                <a href="#" class="post-title">The program for the Summer of 2018</a>
                                <!-- Post Meta -->
                                <div class="post-meta d-flex justify-content-center">
                                    <!-- Catagory -->
                                    <a href="#" class="post-catagory">In Hotel</a>
                                    <!-- Comments -->
                                    <a href="#" class="post-comments">3 comments</a>
                                </div>
                                <!-- Post Excerpt -->
                                <p>Donec malesuada lorem maximus mauris sceleri sque, at rutrum nulla dictum. Ut ac ligula sapien. Suspendisse cursus faucibus finibus. Integer tempus ligula sem, id feugiat quam egestas et. Donec porttitor varius diam in vulputate. Fusce blandit consequat elit non egestas. Donec tortor odio, consectetur eu justo ut, auctor</p>
                            </div>
                        </div>

                        <!-- ##### Single Blog Post ##### -->
                        <div class="single-blog-post mb-100 wow fadeInUp" data-wow-delay="300ms">
                            <!-- Post Thumb -->
                            <div class="blog-post-thumb">
                                <img src="img/blog-img/2.jpg" alt="">
                            </div>
                            <!-- Post Content -->
                            <div class="post-content">
                                <!-- Post Date-->
                                <a href="#" class="post-date btn palatin-btn">June 25, 2018</a>
                                <!-- Post Title -->
                                <a href="#" class="post-title">June opening for our Pool Bar</a>
                                <!-- Post Meta -->
                                <div class="post-meta d-flex justify-content-center">
                                    <!-- Catagory -->
                                    <a href="#" class="post-catagory">In Hotel</a>
                                    <!-- Comments -->
                                    <a href="#" class="post-comments">3 comments</a>
                                </div>
                                <!-- Post Excerpt -->
                                <p>Donec malesuada lorem maximus mauris sceleri sque, at rutrum nulla dictum. Ut ac ligula sapien. Suspendisse cursus faucibus finibus. Integer tempus ligula sem, id feugiat quam egestas et. Donec porttitor varius diam in vulputate. Fusce blandit consequat elit non egestas. Donec tortor odio, consectetur eu justo ut, auctor</p>
                            </div>
                        </div>

                        <!-- ##### Single Blog Post ##### -->
                        <div class="single-blog-post mb-100 wow fadeInUp" data-wow-delay="500ms">
                            <!-- Post Thumb -->
                            <div class="blog-post-thumb">
                                <img src="img/blog-img/3.jpg" alt="">
                            </div>
                            <!-- Post Content -->
                            <div class="post-content">
                                <!-- Post Date-->
                                <a href="#" class="post-date btn palatin-btn">June 25, 2018</a>
                                <!-- Post Title -->
                                <a href="#" class="post-title">3 Tip for the perfect vacation</a>
                                <!-- Post Meta -->
                                <div class="post-meta d-flex justify-content-center">
                                    <!-- Catagory -->
                                    <a href="#" class="post-catagory">In Hotel</a>
                                    <!-- Comments -->
                                    <a href="#" class="post-comments">3 comments</a>
                                </div>
                                <!-- Post Excerpt -->
                                <p>Donec malesuada lorem maximus mauris sceleri sque, at rutrum nulla dictum. Ut ac ligula sapien. Suspendisse cursus faucibus finibus. Integer tempus ligula sem, id feugiat quam egestas et. Donec porttitor varius diam in vulputate. Fusce blandit consequat elit non egestas. Donec tortor odio, consectetur eu justo ut, auctor</p>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-12">
                    <div class="load-more-btn text-center wow fadeInUp" data-wow-delay="700ms">
                        <a href="#" class="btn palatin-btn">Load More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Blog Area End ##### -->

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