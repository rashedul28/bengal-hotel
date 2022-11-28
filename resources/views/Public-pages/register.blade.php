<html>

<head>
    <link rel="stylesheet" href=" {{asset('design/styles.css')}}" type="text/css">
</head>

<body>
    <form action="#" method="post">
        @csrf
        <div class="single-hero-slide d-flex align-items-center justify-content-center">
            <!-- Slide Img -->
            <div class="slide-img bg-img" style="background-image: url(img/bg-img/bg-3.jpg);"></div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-9">
                        <!-- Slide Content -->
                        <div class="hero-slides-content" data-animation="fadeInUp" data-delay="100ms">
                            <div class="line" data-animation="fadeInUp" data-delay="300ms"></div>
                            <h2 data-animation="fadeInUp" data-delay="500ms">Join us</h2>
                            <!-- <p data-animation="fadeInUp" data-delay="700ms">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris sceleri sque, at rutrum nulla dictum. Ut ac ligula sapien. Suspendisse cursus faucibus finibus.</p> -->

                            <div class="row">
                                <div class="col-12">
                                    <!-- Contact Form -->

                                    <div class="row">
                                        <div class="col-lg-3">
                                            <input type="text" class="form-control" name="name" placeholder="Name" required>

                                        </div>
                                        <div class="col-lg-3">
                                            <input type="email" class="form-control" name="email" placeholder="E-mail" required>

                                        </div>
                                        <div class="col-lg-3">
                                            <input type="password" class="form-control" name="password" placeholder="Password" required>

                                        </div>
                                        <div class="col-lg-3">
                                            <input type="text" class="form-control" name="role" placeholder="Admin/Guest/Manager" required>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <input type="submit" class="btn palatin-btn mt-50" data-animation="fadeInUp" data-delay="900ms" name="submit" value="Sbmit">
                            <br><a class="text-primary" href="{{route('set')}}">Alredy have account</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>

</body>

</html>