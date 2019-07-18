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
    </div>
</div>

<!-- Page heading -->
<div class="container p-t-4 p-b-40">
    <h2 class="f1-l-1 cl2">
        Blog
    </h2>
</div>

<!-- Post -->
<section class="bg0 p-b-55">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10 col-lg-8 p-b-80">

                <div class="row">
                    @foreach ($artikel as $data)
                    <div class="col-sm-6 p-r-25 p-r-15-sr991">
                        <div class="m-b-45">
                            <a href="{{ url('blog-detail/'.$data->slug) }}" class="wrap-pic-w hov1 trans-03">
                                <img src="/assets/img/artikel/{{ $data->foto }}" alt="IMG" style="height:200px">
                            </a>

                            <div class="p-t-16">
                                <h5 class="p-b-5">
                                    <a href="{{ url('blog-detail/'.$data->slug) }}" class="f1-m-3 cl2 hov-cl10 trans-03">
                                        {{ $data->judul }}
                                    </a>
                                </h5>

                                <span class="cl8">
                                    <a href="#" class="f1-s-4 cl8 hov-cl10 trans-03">
                                        {{ $data->kategori->nama_kategori }}
                                    </a>

                                    <span class="f1-s-3 m-rl-3">
                                        -
                                    </span>

                                    @foreach ($data->tag as $tag)
                                        <a href="#" class="f1-s-4 cl8 hov-cl10 trans-03">
                                            #{{ $tag->nama_tag }}
                                        </a>
                                    @endforeach

                                    <span class="f1-s-3 m-rl-3">
                                        -
                                    </span>

                                    <span class="f1-s-3">
                                        {{ $data->created_at }}
                                    </span>
                                </span>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <!-- Pagination -->
                <div class="flex-wr-s-c m-rl--7 p-t-15">
                    {{ $artikel->links() }}
                </div>
            </div>

            <div class="col-md-10 col-lg-4 p-b-80">
                <div class="p-l-10 p-rl-0-sr991">
                    <!-- Most Popular -->
                    <div class="p-b-23">
                        <div class="how2 how2-cl4 flex-s-c">
                            <h3 class="f1-m-2 cl3 tab01-title">
                                Most Popular
                            </h3>
                        </div>

                        <ul class="p-t-35">
                            @foreach ($popular as $data)
                            <li class="flex-wr-sb-s p-b-22">
                                    <div class="size-a-8 flex-c-c borad-3 size-a-8 bg9 f1-m-4 cl0 m-b-6">
                                        >
                                    </div>

                                    <a href="{{ url('blog-detail/'.$data->slug) }}" class="size-w-3 f1-s-7 cl3 hov-cl10 trans-03">
                                        {{ $data->judul }}
                                    </a>
                                </li>
                            @endforeach
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
                            @foreach ($tags as $data)
                                <a href="{{ url('blog-grid/'.$data->slug) }}" class="flex-c-c size-h-2 bo-1-rad-20 bocl12 f1-s-1 cl8 hov-btn2 trans-03 p-rl-20 p-tb-5 m-all-5">
                                    {{ $data->nama_tag }}
                                </a>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
