@extends('layouts.app')
@section('content')
    <section id="hero2" class="d-flex align-items-center">
        <div class="container">
            <h1 id=''>About Us</h1>
            <h3>We engage positive communication of recipients with your brand.</h3>
            <!-- <a href="#about" class="btn-get-started scrollto">Get Started</a> -->
        </div>
    </section>

    <div class="container-fluid py-5  Up">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-7">
                    <div class=" pb-3 mb-3">
                        <h5 class="fw-bold text-primary text-uppercase mb-3">About Us</h5>
                        <h2 class="mb-0">We help your brand to be recognizable.</h2>
                    </div>
                    <p>AdsPayMedia is an online advertising network providing targeted reach and quality inventory. We
                        are committed to improving the user-advertising experience by enforcing high standards for ad
                        and content quality, and working with industry bodies to develop standards and guidelines. We
                        are a team of experienced digital marketers; our exclusive tie-up’s give your business The
                        Digital Edge! We believe in delivering performance, transparently and innovatively.</p>

                </div>
                <div class="col-lg-5" style="min-height: 340px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100 rounded  zoomIn" data--delay="0.9s"
                            src="assets/img/aboutImg.avif" style="object-fit: cover;">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
        <div class="container">

            <div class="section-title">
                <h2>Our Services</h2>
                <p>When Performance matters!!</p>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="icon-box">
                        <div class="icon"><i class="fas fa-mobile"></i> </div>
                        <h4><a href="">Mobile Marketing</a></h4>
                        <p>Mobile Marketing
                            Promotion in terms of content via. SMS, Push Notifications, Banners, App Downloads Or In
                            Game / Video advertisement.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="icon-box">
                        <div class="icon"><i class="fas fa-link"></i></div>
                        <h4><a href="">Affiliate Marketing</a></h4>
                        <p>Specialized in BFSI, Real Estate, E-Commerce, FMCG & Educational campaigns with 500+ Partners
                            across India.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="icon-box">
                        <div class="icon"><i class="fas fa-bullhorn"></i></div>
                        <h4><a href="">Social Media
                                Marketing</a></h4>
                        <p>We are specialized in paid social media. We've honed our expertise to become masters in this
                            dynamic field. </p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="icon-box">
                        <div class="icon"><i class="fas fa-cogs"></i></div>
                        <h4><a href="">Programmatic</a></h4>
                        <p>Real time automated bid helps you to show ad to specific customer in a specific context.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="icon-box">
                        <div class="icon"><i class="fas fa-user"></i></div>
                        <h4><a href="">Influencer Marketing</a></h4>
                        <p>Influencer marketing enables brands to leverage the power of Word of Mouth through social
                            media platforms such as Twitter, Facebook, Youtube, Vine and Instagram etc.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="icon-box">
                        <div class="icon"><i class="fas fa-chart-line"></i></div>
                        <h4><a href="">Performance Marketing</a></h4>
                        <p>Performance-Based marketing is a form of advertising in which the advertiser only pays once
                            qualifying acquisitions have taken place.</p>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Services Section -->

    <!-- ======= Team Section ======= -->
    <section>
        <h2 class="text-center mb-5">Team</h2>
        <div class="container team-container">
            @foreach ($teamList as $team)
                <div class="card" style="width: 17rem;">
                    <img src="{{ asset($team->image ?? null) }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{ $team->name ?? null }}</h5>
                        <p class="card-text">{{ $team->designation ?? null }}</p>
                        @isset($team->facebook)
                            <a href="{{ $team->facebook ?? null }}" class="facebook fs-2"><i class="bx bxl-facebook"></i></a>
                        @endisset
                        @isset($team->instagram)
                            <a href="{{ $team->instagram ?? null }}" class="instagram fs-2"><i class="bx bxl-instagram"></i></a>
                        @endisset
                        @isset($team->linkedin)
                            <a href="{{ $team->linkedin ?? null }}" class="linkedin fs-2"><i class="bx bxl-linkedin"></i></a>
                        @endisset
                    </div>
                </div>
            @endforeach

            <!-- <div class="card" style="width: 17rem;">
                                        <img src="https://www.adspaymedia.com/wp-content/uploads/2022/03/IMG_20220307_133401__01.jpg" class="card-img-top" alt="...">
                                        <div class="card-body">
                                          <h5 class="card-title">Vivek Singh</h5>
                                          <p class="card-text">Operation Executive</p>
                                          <a href="" class="facebook fs-2"><i class="bx bxl-facebook"></i></a>
                                          <a href="" class="instagram fs-2"><i class="bx bxl-instagram"></i></a>
                                          <a href="" class="linkedin fs-2"><i class="bx bxl-linkedin"></i></a>
                                        </div>
                                    </div>  -->
        </div>

    </section>
    <!-- End Team Section -->


    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients">
        <div class="container" data-aos="fade-up">

            <div class="clients-slider swiper">
                <div class="swiper-wrapper align-items-center">
                    <div class="swiper-slide"><img src="assets/img/clients/c1.png" class="img-fluid" alt="">
                    </div>
                    <div class="swiper-slide"><img src="assets/img/clients/c2.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="swiper-slide"><img src="assets/img/clients/c3.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="swiper-slide"><img src="assets/img/clients/c4.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="swiper-slide"><img src="assets/img/clients/c5.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="swiper-slide"><img src="assets/img/clients/c6.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="swiper-slide"><img src="assets/img/clients/c7.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="swiper-slide"><img src="assets/img/clients/c8.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="swiper-slide"><img src="assets/img/clients/c9.png" class="img-fluid" alt="">
                    </div>
                    <div class="swiper-slide"><img src="assets/img/clients/c11.png" class="img-fluid" alt="">
                    </div>
                    <div class="swiper-slide"><img src="assets/img/clients/c12.png" class="img-fluid" alt="">
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>

        </div>
    </section>
    <!-- End Clients Section -->
@endsection
