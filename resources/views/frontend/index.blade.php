@extends('layouts.frontend.frontend')
@section('content')
<!-- Headline -->
<!-- ##### Hero Area Start ##### -->
<div class="hero-area">
    <!-- Hero Post Slides -->
    <div class="hero-post-slides owl-carousel">

        <!-- Single Slide -->
        <div class="single-slide bg-img bg-overlay" style="background-image: url(assets/frontend/img/bg-img/1.jpg);">
            <!-- Blog Content -->
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-12 col-lg-9">
                        <div class="blog-content" data-animation="fadeInUp" data-delay="100ms">
                            <h2 data-animation="fadeInUp" data-delay="400ms">The Power of Gaming</h2>
                            <p data-animation="fadeInUp" data-delay="700ms">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc tristique justo id elit bibendum pharetra non vitae lectus. Mauris libero felis, dapibus a ultrices sed, commodo vitae odio. Sed auctor tellus quis arcu tempus, egestas tincidunt.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Single Slide -->
        <div class="single-slide bg-img bg-overlay" style="background-image: url(assets/frontend/img/bg-img/2.jpg);">
            <!-- Blog Content -->
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-12 col-lg-9">
                        <div class="blog-content" data-animation="fadeInUp" data-delay="100ms">
                            <h2 data-animation="fadeInUp" data-delay="400ms">The Power of Gaming</h2>
                            <p data-animation="fadeInUp" data-delay="700ms">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc tristique justo id elit bibendum pharetra non vitae lectus. Mauris libero felis, dapibus a ultrices sed, commodo vitae odio. Sed auctor tellus quis arcu tempus, egestas tincidunt.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<!-- ##### Hero Area End ##### -->

<!-- ##### Games Area Start ##### -->
<div class="games-area section-padding-100-0">
    <div class="container">
        <div class="row">

        </div>
    </div>
</div>
<!-- ##### Games Area End ##### -->

<!-- ##### Monthly Picks Area Start ##### -->
<section class="monthly-picks-area section-padding-100 bg-pattern">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="left-right-pattern"></div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <!-- Title -->
                <h2 class="section-title mb-70 wow fadeInUp" data-wow-delay="100ms">This Month’s Pick</h2>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <ul class="nav nav-tabs wow fadeInUp" data-wow-delay="300ms" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="popular-tab" data-toggle="tab" href="#popular" role="tab" aria-controls="popular" aria-selected="true">Popular</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div>
        <div class="container">
            <div class="row populer">
                <!-- Single Games Area -->

            </div>
        </div>
    </div>
</section>
<!-- ##### Monthly Picks Area End ##### -->

<!-- ##### Video Area Start ##### -->
<div class="egames-video-area section-padding-100 bg-pattern2">
    <div class="container">
        <div class="row no-gutters">
            <div class="col-12 col-md-6 col-lg-4">
                <div class="egames-nav-btn">
                    <div class="nav flex-column list_random" id="video-tab" role="tablist" aria-orientation="vertical">

                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6 col-lg-8">
                <div class="tab-content" id="video-tabContent">
                    <div class="tab-pane fade show active" id="video-1" role="tabpanel" aria-labelledby="video1">
                        <div class="video-playground bg-img" style="background-image: url(assets/frontend/img/bg-img/45.jpg);">
                           <!-- Play Button -->
                            <div class="play-btn">
                                <a href="https://www.youtube.com/watch?v=7HKoqNJtMTQ" class="play-button"><img src="{{ asset('assets/frontend/img/core-img/play.png') }}" alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ##### Video Area End ##### -->

<!-- ##### Articles Area Start ##### -->
<section class="latest-articles-area section-padding-100-0 bg-img bg-pattern bg-fixed" style="background-image: url(assets/frontend/img/bg-img/5.jpg);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-8">
                <div class="mb-100 latest">
                    <!-- Title -->
                    <h2 class="section-title mb-70 wow fadeInUp" data-wow-delay="100ms">Latest Articles</h2>

                    <!-- *** Single Articles Area *** -->

                </div>
            </div>

            <div class="col-12 col-md-6 col-lg-4">
                <!-- Title -->

            </div>
        </div>
    </div>
</section>
<!-- ##### Articles Area End ##### -->
@endsection
