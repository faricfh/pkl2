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
            <div class="col-12 col-lg-8" id="posts">
                <div class="mt-100">

                    <!-- *** Single Articles Area *** -->
                    <div class="artikel">

                    </div>

                    <!-- ### Pagination Area ### -->
                    <nav aria-label="Page navigation example" id="oke">
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
            @foreach ($data as $data1)
            <div class="col-12 col-lg-6">
                    <div class="article-thumbnail mb-100">
                        <img src="/assets/img/artikel/{{ $data1->foto }}" alt="">
                    </div>
                </div>
                <!-- Article Content -->
                <div class="col-12 col-lg-6">
                    <div class="article-content mb-100">
                        <a href="single-post.html" class="post-title">{{ $data1->judul }}</a>
                        <div class="post-meta">
                            <a href="#" class="post-date">{{ $data1->created_at }}</a>
                            <a href="#" class="post-comments"></a>
                        </div>
                        <p>{!! str_limit($data1->konten, 300) !!}</p>
                        <a href="singlepost/{{ $data1->slug }}" class="btn egames-btn mt-50">Baca</a>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
</section>
<!-- ##### Featured Articles Area End ##### -->
@endsection
