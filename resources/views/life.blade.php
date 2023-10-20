@extends('layouts.app')
@section('content')
    <!-- ======= Portfolio Section ======= -->
    <section id="hero2" class="d-flex align-items-center">
        <div class="container">
            <h1 id=''>Life at AdsPayMedia</h1>
            <h3>AdsPayMedia: Where Creativity Meets Innovation.</h3>
            <!-- <a href="#about" class="btn-get-started scrollto">Get Started</a> -->
        </div>
    </section>

    <section>
    <div class="container-fluid py-5  Up">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-7">
                    <div class=" pb-3 mb-3">
                        <h5 class="fw-bold text-primary text-uppercase mb-3">Careers</h5>
                        <h2 class="mb-0">Life at AdsPayMedia</h2>
                    </div>
                    <p>We value diversity at AdsPayMedia and are constantly seeking individuals from diverse backgrounds, with unique talents and fresh perspectives to join our team and enrich our creative and innovative initiatives. Your unique contributions are what make us thrive.That's where you come in – join us in shaping the future of AdsPayMedia!"</p>

                </div>
                <div class="col-lg-5" style="min-height: 340px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100 rounded  zoomIn" data--delay="0.9s"
                            src="assets/img/lifeads.webp" style="object-fit: cover;">
                    </div>
                </div>
            </div>
        </div>
    </div>

    </section>

    <section id="portfolio" class="portfolio"><br><br>
      <div class="container">

        <div class="section-title">
          <h2 data-aos="fade-up">Gallery</h2>
        </div>

        <!-- <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-app">App</li>
              <li data-filter=".filter-card">Card</li>
              <li data-filter=".filter-web">Web</li>
            </ul>
          </div>
        </div> -->

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
@foreach ($getGallery as $galery)


          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <img src="{{asset($galery->image ?? null)}}" class="img-fluid" alt="">
            <!-- <div class="portfolio-info">
              <h4>App 1</h4>
              <p>App</p>
              <a href="1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 1"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div> -->
          </div>

          @endforeach

        </div>

      </div>
    </section><!-- End Portfolio Section -->

@endsection
