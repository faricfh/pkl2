@extends('layouts.frontend')
<!-- Breadcrumb -->
@section('content')
<div class="container">
    <div class="headline bg0 flex-wr-sb-c p-rl-20 p-tb-8">
        <div class="f2-s-1 p-r-30 m-tb-6">
            <a href="/" class="breadcrumb-item f1-s-3 cl9">
                Home
            </a>

            <span class="breadcrumb-item f1-s-3 cl9">
                Contact Us
            </span>
        </div>
    </div>
</div>

<!-- Page heading -->
<div class="container p-t-4 p-b-40">
    <h2 class="f1-l-1 cl2">
        Contact Us
    </h2>
</div>

<!-- Content -->
<section class="bg0 p-b-60">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-7 col-lg-8 p-b-80">
                <div class="p-r-10 p-r-0-sr991">
                   hubungi kami +62-881-774-9791
                </div>
            </div>

            <!-- Sidebar -->
            <div class="col-md-5 col-lg-4 p-b-80">
                <div class="p-l-10 p-rl-0-sr991">
                    <!-- Popular Posts -->
                    <div>
                        <div class="how2 how2-cl4 flex-s-c">
                            <h3 class="f1-m-2 cl3 tab01-title">
                                Popular Post
                            </h3>
                        </div>

                        <ul class="p-t-35 popular_post">

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
