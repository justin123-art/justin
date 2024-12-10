<?php
include 'nav/header.php';
?>

<!-- Clients Section -->
<section id="clients" class="clients section">
  <div class="container" data-aos="fade-up" data-aos-delay="100">
    <div class="swiper init-swiper">
      <script type="application/json" class="swiper-config">
        {
          "loop": true,
          "speed": 600,
          "autoplay": {
            "delay": 5000
          },
          "slidesPerView": "auto",
          "pagination": {
            "el": ".swiper-pagination",
            "type": "bullets",
            "clickable": true
          },
          "breakpoints": {
            "320": {
              "slidesPerView": 2,
              "spaceBetween": 40
            },
            "480": {
              "slidesPerView": 3,
              "spaceBetween": 60
            },
            "640": {
              "slidesPerView": 4,
              "spaceBetween": 80
            },
            "992": {
              "slidesPerView": 6,
              "spaceBetween": 120
            }
          }
        }
      </script>
      <div class="swiper-wrapper align-items-center">
        <div class="swiper-slide"><img src="../assets/img/clients/client-1.png" class="img-fluid" alt=""></div>
        <div class="swiper-slide"><img src="../assets/img/clients/client-2.png" class="img-fluid" alt=""></div>
        <div class="swiper-slide"><img src="../assets/img/clients/client-3.png" class="img-fluid" alt=""></div>
        <div class="swiper-slide"><img src="../assets/img/clients/client-4.png" class="img-fluid" alt=""></div>
        <div class="swiper-slide"><img src="../assets/img/clients/client-5.png" class="img-fluid" alt=""></div>
        <div class="swiper-slide"><img src="../assets/img/clients/client-6.png" class="img-fluid" alt=""></div>
        <div class="swiper-slide"><img src="../assets/img/clients/client-7.png" class="img-fluid" alt=""></div>
        <div class="swiper-slide"><img src="../assets/img/clients/client-8.png" class="img-fluid" alt=""></div>
      </div>
      <div class="swiper-pagination"></div>
    </div>
  </div>
</section><!-- /Clients Section -->

<!-- Features Section -->
<section id="features" class="features section">
  <div class="container">
    <div class="row gy-4">
      <div class="features-image col-lg-6" data-aos="fade-up" data-aos-delay="100">
        <img src="../assets/img/features-bg.jpg" alt="">
      </div>
      <div class="col-lg-6">
        <div class="features-item d-flex ps-0 ps-lg-3 pt-4 pt-lg-0" data-aos="fade-up" data-aos-delay="200">
          <i class="bi bi-archive flex-shrink-0"></i>
          <div>
            <h4>Est labore ad</h4>
            <p>Consequuntur sunt aut quasi enim aliquam quae harum pariatur laboris nisi ut aliquip</p>
          </div>
        </div><!-- End Features Item-->

        <div class="features-item d-flex mt-5 ps-0 ps-lg-3" data-aos="fade-up" data-aos-delay="300">
          <i class="bi bi-basket flex-shrink-0"></i>
          <div>
            <h4>Harum esse qui</h4>
            <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt</p>
          </div>
        </div><!-- End Features Item-->

        <div class="features-item d-flex mt-5 ps-0 ps-lg-3" data-aos="fade-up" data-aos-delay="400">
          <i class="bi bi-broadcast flex-shrink-0"></i>
          <div>
            <h4>Aut occaecati</h4>
            <p>Aut suscipit aut cum nemo deleniti aut omnis. Doloribus ut maiores omnis facere</p>
          </div>
        </div><!-- End Features Item-->

        <div class="features-item d-flex mt-5 ps-0 ps-lg-3" data-aos="fade-up" data-aos-delay="500">
          <i class="bi bi-camera-reels flex-shrink-0"></i>
          <div>
            <h4>Beatae veritatis</h4>
            <p>Expedita veritatis consequuntur nihil tempore laudantium vitae denat pacta</p>
          </div>
        </div><!-- End Features Item-->
      </div>
    </div>
  </div>
</section><!-- /Features Section -->

<!-- Services Section -->
<section id="services" class="services section">
  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>Services</h2>
    <p>Check our Services</p>
  </div><!-- End Section Title -->

  <div class="container">
    <div class="row gy-4">
      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
        <div class="service-item position-relative">
          <div class="icon">
            <i class="bi bi-activity"></i>
          </div>
          <a href="service-details.html" class="stretched-link">
            <h3>Nesciunt Mete</h3>
          </a>
          <p>Provident nihil minus qui consequatur non omnis maiores. Eos accusantium minus dolores iure perferendis tempore et consequatur.</p>
        </div>
      </div><!-- End Service Item -->

      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
        <div class="service-item position-relative">
          <div class="icon">
            <i class="bi bi-broadcast"></i>
          </div>
          <a href="service-details.html" class="stretched-link">
            <h3>Eosle Commodi</h3>
          </a>
          <p>Ut autem aut autem non a. Sint sint sit facilis nam iusto sint. Libero corrupti neque eum hic non ut nesciunt dolorem.</p>
        </div>
      </div><!-- End Service Item -->

      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
        <div class="service-item position-relative">
          <div class="icon">
            <i class="bi bi-easel"></i>
          </div>
          <a href="service-details.html" class="stretched-link">
            <h3>Ledo Markt</h3>
          </a>
          <p>Ut excepturi voluptatem nisi sed. Quidem fuga consequatur. Minus ea aut. Vel qui id voluptas adipisci eos earum corrupti.</p>
        </div>
      </div><!-- End Service Item -->

      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
        <div class="service-item position-relative">
          <div class="icon">
            <i class="bi bi-bounding-box-circles"></i>
          </div>
          <a href="service-details.html" class="stretched-link">
            <h3>Asperiores Commodit</h3>
          </a>
          <p>Non et temporibus minus omnis sed dolor esse consequatur. Cupiditate sed error ea fuga sit provident adipisci neque.</p>
          <a href="service-details.html" class="stretched-link"></a>
        </div>
      </div><!-- End Service Item -->

      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
        <div class="service-item position-relative">
          <div class="icon">
            <i class="bi bi-calendar4-week"></i>
          </div>
          <a href="service-details.html" class="stretched-link">
            <h3>Velit Doloremque</h3>
          </a>
          <p>Cumque et suscipit saepe. Est maiores autem enim facilis ut aut ipsam corporis aut. Sed animi at autem alias eius labore.</p>
          <a href="service-details.html" class="stretched-link"></a>
        </div>
      </div><!-- End Service Item -->

      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
        <div class="service-item position-relative">
          <div class="icon">
            <i class="bi bi-chat-square-text"></i>
          </div>
          <a href="service-details.html" class="stretched-link">
            <h3>Dolori Architecto</h3>
          </a>
          <p>Hic molestias ea quibusdam eos. Fugiat enim doloremque aut neque non et debitis iure. Corrupti recusandae ducimus enim.</p>
          <a href="service-details.html" class="stretched-link"></a>
        </div>
      </div><!-- End Service Item -->
    </div>
  </div>
</section><!-- /Services Section -->
