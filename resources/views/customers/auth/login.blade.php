@extends('customers.layouts.app')

@section('customer')
    <!-- Breadcrumb Area Start -->
    <div class="section breadcrumb-area bg-bright">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <div class="breadcrumb-wrapper">
                        <h2 class="breadcrumb-title">Login</h2>
                        <ul>
                            <li><a href="{{url('/')}}">Home</a></li>
                            <li>Login</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Area End -->

    <!-- Login Section Start -->
    <div class="section section-margin">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-8 m-auto">
                    <div class="login-wrapper">

                        <!-- Login Title & Content Start -->
                        <div class="section-content text-center mb-6">
                            <h2 class="title mb-2">Login</h2>
                        </div>
                        <!-- Login Title & Content End -->

                        <!-- Form Action Start -->
                        <form action="{{ route('customer.login') }}" method="post">
                            @csrf

                            <!-- Input Email Start -->
                            <div class="single-input-item mb-2">
                                <input type="email" placeholder="Email or Username" name="email"
                                    value="{{ old('email') }}">
                                @error('email')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <!-- Input Email End -->

                            <!-- Input Password Start -->
                            <div class="single-input-item mb-2">
                                <input type="password" placeholder="Enter your Password" name="password">
                                @error('password')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <!-- Input Password End -->

                            <!-- Button/Forget Password Start -->
                            <div class="single-input-item mb-3">
                                <div class="login-reg-form-meta mb-n3">

                                    <button class="btn btn btn-gray-deep btn-hover-primary mb-3">Sign In</button>
                                    <a href="#" class="forget-pwd mb-3">Forget Password?</a>

                                </div>
                            </div>
                            <!-- Button/Forget Password End -->

                            <!-- Lost Password & Creat New Account Start -->
                            <div class="lost-password">
                                <a href="{{ url('register') }}">Create Account</a>
                            </div>
                            <!-- Lost Password & Creat New Account End -->
                        </form>

                        <!-- Form Action End -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Login Section End -->
@endsection
