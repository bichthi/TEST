@extends('layouts.app')
@section('content')
<main style="font-family: 'Poppins', sans-serif;"> <!-- Áp dụng font chữ mới -->

    <!-- Thêm link Google Fonts để tải font chữ -->
    @push('styles')
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    @endpush

    <section class="swiper-container js-swiper-slider swiper-number-pagination slideshow" data-settings='{
        "autoplay": {
          "delay": 5000
        },
        "slidesPerView": 1,
        "effect": "fade",
        "loop": true
      }'>
      <div class="swiper-wrapper">

        <!-- Slide 1 -->
        <div class="swiper-slide">
          <div class="overflow-hidden position-relative h-100">
            <div class="slideshow-character position-absolute bottom-0 pos_right-center">
              <img loading="lazy" src="{{ asset('assets/images/home/demo3/slideshow-character1.png') }}" width="542" height="733"
                alt="Woman Fashion 1"
                class="slideshow-character__img animate animate_fade animate_btt animate_delay-9 w-auto h-auto" />
              <div class="character_markup type2">
                <p
                  class="text-uppercase font-sofia mark-grey-color animate animate_fade animate_btt animate_delay-10 mb-0"
                  style="color: #ADD8E6;">
                  DomDom
                </p>
              </div>
            </div>
            <div class="slideshow-text container position-absolute start-50 top-50 translate-middle">
              <h2 class="h1 fw-normal mb-0 animate animate_fade animate_btt animate_delay-5" style="color: #011F54;">
                Night Spring
              </h2>
              <h2 class="h1 fw-bold animate animate_fade animate_btt animate_delay-5" style="color: #011F54;">
                Sneaker
              </h2>
            </div>
          </div>
        </div>

        <!-- Slide 2 -->
        <div class="swiper-slide">
          <div class="overflow-hidden position-relative h-100">
            <div class="slideshow-character position-absolute bottom-0 pos_right-center">
              <img loading="lazy" src="{{ asset('assets/images/slideshow-character1.png') }}" width="400" height="733"
                alt="Woman Fashion 1"
                class="slideshow-character__img animate animate_fade animate_btt animate_delay-9 w-auto h-auto" />
            </div>
            <div class="slideshow-text container position-absolute start-50 top-50 translate-middle">
              <h2 class="h1 fw-normal mb-0 animate animate_fade animate_btt animate_delay-5" style="color: #011F54;">
                Night Spring
              </h2>
              <h2 class="h1 fw-bold animate animate_fade animate_btt animate_delay-5" style="color: #011F54;">
                Sport
              </h2>
            </div>
          </div>
        </div>

        <!-- Slide 3 -->
        <div class="swiper-slide">
          <div class="overflow-hidden position-relative h-100">
            <div class="slideshow-character position-absolute bottom-0 pos_right-center">
              <img loading="lazy" src="{{ asset('assets/images/slideshow-character2.png') }}" width="400" height="690"
                alt="Woman Fashion 2"
                class="slideshow-character__img animate animate_fade animate_rtl animate_delay-10 w-auto h-auto" />
            </div>
            <div class="slideshow-text container position-absolute start-50 top-50 translate-middle">
              <h2 class="h1 fw-normal mb-0 animate animate_fade animate_btt animate_delay-5" style="color: #011F54;">
                Night Spring
              </h2>
              <h2 class="h1 fw-bold animate animate_fade animate_btt animate_delay-5" style="color: #011F54;">
                Sneaker
              </h2>
            </div>
          </div>
        </div>
      </div>

      <div class="container">
        <div
          class="slideshow-pagination slideshow-number-pagination d-flex align-items-center position-absolute bottom-0 mb-5">
        </div>
      </div>
    </section>
    <div class="mb-3 mb-xl-5 pt-1 pb-4"></div>
</main>
@endsection
