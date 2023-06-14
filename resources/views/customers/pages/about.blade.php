@extends('customers.layouts.app')

@section('customer')
    <!-- Breadcrumb Area Start -->
    <div class="section breadcrumb-area bg-bright">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <div class="breadcrumb-wrapper">
                        <h2 class="breadcrumb-title">About Us</h2>
                        <ul>
                            <li><a href="{{ url('/') }}">Home</a></li>
                            <li>About Us</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Area End -->

    <!-- About Section Start -->
    <div class="section section-margin">
        <div class="container">
            <div class="row mb-n6">
                <div class="col-md-6 pe-lg-9 pe-3 mb-6" data-aos="fade-up" data-aos-duration="1000">
                    <!-- About Thumb Start -->
                    <div class="about-thumb">
                        <img class="fit-image" src="assets/images/about/1.png" alt="About Image">
                    </div>
                    <!-- About Thumb End -->
                </div>
                <div class="col-md-6 align-self-center mb-6" data-aos="fade-up" data-aos-duration="1500">
                    <!-- About Content Start -->
                    <div class="about-content">
                        <h2 class="title">About Amber</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipis elit, sed do eiusmod tempor incididu ut labore et
                            dolore magna aliqua. Ut enim ad minim quis nostrud exercitat ullamco laboris nisi ut aliquip ex
                            ea commodo consequat.</p>
                        <ul class="about-content-list">
                            <li><span><i class="ti-angle-double-right"></i></span> There are many variation passages</li>
                            <li><span><i class="ti-angle-double-right"></i></span> Contrary to popular belief not simply
                            </li>
                            <li><span><i class="ti-angle-double-right"></i></span> But I must explain to you how all this
                            </li>
                        </ul>
                        <a href="contact.html" class="btn btn-primary btn-hover-dark">Contact Us</a>
                    </div>
                    <!-- About Content End -->
                </div>
            </div>
        </div>
    </div>
    <!-- About Section End -->

    <!-- Testimonial Section Start -->
    <div class="section bg-bright section-padding">

    </div>
    <!-- Testimonial Section End -->

@endsection
