@extends('layouts.app')
@section('content')
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">
        <div class="container">
            <h1>Welcome to <span style="color: yellow;">AdsPay Media</span></h1>
            <h2>Our presence is dedicated to providing you with the finest.</h2>
            <a href="#about" class="btn-get-started scrollto">Get Started</a>
        </div>
    </section><!-- End Hero -->

    <main id="main" class="">

        <!-- ======= Why Us Section ======= -->
        <section id="why-us" class="why-us">
            <div class="container">

                <div class="row">
                    <div class="col-lg-4 d-flex align-items-stretch">
                        <div class="content">
                            <h3>Why Choose AdsPayMedia?</h3>
                            <p>
                                AdsPayMedia offers targeted reach and quality inventory in online advertising.We go beyond
                                targeted reach and quality inventory to deliver comprehensive advertising solutions tailored
                                to your unique needs.
                            </p>
                            <div class="text-center">
                                <a href="about.html" class="more-btn">Learn More <i class="bx bx-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 d-flex align-items-stretch">
                        <div class="icon-boxes d-flex flex-column justify-content-center">
                            <div class="row">
                                <div class="col-xl-4 d-flex align-items-stretch">
                                    <div class="icon-box mt-4 mt-xl-0">
                                        <i class="fas fa-check-circle"></i>
                                        <h4>Effective Advertising Solutions</h4>
                                        <p>We deliver results-driven online advertising campaigns that maximize your ROI.
                                        </p>
                                    </div>
                                </div>
                                <div class="col-xl-4 d-flex align-items-stretch">
                                    <div class="icon-box mt-4 mt-xl-0">
                                        <i class="fas fa-cogs"></i>
                                        <h4>Cutting-Edge Technology</h4>
                                        <p>Our platform leverages the latest technology to reach and engage your target
                                            audience effectively.</p>
                                    </div>
                                </div>
                                <div class="col-xl-4 d-flex align-items-stretch">
                                    <div class="icon-box mt-4 mt-xl-0">
                                        <i class="fas fa-users"></i>
                                        <h4>Experienced Team</h4>
                                        <p>Our experts have years of experience in the advertising industry to help you
                                            achieve your goals.

                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!-- End Why Us Section -->

        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container-fluid">

                <div class="row">
                    <div
                        class="col-xl-5 col-lg- video-box d-flex justify-content-center align-items-stretch position-relative">
                        <!-- <img src="{{ asset('/') }}https://wisar.pro/wp-content/uploads/2018/12/AdobeStock_125329788-1080x675.jpeg" alt=""> -->
                    </div>

                    <div
                        class="col-xl-7 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5">
                        <h4 data-aos="fade-up">About us</h4>
                        <h3>We engage positive communication of recipients with your brand.</h3>
                        <p>AdsPayMedia is an online advertising network providing targeted reach and quality inventory. We
                            are a team of experienced digital marketers; our exclusive tie-up’s give your business The
                            Digital Edge! We believe in delivering performance, transparently and innovatively.</p>

                        <div class="icon-box">
                            <div class="icon"><i class="fas fa-lightbulb"></i></div>
                            <h4 class="title"><a href="">Expertise in Specialized Advertising:</a></h4>
                            <p class="description">Our agency is dedicated to mastering the art of specialized advertising.
                            </p>
                        </div>

                        <div class="icon-box">
                            <div class="icon"><i class="fas fa-line-chart"></i></div>
                            <h4 class="title"><a href="">Proven Results and Case Studies:</a></h4>
                            <p class="description"> We believe in showcasing our success through concrete evidence. Explore
                                our collection of case studies, where we delve into the details of real-world campaigns that
                                have delivered exceptional results.</p>
                        </div>

                        <div class="icon-box">
                            <div class="icon"><i class="fas fa-lightbulb"></i></div>
                            <h4 class="title"><a href="">Innovative Advertising Solutions:</a></h4>
                            <p class="description">We pride ourselves on pioneering creative and forward-thinking
                                advertising solutions. Our team of imaginative strategists continually explores cutting-edge
                                trends, emerging technologies, and inventive approaches to deliver campaigns that break
                                through the noise.</p>
                        </div>

                    </div>
                </div>

            </div>
        </section><!-- End About Section -->

        <!-- ======= Clients Section ======= -->
        <section id="clients" class="clients">
            <h2 class="text-center mb-5 py-3">Our Clients</h2>
            <div class="container" data-aos="fade-up">

                <div class="clients-slider swiper">
                    <div class="swiper-wrapper align-items-center">
                        <div class="swiper-slide"><img src="{{ asset('/') }}assets/img/clients/c1.png" class="img-fluid"
                                alt=""></div>
                        <div class="swiper-slide"><img src="{{ asset('/') }}assets/img/clients/c2.jpg" class="img-fluid"
                                alt=""></div>
                        <div class="swiper-slide"><img src="{{ asset('/') }}assets/img/clients/c3.jpg" class="img-fluid"
                                alt=""></div>
                        <div class="swiper-slide"><img src="{{ asset('/') }}assets/img/clients/c4.jpg" class="img-fluid"
                                alt=""></div>
                        <div class="swiper-slide"><img src="{{ asset('/') }}assets/img/clients/c5.jpg" class="img-fluid"
                                alt=""></div>
                        <div class="swiper-slide"><img src="{{ asset('/') }}assets/img/clients/c6.jpg" class="img-fluid"
                                alt=""></div>
                        <div class="swiper-slide"><img src="{{ asset('/') }}assets/img/clients/c7.jpg" class="img-fluid"
                                alt=""></div>
                        <div class="swiper-slide"><img src="{{ asset('/') }}assets/img/clients/c8.jpg" class="img-fluid"
                                alt=""></div>
                        <div class="swiper-slide"><img src="{{ asset('/') }}assets/img/clients/c9.png" class="img-fluid"
                                alt=""></div>
                        <div class="swiper-slide"><img src="{{ asset('/') }}assets/img/clients/c11.png"
                                class="img-fluid" alt=""></div>
                        <div class="swiper-slide"><img src="{{ asset('/') }}assets/img/clients/c12.png"
                                class="img-fluid" alt=""></div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>

            </div>
        </section><!-- End Clients Section -->

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

        <!-- ======= Testimonials Section ======= -->
        <section id="testimonials" class="testimonials">
            <div class="container">

                <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
                    <div class="swiper-wrapper">
                        @foreach ($testmonialList as $testimonial)
                            <div class="swiper-slide">
                                <div class="testimonial-wrap">
                                    <div class="testimonial-item">
                                        <img src="{{ asset($testimonial->image) }}"
                                            class="testimonial-img" alt="">
                                        <h3>{{$testimonial->name ?? null}}</h3>
                                        <h4>{{$testimonial->designation ?? null}}</h4>
                                        <p>
                                            <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                            {{$testimonial->comments ?? null}}
                                            <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="swiper-pagination"></div>
                </div>

            </div>
        </section><!-- End Testimonials Section -->

    </main><!-- End #main -->
@endsection
