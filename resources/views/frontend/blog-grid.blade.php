@extends('layouts.frontend')
@section('content')
<!-- Breadcrumb -->
<div class="container">
    <div class="bg0 flex-wr-sb-c p-rl-20 p-tb-8">
        <div class="f2-s-1 p-r-30 m-tb-6">
            <a href="/" class="breadcrumb-item f1-s-3 cl9">
                Home
            </a>

            <span class="breadcrumb-item f1-s-3 cl9">
                Blog
            </span>
        </div>

        <div class="pos-relative size-a-2 bo-1-rad-22 of-hidden bocl11 m-tb-6">
            <input class="f1-s-1 cl6 plh9 s-full p-l-25 p-r-45" type="text" name="search" placeholder="Search">
            <button class="flex-c-c size-a-1 ab-t-r fs-20 cl2 hov-cl10 trans-03">
                <i class="zmdi zmdi-search"></i>
            </button>
        </div>
    </div>
</div>

<!-- Page heading -->
<div class="container p-t-4 p-b-40">
    <h2 class="f1-l-1 cl2">
        Blog Grid Sidebar
    </h2>
</div>

<!-- Post -->
<section class="bg0 p-b-55">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10 col-lg-8 p-b-80">
                <div class="row">
                    <div class="col-sm-6 p-r-25 p-r-15-sr991">
                        <!-- Item latest -->
                        <div class="m-b-45">
                            <a href="blog-detail-01.html" class="wrap-pic-w hov1 trans-03">
                                <img src="{{ asset('assets/frontend/images/entertaiment-06.jpg') }}" alt="IMG">
                            </a>

                            <div class="p-t-16">
                                <h5 class="p-b-5">
                                    <a href="blog-detail-01.html" class="f1-m-3 cl2 hov-cl10 trans-03">
                                        You wish lorem ipsum dolor sit amet consectetur
                                    </a>
                                </h5>

                                <span class="cl8">
                                    <a href="#" class="f1-s-4 cl8 hov-cl10 trans-03">
                                        by John Alvarado
                                    </a>

                                    <span class="f1-s-3 m-rl-3">
                                        -
                                    </span>

                                    <span class="f1-s-3">
                                        Feb 18
                                    </span>
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 p-r-25 p-r-15-sr991">
                        <!-- Item latest -->
                        <div class="m-b-45">
                            <a href="blog-detail-01.html" class="wrap-pic-w hov1 trans-03">
                                <img src="{{ asset('assets/frontend/images/entertaiment-07.jpg') }}" alt="IMG">
                            </a>

                            <div class="p-t-16">
                                <h5 class="p-b-5">
                                    <a href="blog-detail-01.html" class="f1-m-3 cl2 hov-cl10 trans-03">
                                        You wish lorem ipsum dolor sit amet consectetur
                                    </a>
                                </h5>

                                <span class="cl8">
                                    <a href="#" class="f1-s-4 cl8 hov-cl10 trans-03">
                                        by John Alvarado
                                    </a>

                                    <span class="f1-s-3 m-rl-3">
                                        -
                                    </span>

                                    <span class="f1-s-3">
                                        Feb 16
                                    </span>
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 p-r-25 p-r-15-sr991">
                        <!-- Item latest -->
                        <div class="m-b-45">
                            <a href="blog-detail-01.html" class="wrap-pic-w hov1 trans-03">
                                <img src="{{ asset('assets/frontend/images/entertaiment-08.jpg') }}" alt="IMG">
                            </a>

                            <div class="p-t-16">
                                <h5 class="p-b-5">
                                    <a href="blog-detail-01.html" class="f1-m-3 cl2 hov-cl10 trans-03">
                                        You wish lorem ipsum dolor sit amet consectetur
                                    </a>
                                </h5>

                                <span class="cl8">
                                    <a href="#" class="f1-s-4 cl8 hov-cl10 trans-03">
                                        by John Alvarado
                                    </a>

                                    <span class="f1-s-3 m-rl-3">
                                        -
                                    </span>

                                    <span class="f1-s-3">
                                        Feb 15
                                    </span>
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 p-r-25 p-r-15-sr991">
                        <!-- Item latest -->
                        <div class="m-b-45">
                            <a href="blog-detail-01.html" class="wrap-pic-w hov1 trans-03">
                                <img src="{{ asset('assets/frontend/images/entertaiment-09.jpg') }}" alt="IMG">
                            </a>

                            <div class="p-t-16">
                                <h5 class="p-b-5">
                                    <a href="blog-detail-01.html" class="f1-m-3 cl2 hov-cl10 trans-03">
                                        You wish lorem ipsum dolor sit amet consectetur
                                    </a>
                                </h5>

                                <span class="cl8">
                                    <a href="#" class="f1-s-4 cl8 hov-cl10 trans-03">
                                        by John Alvarado
                                    </a>

                                    <span class="f1-s-3 m-rl-3">
                                        -
                                    </span>

                                    <span class="f1-s-3">
                                        Feb 13
                                    </span>
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 p-r-25 p-r-15-sr991">
                        <!-- Item latest -->
                        <div class="m-b-45">
                            <a href="blog-detail-01.html" class="wrap-pic-w hov1 trans-03">
                                <img src="{{ asset('assets/frontend/images/latest-05.jpg') }}" alt="IMG">
                            </a>

                            <div class="p-t-16">
                                <h5 class="p-b-5">
                                    <a href="blog-detail-01.html" class="f1-m-3 cl2 hov-cl10 trans-03">
                                        You wish lorem ipsum dolor sit amet consectetur
                                    </a>
                                </h5>

                                <span class="cl8">
                                    <a href="#" class="f1-s-4 cl8 hov-cl10 trans-03">
                                        by John Alvarado
                                    </a>

                                    <span class="f1-s-3 m-rl-3">
                                        -
                                    </span>

                                    <span class="f1-s-3">
                                        Feb 10
                                    </span>
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 p-r-25 p-r-15-sr991">
                        <!-- Item latest -->
                        <div class="m-b-45">
                            <a href="blog-detail-01.html" class="wrap-pic-w hov1 trans-03">
                                <img src="{{ asset('assets/frontend/images/latest-06.jpg') }}" alt="IMG">
                            </a>

                            <div class="p-t-16">
                                <h5 class="p-b-5">
                                    <a href="blog-detail-01.html" class="f1-m-3 cl2 hov-cl10 trans-03">
                                        You wish lorem ipsum dolor sit amet consectetur
                                    </a>
                                </h5>

                                <span class="cl8">
                                    <a href="#" class="f1-s-4 cl8 hov-cl10 trans-03">
                                        by John Alvarado
                                    </a>

                                    <span class="f1-s-3 m-rl-3">
                                        -
                                    </span>

                                    <span class="f1-s-3">
                                        Feb 09
                                    </span>
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 p-r-25 p-r-15-sr991">
                        <!-- Item latest -->
                        <div class="m-b-45">
                            <a href="blog-detail-01.html" class="wrap-pic-w hov1 trans-03">
                                <img src="{{ asset('assets/frontend/images/entertaiment-10.jpg') }}" alt="IMG">
                            </a>

                            <div class="p-t-16">
                                <h5 class="p-b-5">
                                    <a href="blog-detail-01.html" class="f1-m-3 cl2 hov-cl10 trans-03">
                                        You wish lorem ipsum dolor sit amet consectetur
                                    </a>
                                </h5>

                                <span class="cl8">
                                    <a href="#" class="f1-s-4 cl8 hov-cl10 trans-03">
                                        by John Alvarado
                                    </a>

                                    <span class="f1-s-3 m-rl-3">
                                        -
                                    </span>

                                    <span class="f1-s-3">
                                        Feb 18
                                    </span>
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 p-r-25 p-r-15-sr991">
                        <!-- Item latest -->
                        <div class="m-b-45">
                            <a href="blog-detail-01.html" class="wrap-pic-w hov1 trans-03">
                                <img src="{{ asset('assets/frontend/images/entertaiment-11.jpg') }}" alt="IMG">
                            </a>

                            <div class="p-t-16">
                                <h5 class="p-b-5">
                                    <a href="blog-detail-01.html" class="f1-m-3 cl2 hov-cl10 trans-03">
                                        You wish lorem ipsum dolor sit amet consectetur
                                    </a>
                                </h5>

                                <span class="cl8">
                                    <a href="#" class="f1-s-4 cl8 hov-cl10 trans-03">
                                        by John Alvarado
                                    </a>

                                    <span class="f1-s-3 m-rl-3">
                                        -
                                    </span>

                                    <span class="f1-s-3">
                                        Feb 16
                                    </span>
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 p-r-25 p-r-15-sr991">
                        <!-- Item latest -->
                        <div class="m-b-45">
                            <a href="blog-detail-01.html" class="wrap-pic-w hov1 trans-03">
                                <img src="{{ asset('assets/frontend/images/entertaiment-12.jpg') }}" alt="IMG">
                            </a>

                            <div class="p-t-16">
                                <h5 class="p-b-5">
                                    <a href="blog-detail-01.html" class="f1-m-3 cl2 hov-cl10 trans-03">
                                        You wish lorem ipsum dolor sit amet consectetur
                                    </a>
                                </h5>

                                <span class="cl8">
                                    <a href="#" class="f1-s-4 cl8 hov-cl10 trans-03">
                                        by John Alvarado
                                    </a>

                                    <span class="f1-s-3 m-rl-3">
                                        -
                                    </span>

                                    <span class="f1-s-3">
                                        Feb 15
                                    </span>
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 p-r-25 p-r-15-sr991">
                        <!-- Item latest -->
                        <div class="m-b-45">
                            <a href="blog-detail-01.html" class="wrap-pic-w hov1 trans-03">
                                <img src="{{ asset('assets/frontend/images/entertaiment-13.jpg') }}" alt="IMG">
                            </a>

                            <div class="p-t-16">
                                <h5 class="p-b-5">
                                    <a href="blog-detail-01.html" class="f1-m-3 cl2 hov-cl10 trans-03">
                                        You wish lorem ipsum dolor sit amet consectetur
                                    </a>
                                </h5>

                                <span class="cl8">
                                    <a href="#" class="f1-s-4 cl8 hov-cl10 trans-03">
                                        by John Alvarado
                                    </a>

                                    <span class="f1-s-3 m-rl-3">
                                        -
                                    </span>

                                    <span class="f1-s-3">
                                        Feb 13
                                    </span>
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 p-r-25 p-r-15-sr991">
                        <!-- Item latest -->
                        <div class="m-b-45">
                            <a href="blog-detail-01.html" class="wrap-pic-w hov1 trans-03">
                                <img src="{{ asset('assets/frontend/images/entertaiment-14.jpg') }}" alt="IMG">
                            </a>

                            <div class="p-t-16">
                                <h5 class="p-b-5">
                                    <a href="blog-detail-01.html" class="f1-m-3 cl2 hov-cl10 trans-03">
                                        You wish lorem ipsum dolor sit amet consectetur
                                    </a>
                                </h5>

                                <span class="cl8">
                                    <a href="#" class="f1-s-4 cl8 hov-cl10 trans-03">
                                        by John Alvarado
                                    </a>

                                    <span class="f1-s-3 m-rl-3">
                                        -
                                    </span>

                                    <span class="f1-s-3">
                                        Feb 10
                                    </span>
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 p-r-25 p-r-15-sr991">
                        <!-- Item latest -->
                        <div class="m-b-45">
                            <a href="blog-detail-01.html" class="wrap-pic-w hov1 trans-03">
                                <img src="{{ asset('assets/frontend/images/entertaiment-15.jpg') }}" alt="IMG">
                            </a>

                            <div class="p-t-16">
                                <h5 class="p-b-5">
                                    <a href="blog-detail-01.html" class="f1-m-3 cl2 hov-cl10 trans-03">
                                        You wish lorem ipsum dolor sit amet consectetur
                                    </a>
                                </h5>

                                <span class="cl8">
                                    <a href="#" class="f1-s-4 cl8 hov-cl10 trans-03">
                                        by John Alvarado
                                    </a>

                                    <span class="f1-s-3 m-rl-3">
                                        -
                                    </span>

                                    <span class="f1-s-3">
                                        Feb 09
                                    </span>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Pagination -->
                <div class="flex-wr-s-c m-rl--7 p-t-15">
                    <a href="#" class="flex-c-c pagi-item hov-btn1 trans-03 m-all-7 pagi-active">1</a>
                    <a href="#" class="flex-c-c pagi-item hov-btn1 trans-03 m-all-7">2</a>
                </div>
            </div>

            <div class="col-md-10 col-lg-4 p-b-80">
                <div class="p-l-10 p-rl-0-sr991">
                    <!-- Subscribe -->
                    <div class="bg10 p-rl-35 p-t-28 p-b-35 m-b-50">
                        <h5 class="f1-m-5 cl0 p-b-10">
                            Subscribe
                        </h5>

                        <p class="f1-s-1 cl0 p-b-25">
                            Get all latest content delivered to your email a few times a month.
                        </p>

                        <form class="size-a-9 pos-relative">
                            <input class="s-full f1-m-6 cl6 plh9 p-l-20 p-r-55" type="text" name="email" placeholder="Email">

                            <button class="size-a-10 flex-c-c ab-t-r fs-16 cl9 hov-cl10 trans-03">
                                <i class="fa fa-arrow-right"></i>
                            </button>
                        </form>
                    </div>

                    <!-- Most Popular -->
                    <div class="p-b-23">
                        <div class="how2 how2-cl4 flex-s-c">
                            <h3 class="f1-m-2 cl3 tab01-title">
                                Most Popular
                            </h3>
                        </div>

                        <ul class="p-t-35">
                            <li class="flex-wr-sb-s p-b-22">
                                <div class="size-a-8 flex-c-c borad-3 size-a-8 bg9 f1-m-4 cl0 m-b-6">
                                    1
                                </div>

                                <a href="#" class="size-w-3 f1-s-7 cl3 hov-cl10 trans-03">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit
                                </a>
                            </li>

                            <li class="flex-wr-sb-s p-b-22">
                                <div class="size-a-8 flex-c-c borad-3 size-a-8 bg9 f1-m-4 cl0 m-b-6">
                                    2
                                </div>

                                <a href="#" class="size-w-3 f1-s-7 cl3 hov-cl10 trans-03">
                                    Proin velit consectetur non neque
                                </a>
                            </li>

                            <li class="flex-wr-sb-s p-b-22">
                                <div class="size-a-8 flex-c-c borad-3 size-a-8 bg9 f1-m-4 cl0 m-b-6">
                                    3
                                </div>

                                <a href="#" class="size-w-3 f1-s-7 cl3 hov-cl10 trans-03">
                                    Nunc vestibulum, enim vitae condimentum volutpat lobortis ante
                                </a>
                            </li>

                            <li class="flex-wr-sb-s p-b-22">
                                <div class="size-a-8 flex-c-c borad-3 size-a-8 bg9 f1-m-4 cl0 m-b-6">
                                    4
                                </div>

                                <a href="#" class="size-w-3 f1-s-7 cl3 hov-cl10 trans-03">
                                    Proin velit justo consectetur non neque elementum
                                </a>
                            </li>

                            <li class="flex-wr-sb-s p-b-22">
                                <div class="size-a-8 flex-c-c borad-3 size-a-8 bg9 f1-m-4 cl0">
                                    5
                                </div>

                                <a href="#" class="size-w-3 f1-s-7 cl3 hov-cl10 trans-03">
                                    Proin velit consectetur non neque
                                </a>
                            </li>
                        </ul>
                    </div>

                    <!-- Tag -->
                    <div>
                        <div class="how2 how2-cl4 flex-s-c m-b-30">
                            <h3 class="f1-m-2 cl3 tab01-title">
                                Tags
                            </h3>
                        </div>

                        <div class="flex-wr-s-s m-rl--5">
                            <a href="#" class="flex-c-c size-h-2 bo-1-rad-20 bocl12 f1-s-1 cl8 hov-btn2 trans-03 p-rl-20 p-tb-5 m-all-5">
                                Fashion
                            </a>

                            <a href="#" class="flex-c-c size-h-2 bo-1-rad-20 bocl12 f1-s-1 cl8 hov-btn2 trans-03 p-rl-20 p-tb-5 m-all-5">
                                Lifestyle
                            </a>

                            <a href="#" class="flex-c-c size-h-2 bo-1-rad-20 bocl12 f1-s-1 cl8 hov-btn2 trans-03 p-rl-20 p-tb-5 m-all-5">
                                Denim
                            </a>

                            <a href="#" class="flex-c-c size-h-2 bo-1-rad-20 bocl12 f1-s-1 cl8 hov-btn2 trans-03 p-rl-20 p-tb-5 m-all-5">
                                Streetstyle
                            </a>

                            <a href="#" class="flex-c-c size-h-2 bo-1-rad-20 bocl12 f1-s-1 cl8 hov-btn2 trans-03 p-rl-20 p-tb-5 m-all-5">
                                Crafts
                            </a>

                            <a href="#" class="flex-c-c size-h-2 bo-1-rad-20 bocl12 f1-s-1 cl8 hov-btn2 trans-03 p-rl-20 p-tb-5 m-all-5">
                                Magazine
                            </a>

                            <a href="#" class="flex-c-c size-h-2 bo-1-rad-20 bocl12 f1-s-1 cl8 hov-btn2 trans-03 p-rl-20 p-tb-5 m-all-5">
                                News
                            </a>

                            <a href="#" class="flex-c-c size-h-2 bo-1-rad-20 bocl12 f1-s-1 cl8 hov-btn2 trans-03 p-rl-20 p-tb-5 m-all-5">
                                Blogs
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
