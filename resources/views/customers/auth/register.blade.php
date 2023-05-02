@extends('customers.layouts.app')

@section('customer')
    <!-- Breadcrumb Area Start -->
    <div class="section breadcrumb-area bg-bright">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <div class="breadcrumb-wrapper">
                        <h2 class="breadcrumb-title">Create Account</h2>
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li>Create Account</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Area End -->

    <!-- Register Section Start -->
    <div class="section section-margin">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-8 m-auto">
                    <div class="login-wrapper">

                        <!-- Register Title & Content Start -->
                        <div class="section-content text-center mb-6">
                            <h2 class="title mb-2">Create Account</h2>
                        </div>
                        <!-- Register Title & Content End -->

                        <!-- Form Action Start -->
                        <form action="{{ route('register.store') }}" method="post">
                            @csrf

                            <!-- Input First Name Start -->
                            <div class="single-input-item mb-2">
                                <input type="text" placeholder="First Name" name="first_name">
                            </div>
                            <!-- Input First Name End -->

                            <!-- Input Last Name Start -->
                            <div class="single-input-item mb-2">
                                <input type="text" placeholder="Last Name" name="last_name">
                            </div>
                            <!-- Input Last Name End -->

                            <!-- Input Email Start -->
                            <div class="single-input-item mb-2">
                                <input type="email" placeholder="Email" name="email">
                            </div>
                            <!-- Input Email End -->

                            <!-- Input Password Start -->
                            <div class="single-input-item mb-2">
                                <input type="password" placeholder="Password" name="password">
                            </div>
                            <!-- Input Password End -->

                            <!-- Button/Forget Password Start -->
                            <div class="single-input-item">
                                <div class="login-reg-form-meta mb-n3">
                                    <button class="btn btn btn-gray-deep btn-hover-primary mb-3">Create</button>
                                </div>
                            </div>
                            <!-- Button/Forget Password End -->

                        </form>
                        <!-- Form Action End -->

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
<!-- Register Section End -->
