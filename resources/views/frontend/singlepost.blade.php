@extends('layouts.frontend.frontend')
@section('content')
    <!-- ##### Breadcrumb Area Start ##### -->
    <section class="breadcrumb-area bg-img bg-overlay" style="background-image: url('assets/frontend/img/bg-img/23.jpg')">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <!-- Breadcrumb Text -->
                <div class="col-12">
                    <div class="breadcrumb-text">
                        <h2>Artikel</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Breadcrumb Area End ##### -->

    <!-- ##### Post Details Area Start ##### -->
    <section class="post-news-area section-padding-0-100">
        <div class="container">
            <div class="row justify-content-center">
                <!-- Post Details Content Area -->
                <div class="col-12 col-lg-8">
                    <div class="mt-100">
                        <div id="singlepost">

                        </div>

                        <!-- Comment Area Start -->
                        <div class="comment_area clearfix mb-70">
                            <h4 class="mb-50">Comments</h4>

                            <div id="disqus_thread">

                            </div>
                        </div>
                    </div>
                </div>

                <!-- Sidebar Widget -->
                <div class="col-12 col-sm-9 col-md-6 col-lg-4">
                    <div class="sidebar-area mt-100">

                        <!-- Single Widget Area -->
                        <div class="single-widget-area video-widget">
                            <!-- Single Video Widget -->
                            <div class="single-video-widget d-flex">
                                <div class="video-thumbnail">
                                    <img src="{{ asset('assets/frontend/img/bg-img/14.jpg') }}" alt="">
                                </div>
                                <div class="video-text">
                                    <a href="#" class="video-title">Assemble Your Squad and Join the Battle</a>
                                    <span>Nintendo Wii, PS4, XBox 360</span>
                                </div>
                                <div class="video-rating">8.3/10</div>
                            </div>

                            <!-- Single Video Widget -->
                            <div class="single-video-widget d-flex">
                                <div class="video-thumbnail">
                                    <img src="{{ asset('assets/frontend/img/bg-img/15.jpg') }}" alt="">
                                </div>
                                <div class="video-text">
                                    <a href="#" class="video-title">Tips to improve your game</a>
                                    <span>Nintendo Wii, PS4, XBox 360</span>
                                </div>
                                <div class="video-rating">8.3/10</div>
                            </div>

                            <!-- Single Video Widget -->
                            <div class="single-video-widget d-flex">
                                <div class="video-thumbnail">
                                    <img src="{{ asset('assets/frontend/img/bg-img/16.jpg') }}" alt="">
                                </div>
                                <div class="video-text">
                                    <a href="#" class="video-title">Game reviews: the best of 2018</a>
                                    <span>Nintendo Wii, PS4, XBox 360</span>
                                </div>
                                <div class="video-rating">8.3/10</div>
                            </div>

                            <!-- Single Video Widget -->
                            <div class="single-video-widget d-flex">
                                <div class="video-thumbnail">
                                    <img src="{{ asset('assets/frontend/img/bg-img/17.jpg') }}" alt="">
                                </div>
                                <div class="video-text">
                                    <a href="#" class="video-title">Assemble Your Squad and Join the Battle</a>
                                    <span>Nintendo Wii, PS4, XBox 360</span>
                                </div>
                                <div class="video-rating">8.3/10</div>
                            </div>

                            <!-- Single Video Widget -->
                            <div class="single-video-widget d-flex">
                                <div class="video-thumbnail">
                                    <img src="{{ asset('assets/frontend/img/bg-img/18.jpg') }}" alt="">
                                </div>
                                <div class="video-text">
                                    <a href="#" class="video-title">New to gaming? Here are some tips</a>
                                    <span>Nintendo Wii, PS4, XBox 360</span>
                                </div>
                                <div class="video-rating">8.3/10</div>
                            </div>
                        </div>

                        <!-- Single Widget Area -->
                        <div class="single-widget-area post-widget">
                            <h4 class="widget-title">Latest Posts</h4>
                            <!-- Single Post Widget -->
                            <div class="single-post-area d-flex">
                                <div class="blog-thumbnail">
                                    <img src="{{ asset('assets/frontend/img/bg-img/19.jpg') }}" alt="">
                                </div>
                                <div class="blog-content">
                                    <a href="#" class="post-title">New to gaming? Here are some tips</a>
                                    <span>Nintendo Wii, PS4, XBox 360</span>
                                </div>
                            </div>

                            <!-- Single Post Widget -->
                            <div class="single-post-area d-flex">
                                <div class="blog-thumbnail">
                                    <img src="{{ asset('assets/frontend/img/bg-img/20.jpg') }}" alt="">
                                </div>
                                <div class="blog-content">
                                    <a href="#" class="post-title">Gaming at a new lever: 2018 new release</a>
                                    <span>Nintendo Wii, PS4, XBox 360</span>
                                </div>
                            </div>

                            <!-- Single Post Widget -->
                            <div class="single-post-area d-flex">
                                <div class="blog-thumbnail">
                                    <img src="{{ asset('assets/frontend/img/bg-img/21.jpg') }}" alt="">
                                </div>
                                <div class="blog-content">
                                    <a href="#" class="post-title">2018 Comicon: See the lastest news</a>
                                    <span>Nintendo Wii, PS4, XBox 360</span>
                                </div>
                            </div>

                            <!-- Single Post Widget -->
                            <div class="single-post-area d-flex">
                                <div class="blog-thumbnail">
                                    <img src="{{ asset('assets/frontend/img/bg-img/22.jpg') }}" alt="">
                                </div>
                                <div class="blog-content">
                                    <a href="#" class="post-title">New to gaming? Here are some tips</a>
                                    <span>Nintendo Wii, PS4, XBox 360</span>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Post Details Area End ##### -->
@endsection

