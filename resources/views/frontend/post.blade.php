@extends('layouts.frontend.frontend')
@section('content')
<!-- ##### Breadcrumb Area Start ##### -->
<section class="breadcrumb-area bg-img bg-overlay" style="background-image: url(assets/frontend/img/bg-img/3.jpg);">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <!-- Breadcrumb Text -->
            <div class="col-12">
                <div class="breadcrumb-text">
                    <h2>Kategori</h2>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ##### Breadcrumb Area End ##### -->

<!-- ##### Articles Area Start ##### -->
<section class="articles-area section-padding-0-100">
    <div class="container">
        <div class="row justify-content-center">
            <!-- Articles Post Area -->
            <div class="col-12 col-lg-8">
                <div class="mt-100">

                    <!-- *** Single Articles Area *** -->
                    <div class="artikel">

                    </div>

                    <!-- ### Pagination Area ### -->
                    <nav aria-label="Page navigation example">
                        <ul class="pagination mt-100">
                            {{ $artikel->links() }}
                        </ul>
                    </nav>
                </div>
            </div>

            <!-- Sidebar Area -->
            <div class="col-12 col-sm-9 col-md-6 col-lg-4">
                <div class="sidebar-area mt-100">

                    <!-- Single Widget Area -->
                    <div class="single-widget-area video-widget">
                        <!-- Single Video Widget -->
                        <div class="random">

                        </div>
                    </div>

                    <!-- Single Widget Area -->
                    <div class="single-widget-area post-widget">
                        <h4 class="widget-title">Latest Posts</h4>
                        <!-- Single Post Widget -->
                        <div class="postlatest">

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<!-- ##### Articles Area End ##### -->

<!-- ##### Featured Articles Area Start ##### -->
<section class="featured-articles-area section-padding-100-0 bg-img bg-pattern bg-fixed" style="background-image: url(img/bg-img/5.jpg);">
    <div class="container">
        <div class="row">
            <!-- Article Thumbnail -->
            <div class="col-12 col-lg-6">
                <div class="article-thumbnail mb-100">
                    <img src="{{ asset('assets/frontend/img/bg-img/4.jpg') }}" alt="">
                </div>
            </div>
            <!-- Article Content -->
            <div class="col-12 col-lg-6">
                <div class="article-content mb-100">
                    <a href="single-post.html" class="post-title">Sony’s new releases for 2018</a>
                    <div class="post-meta">
                        <a href="#" class="post-date">July 12, 2018</a>
                        <a href="#" class="post-comments">2 Comments</a>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris velit arcu, scelerisque dignissim massa quis, mattis facilisis erat. Aliquam erat volutpat. Sed efficitur diam. Eenean ut eros in ligula mollis lacinia eu in metus. In diam leo, convallis id nisi sed, mollis malesuada arcu. Aenean nisi tellus, posuere quis quam nec, mattis tempor dui. Suspendisse non ante mollis, fermentum erat non, fermentum neque. Phasellus vulputate, odio sit amet rhoncus interdum, est est condimentum velit, non condimentum lectus sapien id ante. Nullam sed quam hendrerit, cursus augue at, ultricies erat. Nulla sed pharetra ligula.</p>
                    <a href="#" class="btn egames-btn mt-50">Read More</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ##### Featured Articles Area End ##### -->
@endsection
