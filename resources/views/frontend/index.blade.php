@extends('layouts.frontend')
@section('content')
<!-- Headline -->
<div class="container">
    <div class="bg0 flex-wr-sb-c p-rl-20 p-tb-8">
        <div class="f2-s-1 p-r-30 size-w-0 m-tb-6 flex-wr-s-c">

        </div>
    </div>
</div>

<!-- Feature post -->
<section class="bg0">
    <div class="container">
        <div class="row m-rl--1">
            <div class="col-md-6 p-rl-1 p-b-2">
                <div class="bg-img1 size-a-3 how1 pos-relative" style="background-image: url(../image/banner10.jpg);">
                    <a href="#" class="dis-block how1-child1 trans-03"></a>
                </div>
            </div>

            <div class="col-md-6 p-rl-1">
                <div class="row m-rl--1">
                    <div class="col-12 p-rl-1 p-b-2">
                        <div class="bg-img1 size-a-4 how1 pos-relative" style="background-image: url(../image/banner1.jpg);">
                            <a href="#" class="dis-block how1-child1 trans-03"></a>
                        </div>
                    </div>

                    <div class="col-sm-6 p-rl-1 p-b-2">
                        <div class="bg-img1 size-a-5 how1 pos-relative" style="background-image: url(../image/banner2.jpg);">
                            <a href="#" class="dis-block how1-child1 trans-03"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Post -->
<section class="bg0 p-t-70">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10 col-lg-8">
                <div class="p-b-20">
                    <!-- Entertainment -->
                    <div class="tab01 p-b-20">
                        <div class="tab01-head how2 how2-cl1 bocl12 flex-s-c m-r-10 m-r-0-sr991">
                            <!-- Brand tab -->
                            <h3 class="f1-m-2 cl12 tab01-title">
                                Adventure
                            </h3>
                        </div>


                        <!-- Tab panes -->
                        <div class="tab-content p-t-35">
                            <!-- - -->
                            <div class="tab-pane fade show active" id="tab1-1" role="tabpanel">
                                <div class="row">
                                    <div class="col-sm-6 p-r-25 p-r-15-sr991">
                                        <!-- Item post -->
                                        <div class="m-b-30">
                                            <a class="wrap-pic-w hov1 trans-03">
                                                <img src="{{ asset('../image/adventure.jpg') }}" alt="IMG">
                                            </a>
                                        </div>
                                    </div>

                                    <div class="col-sm-6 p-r-25 p-r-15-sr991 adventure">
                                        <!-- Item post -->


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Business -->
                    <div class="tab01 p-b-20">
                        <div class="tab01-head how2 how2-cl2 bocl12 flex-s-c m-r-10 m-r-0-sr991">
                            <!-- Brand tab -->
                            <h3 class="f1-m-2 cl13 tab01-title">
                                RPG
                            </h3>
                        </div>


                        <!-- Tab panes -->
                        <div class="tab-content p-t-35">
                            <!-- - -->
                            <div class="tab-pane fade show active" id="tab2-1" role="tabpanel">
                                <div class="row">
                                    <div class="col-sm-6 p-r-25 p-r-15-sr991">
                                        <!-- Item post -->
                                        <div class="m-b-30">
                                            <a class="wrap-pic-w hov1 trans-03">
                                                <img src="{{ asset('../image/rpg.jpg') }}" alt="IMG">
                                            </a>
                                        </div>
                                    </div>

                                    <div class="col-sm-6 p-r-25 p-r-15-sr991 rpg">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Travel -->
                    <div class="tab01 p-b-20">
                        <div class="tab01-head how2 how2-cl3 bocl12 flex-s-c m-r-10 m-r-0-sr991">
                            <!-- Brand tab -->
                            <h3 class="f1-m-2 cl14 tab01-title">
                                FPS
                            </h3>
                        </div>


                        <!-- Tab panes -->
                        <div class="tab-content p-t-35">
                            <!-- - -->
                            <div class="tab-pane fade show active" id="tab3-1" role="tabpanel">
                                <div class="row">
                                    <div class="col-sm-6 p-r-25 p-r-15-sr991">
                                        <!-- Item post -->
                                        <div class="m-b-30">
                                            <a class="wrap-pic-w hov1 trans-03">
                                                <img src="{{ asset('../image/fps.jpg') }}" alt="IMG">
                                            </a>
                                        </div>
                                    </div>

                                    <div class="col-sm-6 p-r-25 p-r-15-sr991 fps">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-10 col-lg-4">
                <div class="p-l-10 p-rl-0-sr991 p-b-20">
                    <!--  -->
                    <div>
                        <div class="how2 how2-cl4 flex-s-c">
                            <h3 class="f1-m-2 cl3 tab01-title">
                                Most Popular
                            </h3>
                        </div>

                        <ul class="p-t-35 most_popular">

                        </ul>
                    </div>

                    <!--  -->
                    <div class="p-t-50">
                        <div class="how2 how2-cl4 flex-s-c">
                            <h3 class="f1-m-2 cl3 tab01-title">
                                Category
                            </h3>
                        </div>

                        <ul class="p-t-35">
                            <li class="how-bor3 p-rl-4 side_kategori">

                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Latest -->
<section class="bg0 p-t-60 p-b-35">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10 col-lg-8 p-b-20">
                <div class="how2 how2-cl4 flex-s-c m-r-10 m-r-0-sr991">
                    <h3 class="f1-m-2 cl3 tab01-title">
                        Latest Articles
                    </h3>
                </div>

                <div class="row p-t-35 latest">

                </div>
            </div>

            <div class="col-md-10 col-lg-4">
                <div class="p-l-10 p-rl-0-sr991 p-b-20">
                    <!-- Tag -->
                    <div class="p-b-55">
                        <div class="how2 how2-cl4 flex-s-c m-b-30">
                            <h3 class="f1-m-2 cl3 tab01-title">
                                Tags
                            </h3>
                        </div>

                        <div class="flex-wr-s-s m-rl--5 tag">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
