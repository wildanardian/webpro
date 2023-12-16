@extends('layouts.main')
@section('content')
    <main style="min-height: 50vh; margin: 64px; overflow: hidden; ">
        <div class=" d-flex  justify-content-between border-bottom" style="border-color: #D4D4D4;">
            <h5 class="fw-bold">For You</h5>
            <p class="text-end"><a href="restaurant.html">See all</a></p>
        </div>

        <div class="swiper mySwiper d-flex align-items-center justify-content-center mt-4"
            style="max-width: 100%; height: 400px;">
            <div class="slide-container swiper-wrapper">
                <div class="cardz swiper-slide shadow"
                    style="flex: 0 0 auto; width: 20%; height: 330px; border-radius: 20px; cursor: pointer;">
                    <div class="image-box position-relative w-100" style="height: 200px; overflow: hidden;">
                        <img src="{{ asset('image/detail.png') }}" alt="" srcset="" class="w-100 h-100">
                    </div>
                    <div class="card-details ps-3" style="height: 30%;">
                        <h5 class="fw-bold mt-2">The Exquisite</h5>
                        <p class="fw-light mt-1" style="font-size: 13px; margin-bottom: 5px;">Lorem ipsum dolor sit amet
                            consectetur....</p>
                        <div class="mt-3" style="font-size: 15px;">⭐️⭐️⭐️⭐️⭐️ (5)</div>
                    </div>
                </div>
                <div class="cardz swiper-slide shadow"
                    style="flex: 0 0 auto; width: 230px; height: 330px; border-radius: 20px; cursor: pointer;">
                    <div class="image-box position-relative w-100" style="height: 200px; overflow: hidden;">
                        <img src="{{ asset('image/detail.png') }}" alt="" srcset="" class="w-100 h-100">
                    </div>
                    <div class="card-details ps-3" style="height: 30%;">
                        <h5 class="fw-bold mt-2">The Exquisite</h5>
                        <p class="fw-light mt-1" style="font-size: 13px; margin-bottom: 5px;">Lorem ipsum dolor sit amet
                            consectetur....</p>
                        <div class="mt-3" style="font-size: 15px;">⭐️⭐️⭐️⭐️⭐️ (5)</div>
                    </div>
                </div>
                <div class="cardz swiper-slide shadow"
                    style="flex: 0 0 auto; width: 230px; height: 330px; border-radius: 20px; cursor: pointer;">
                    <div class="image-box position-relative w-100" style="height: 200px; overflow: hidden;">
                        <img src="{{ asset('image/detail.png') }}" alt="" srcset="" class="w-100 h-100">
                    </div>
                    <div class="card-details ps-3" style="height: 30%;">
                        <h5 class="fw-bold mt-3">The Exquisite</h5>
                        <p class="fw-light mt-1" style="font-size: 13px; margin-bottom: 5px;">Lorem ipsum dolor sit amet
                            consectetur....</p>
                        <div class="mt-3" style="font-size: 15px;">⭐️⭐️⭐️⭐️⭐️ (5)</div>
                    </div>
                </div>
                <div class="cardz swiper-slide shadow"
                    style="flex: 0 0 auto; width: 230px; height: 330px; border-radius: 20px; cursor: pointer;">
                    <div class="image-box position-relative w-100" style="height: 200px; overflow: hidden;">
                        <img src="{{ asset('image/detail.png') }}" alt="" srcset="" class="w-100 h-100">
                    </div>
                    <div class="card-details ps-3" style="height: 30%;">
                        <h5 class="fw-bold mt-3">The Exquisite</h5>
                        <p class="fw-light mt-1" style="font-size: 13px; margin-bottom: 5px;">Lorem ipsum dolor sit amet
                            consectetur....</p>
                        <div class="mt-3" style="font-size: 15px;">⭐️⭐️⭐️⭐️⭐️ (5)</div>
                    </div>
                </div>
                <div class="cardz swiper-slide shadow"
                    style="flex: 0 0 auto; width: 230px; height: 330px; border-radius: 20px; cursor: pointer;">
                    <div class="image-box position-relative w-100" style="height: 200px; overflow: hidden;">
                        <img src="{{ asset('image/detail.png') }}" alt="" srcset="" class="w-100 h-100">
                    </div>
                    <div class="card-details ps-3" style="height: 30%;">
                        <h5 class="fw-bold mt-3">The Exquisite</h5>
                        <p class="fw-light mt-1" style="font-size: 13px; margin-bottom: 5px;">Lorem ipsum dolor sit amet
                            consectetur....</p>
                        <div class="mt-3" style="font-size: 15px;">⭐️⭐️⭐️⭐️⭐️ (5)</div>
                    </div>
                </div>
                <div class="cardz swiper-slide shadow"
                    style="flex: 0 0 auto; width: 230px; height: 330px; border-radius: 20px; cursor: pointer;">
                    <div class="image-box position-relative w-100" style="height: 200px; overflow: hidden;">
                        <img src="{{ asset('image/detail.png') }}" alt="" srcset="" class="w-100 h-100">
                    </div>
                    <div class="card-details ps-3" style="height: 30%;">
                        <h5 class="fw-bold mt-3">The Exquisite</h5>
                        <p class="fw-light mt-1" style="font-size: 13px; margin-bottom: 5px;">Lorem ipsum dolor sit
                            amet
                            consectetur....</p>
                        <div class="mt-3" style="font-size: 15px;">⭐️⭐️⭐️⭐️⭐️ (5)</div>
                    </div>
                </div>
            </div>
            <div class="swiper-button-next swiper-navBtn"></div>
            <div class="swiper-button-prev swiper-navBtn"></div>
            <div class="swiper-pagination"></div>
    </main>
@endsection
