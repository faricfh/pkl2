@extends('layouts.frontend.frontend')
<!-- Breadcrumb -->
@section('content')
    <!-- ##### Breadcrumb Area Start ##### -->
    <section class="breadcrumb-area bg-img bg-overlay" style="background-image: url('image/banner.jpg');">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <!-- Breadcrumb Text -->
                <div class="col-12">
                    <div class="breadcrumb-text">
                        <h2>Contact</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Breadcrumb Area End ##### -->

    <!-- ##### Contact Area Start ##### -->
    <section class="contact-area section-padding-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="row">
                        <div class="col-12 col-lg-4">
                            <div class="contact-content mb-100">
                                <a href="#" class="mb-50 d-block"><img src="{{ asset('image/logo.png') }}" width="200px" height="200px"></a>
                                <p></p>
                            </div>
                        </div>
                        <div class="col-12 col-lg-4">
                            <div class="contact-content mb-100">
                                <p>Hubungi lah kami jiga ada sesuatu!</p>
                            </div>
                        </div>
                        <div class="col-12 col-lg-4">
                            <div class="contact-content mb-100">
                                <!-- Single Contact Info -->
                                <div class="single-contact-info d-flex align-items-center">
                                    <div class="title">
                                        <p>Address</p>
                                    </div>
                                    <p>Jl Cibaduyut</p>
                                </div>

                                <!-- Single Contact Info -->
                                <div class="single-contact-info d-flex align-items-center">
                                    <div class="title">
                                        <p>Phone</p>
                                    </div>
                                    <p>+62 .........</p>
                                </div>

                                <!-- Single Contact Info -->
                                <div class="single-contact-info d-flex align-items-center">
                                    <div class="title">
                                        <p>E-mail</p>
                                    </div>
                                    <p>admin@gmail.com</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Contact Area End ##### -->
@endsection
