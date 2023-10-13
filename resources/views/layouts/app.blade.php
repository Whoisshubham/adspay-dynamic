<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Services</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
        <div class="container d-flex align-items-center">

            <h1 class="logo me-auto"><a href="{{url('/')}}"><img id="logoImg" src="assets/img/logo.png"
                        alt=""></a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="{{url('/')}}" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

            <nav id="navbar" class="navbar order-last order-lg-0">
                <ul>
                    <li><a class="nav-link scrollto " href="{{url('/')}}">Home</a></li>
                    <li><a class="nav-link scrollto " href="{{url('about')}}">About</a></li>
                    <li><a class="nav-link scrollto active" href="{{url('service')}}">Services</a></li>
                    <!-- <li><a class="nav-link scrollto" href="">Our Team</a></li> -->
                    <li><a class="nav-link scrollto" href="">Advertisers</a></li>
                    <li><a class="nav-link scrollto" href="">Publishers</a></li>
                    <li><a class="nav-link scrollto " href="{{url('contact')}}">Contact</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

            <!-- <a href="#appointment" class="appointment-btn bg-success scrollto"><i class="fa-brands mx-1 fa-whatsapp"></i>Whatsapp</a> -->

        </div>
    </header><!-- End Header -->
    @yield('content');

    <!-- ======= Footer ======= -->
    <footer id="footer">

        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-md-6 footer-contact">
                        <img src="{{ asset('/') }}assets/img/logo.png" style="width: 60%;" alt="">
                        <p>


                        </p>
                    </div>

                    <div class="col-lg-2 col-md-6 footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="{{url('/')}}">Home</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="{{url('about')}}">About us</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="{{url('service')}}">Services</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="{{url('term&service')}}">Terms of service</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="{{url('policy')}}">Privacy policy</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Our Services</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Mobile Marketing</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Affiliate Marketing</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Social Media Marketing</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Influencer Marketing</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Performance</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-4 col-md-6 footer-newsletter">
                        <h4>Address</h4>
                        <a href="https://www.google.com/maps/@28.4959722,77.4019162,16z?entry=ttu" target="_blank">
                            806, 8th Floor, Tower 4, Assotech<br>
                            Business Cresterra<br>
                            Sector 135, Noida 201305<br>
                            Uttar Pradesh,India
                        </a><br><br>
                        <strong>Phone:</strong><a href="tel:+919810091485" target="_blank">+91-9810091485</a><br>
                        <strong>Email:</strong><a href="mailto:team@adspaymedia.com"
                            target="_blank">team@adspaymedia.com</a><br>
                    </div>

                </div>
            </div>
        </div>

        <div class="container d-md-flex py-4">

            <div class="me-md-auto text-center text-md-start">
                <div class="copyright">
                    &copy; Copyright <strong><span>adspaymedia</span></strong>. All Rights Reserved
                </div>
                <!-- <div class="credits">
          Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div> -->
            </div>
            <div class="social-links text-center text-md-right pt-3 pt-md-0">
                <a href="https://twitter.com/adspaymedia" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="https://www.facebook.com/AdsPayMedia" class="facebook"><i class="bx bxl-facebook"></i></a>
                <!-- <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a> -->
                <!-- <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a> -->
                <a href="https://www.linkedin.com/company/adspaymedia" class="linkedin"><i
                        class="bx bxl-linkedin"></i></a>
            </div>
        </div>
    </footer><!-- End Footer -->

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('/') }}assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="{{ asset('/') }}assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('/') }}assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="{{ asset('/') }}assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="{{ asset('/') }}assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('/') }}assets/js/main.js"></script>

</body>

</html>
</body>

</html>
