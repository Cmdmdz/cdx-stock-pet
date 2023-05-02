@extends('customers.layouts.app')

@section('customer')
    @include('customers.components.slider')

    <div class="section section-padding">
        <div class="container">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 mb-n6">

                <div class="col mb-6" data-aos="fade-up" data-aos-duration="1000">
                    <!-- Single CTA Wrapper Start -->
                    <div class="single-cta-wrapper">

                        <!-- CTA Icon Start -->
                        <div class="cta-icon">
                            <i class="ti-truck"></i>
                        </div>
                        <!-- CTA Icon End -->

                        <!-- CTA Content Start -->
                        <div class="cta-content">
                            <h4 class="title">Free Shipping</h4>
                            <p>Free shipping on all order</p>
                        </div>
                        <!-- CTA Content End -->

                    </div>
                    <!-- Single CTA Wrapper End -->
                </div>

                <div class="col mb-6" data-aos="fade-up" data-aos-duration="1100">
                    <!-- Single CTA Wrapper Start -->
                    <div class="single-cta-wrapper">

                        <!-- CTA Icon Start -->
                        <div class="cta-icon">
                            <i class="ti-headphone-alt"></i>
                        </div>
                        <!-- CTA Icon End -->

                        <!-- CTA Content Start -->
                        <div class="cta-content">
                            <h4 class="title">Online Support</h4>
                            <p>Online live support 24/7</p>
                        </div>
                        <!-- CTA Content End -->

                    </div>
                    <!-- Single CTA Wrapper End -->
                </div>

                <div class="col mb-6" data-aos="fade-up" data-aos-duration="1200">
                    <!-- Single CTA Wrapper Start -->
                    <div class="single-cta-wrapper">

                        <!-- CTA Icon Start -->
                        <div class="cta-icon">
                            <i class="ti-bar-chart"></i>
                        </div>
                        <!-- CTA Icon End -->

                        <!-- CTA Content Start -->
                        <div class="cta-content">
                            <h4 class="title">Money Return</h4>
                            <p>Back guarantee under 5 days</p>
                        </div>
                        <!-- CTA Content End -->

                    </div>
                    <!-- Single CTA Wrapper End -->
                </div>

            </div>
        </div>
    </div>

    <!-- Product Section Start -->
    <div class="section position-relative">
        <div class="container">

            <!-- Section Title & Tab Start -->
            <div class="row" data-aos="fade-up" data-aos-duration="1000">
                <!-- Tab Start -->
                <div class="col-12">
                    <ul class="product-tab-nav nav justify-content-center mb-n3 pb-8 title-border-bottom">
                        <li class="nav-item mb-3"><a class="nav-link active" data-bs-toggle="tab"
                                href="#tab-product-all">Bestseller</a></li>
                        <li class="nav-item mb-3"><a class="nav-link" data-bs-toggle="tab"
                                href="#tab-product-featured">Sales popup</a></li>
                        <li class="nav-item mb-3"><a class="nav-link" data-bs-toggle="tab" href="#tab-product-all">Top
                                collection</a></li>
                    </ul>
                </div>
                <!-- Tab End -->
            </div>
            <!-- Section Title & Tab End -->

            <!-- Products Tab Start -->
            <div class="row" data-aos="fade-up" data-aos-duration="1100">
                <div class="col-12">
                    <div class="tab-content">

                        <div class="tab-pane fade show active" id="tab-product-all">
                            <div class="row mb-n8">
                                @foreach ($products as $product)
                                    <div class="col-12 col-sm-6 col-lg-3 product-wrapper mb-8">
                                        <div class="product">
                                            <!-- Thumb Start  -->
                                            <div class="thumb">
                                                <a href="{{ url('/', $product->id) }}" class="image">
                                                    <img class="fit-image" src="{{ asset($product->image) }}"
                                                        alt="{{ $product->name }}" />
                                                </a>
                                                @if ($product->discount)
                                                    <span class="badges">
                                                        <span class="sale">-{{ $product->discount }}%</span>
                                                    </span>
                                                @endif
                                                <div class="action-wrapper">
                                                    <a href="#" class="action quickview" data-bs-toggle="modal"
                                                        data-bs-target="#quick-view" title="Quickview"
                                                        data-product-id="{{ $product->id }}"><i class="ti-plus"></i></a>

                                                    <a href="wishlist.html" class="action wishlist" title="Wishlist"><i
                                                            class="ti-heart"></i></a>
                                                    <a href="cart.html" class="action cart" title="Cart"><i
                                                            class="ti-shopping-cart"></i></a>
                                                </div>
                                            </div>
                                            <!-- Thumb End  -->

                                            <!-- Content Start  -->
                                            <div class="content">
                                                <h5 class="title"><a
                                                        href="{{ url('/', $product->id) }}">{{ $product->name }}</a>
                                                </h5>
                                                <span class="rating">
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                </span>
                                                <span class="price">
                                                    @if ($product->discount)
                                                        <span
                                                            class="new">${{ $product->price - $product->price * ($product->discount / 100) }}</span>
                                                        <span class="old">${{ $product->price }}</span>
                                                    @else
                                                        <span class="new">${{ $product->price }}</span>
                                                    @endif
                                                </span>
                                            </div>
                                            <!-- Content End  -->
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>

                        <div class="tab-pane fade" id="tab-product-featured">
                            <div class="row mb-n8">

                                <!-- Product Start -->
                                <div class="col-12 col-sm-6 col-lg-3 product-wrapper mb-8">
                                    <div class="product">
                                        <!-- Thumb Start  -->
                                        <div class="thumb">
                                            <a href="single-product.html" class="image">
                                                <img class="fit-image" src="assets/images/products/medium-product/5.png"
                                                    alt="Product" />
                                            </a>
                                            <span class="badges">
                                                <span class="sale">-18%</span>
                                            </span>
                                            <div class="action-wrapper">
                                                <a href="#/" class="action quickview" data-bs-toggle="modal"
                                                    data-bs-target="#quick-view"><i class="ti-plus"></i></a>
                                                <a href="wishlist.html" class="action wishlist" title="Wishlist"><i
                                                        class="ti-heart"></i></a>
                                                <a href="cart.html" class="action cart" title="Cart"><i
                                                        class="ti-shopping-cart"></i></a>
                                            </div>
                                        </div>
                                        <!-- Thumb End  -->

                                        <!-- Content Start  -->
                                        <div class="content">
                                            <h5 class="title"><a href="single-product.html">Pet Leaving House</a></h5>
                                            <span class="rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half-o"></i>
                                                <i class="fa fa-star-o"></i>
                                            </span>
                                            <span class="price">
                                                <span class="new">$47.50</span>
                                                <span class="old">$50.00</span>
                                            </span>
                                        </div>
                                        <!-- Content End  -->
                                    </div>
                                </div>
                                <!-- Product End -->

                                <!-- Product Start -->
                                <div class="col-12 col-sm-6 col-lg-3 product-wrapper mb-8">
                                    <div class="product">
                                        <!-- Thumb Start  -->
                                        <div class="thumb">
                                            <a href="single-product.html" class="image">
                                                <img class="fit-image" src="assets/images/products/medium-product/6.png"
                                                    alt="Product" />
                                            </a>
                                            <span class="badges">
                                                <span class="sale">-20%</span>
                                            </span>
                                            <div class="action-wrapper">
                                                <a href="#/" class="action quickview" data-bs-toggle="modal"
                                                    data-bs-target="#quick-view"><i class="ti-plus"></i></a>
                                                <a href="wishlist.html" class="action wishlist" title="Wishlist"><i
                                                        class="ti-heart"></i></a>
                                                <a href="cart.html" class="action cart" title="Cart"><i
                                                        class="ti-shopping-cart"></i></a>
                                            </div>
                                        </div>
                                        <!-- Thumb End  -->

                                        <!-- Content Start  -->
                                        <div class="content">
                                            <h5 class="title"><a href="single-product.html">Pet Leaving House</a></h5>
                                            <span class="rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half-o"></i>
                                                <i class="fa fa-star-o"></i>
                                            </span>
                                            <span class="price">
                                                <span class="new">$58.50</span>
                                                <span class="old">$62.85</span>
                                            </span>
                                        </div>
                                        <!-- Content End  -->
                                    </div>
                                </div>
                                <!-- Product End -->

                                <!-- Product Start -->
                                <div class="col-12 col-sm-6 col-lg-3 product-wrapper mb-8">
                                    <div class="product">
                                        <!-- Thumb Start  -->
                                        <div class="thumb">
                                            <a href="single-product.html" class="image">
                                                <img class="fit-image" src="assets/images/products/medium-product/3.png"
                                                    alt="Product" />
                                            </a>
                                            <span class="badges">
                                                <span class="new">New</span>
                                            </span>
                                            <div class="action-wrapper">
                                                <a href="#/" class="action quickview" data-bs-toggle="modal"
                                                    data-bs-target="#quick-view"><i class="ti-plus"></i></a>
                                                <a href="wishlist.html" class="action wishlist" title="Wishlist"><i
                                                        class="ti-heart"></i></a>
                                                <a href="cart.html" class="action cart" title="Cart"><i
                                                        class="ti-shopping-cart"></i></a>
                                            </div>
                                        </div>
                                        <!-- Thumb End  -->

                                        <!-- Content Start  -->
                                        <div class="content">
                                            <h5 class="title"><a href="single-product.html">Wait, You Need This</a>
                                            </h5>
                                            <span class="rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half-o"></i>
                                                <i class="fa fa-star-o"></i>
                                            </span>
                                            <span class="price">
                                                <span class="new">$90.00</span>
                                            </span>
                                        </div>
                                        <!-- Content End  -->
                                    </div>
                                </div>
                                <!-- Product End -->

                                <!-- Product Start -->
                                <div class="col-12 col-sm-6 col-lg-3 product-wrapper mb-8">
                                    <div class="product">
                                        <!-- Thumb Start  -->
                                        <div class="thumb">
                                            <a href="single-product.html" class="image">
                                                <img class="fit-image" src="assets/images/products/medium-product/7.png"
                                                    alt="Product" />
                                            </a>
                                            <span class="badges">
                                                <span class="new">New</span>
                                            </span>
                                            <div class="action-wrapper">
                                                <a href="#/" class="action quickview" data-bs-toggle="modal"
                                                    data-bs-target="#quick-view"><i class="ti-plus"></i></a>
                                                <a href="wishlist.html" class="action wishlist" title="Wishlist"><i
                                                        class="ti-heart"></i></a>
                                                <a href="cart.html" class="action cart" title="Cart"><i
                                                        class="ti-shopping-cart"></i></a>
                                            </div>
                                        </div>
                                        <!-- Thumb End  -->

                                        <!-- Content Start  -->
                                        <div class="content">
                                            <h5 class="title"><a href="single-product.html">This is the testing</a>
                                            </h5>
                                            <span class="rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half-o"></i>
                                                <i class="fa fa-star-o"></i>
                                            </span>
                                            <span class="price">
                                                <span class="new">$78.50</span>
                                            </span>
                                        </div>
                                        <!-- Content End  -->
                                    </div>
                                </div>
                                <!-- Product End -->

                                <!-- Product Start -->
                                <div class="col-12 col-sm-6 col-lg-3 product-wrapper mb-8">
                                    <div class="product">
                                        <!-- Thumb Start  -->
                                        <div class="thumb">
                                            <a href="single-product.html" class="image">
                                                <img class="fit-image" src="assets/images/products/medium-product/8.png"
                                                    alt="Product" />
                                            </a>
                                            <div class="action-wrapper">
                                                <a href="#/" class="action quickview" data-bs-toggle="modal"
                                                    data-bs-target="#quick-view"><i class="ti-plus"></i></a>
                                                <a href="wishlist.html" class="action wishlist" title="Wishlist"><i
                                                        class="ti-heart"></i></a>
                                                <a href="cart.html" class="action cart" title="Cart"><i
                                                        class="ti-shopping-cart"></i></a>
                                            </div>
                                        </div>
                                        <!-- Thumb End  -->

                                        <!-- Content Start  -->
                                        <div class="content">
                                            <h5 class="title"><a href="single-product.html">Basic Dog Trainning</a>
                                            </h5>
                                            <span class="rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half-o"></i>
                                                <i class="fa fa-star-o"></i>
                                            </span>
                                            <span class="price">
                                                <span class="new">$55.00</span>
                                            </span>
                                        </div>
                                        <!-- Content End  -->
                                    </div>
                                </div>
                                <!-- Product End -->

                                <!-- Product Start -->
                                <div class="col-12 col-sm-6 col-lg-3 product-wrapper mb-8">
                                    <div class="product">
                                        <!-- Thumb Start  -->
                                        <div class="thumb">
                                            <a href="single-product.html" class="image">
                                                <img class="fit-image" src="assets/images/products/medium-product/1.png"
                                                    alt="Product" />
                                            </a>
                                            <span class="badges">
                                                <span class="sale">-18%</span>
                                            </span>
                                            <div class="action-wrapper">
                                                <a href="#/" class="action quickview" data-bs-toggle="modal"
                                                    data-bs-target="#quick-view" title="Quickview"><i
                                                        class="ti-plus"></i></a>
                                                <a href="wishlist.html" class="action wishlist" title="Wishlist"><i
                                                        class="ti-heart"></i></a>
                                                <a href="cart.html" class="action cart" title="Cart"><i
                                                        class="ti-shopping-cart"></i></a>
                                            </div>
                                        </div>
                                        <!-- Thumb End  -->

                                        <!-- Content Start  -->
                                        <div class="content">
                                            <h5 class="title"><a href="single-product.html">An Animal Album</a></h5>
                                            <span class="rating">
                                                <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star-o"></i>
                                            </span>
                                            <span class="price">
                                                <span class="new">$80.50</span>
                                                <span class="old">$85.80</span>
                                            </span>
                                        </div>
                                        <!-- Content End  -->
                                    </div>
                                </div>
                                <!-- Product End -->

                                <!-- Product Start -->
                                <div class="col-12 col-sm-6 col-lg-3 product-wrapper mb-8">
                                    <div class="product">
                                        <!-- Thumb Start  -->
                                        <div class="thumb">
                                            <a href="single-product.html" class="image">
                                                <img class="fit-image" src="assets/images/products/medium-product/2.png"
                                                    alt="Product" />
                                            </a>
                                            <span class="badges">
                                                <span class="sale">-20%</span>
                                            </span>
                                            <div class="action-wrapper">
                                                <a href="#/" class="action quickview" title="Quickview"
                                                    data-bs-toggle="modal" data-bs-target="#quick-view"><i
                                                        class="ti-plus"></i></a>
                                                <a href="wishlist.html" class="action wishlist" title="Wishlist"><i
                                                        class="ti-heart"></i></a>
                                                <a href="cart.html" class="action cart" title="Cart"><i
                                                        class="ti-shopping-cart"></i></a>
                                            </div>
                                        </div>
                                        <!-- Thumb End  -->

                                        <!-- Content Start  -->
                                        <div class="content">
                                            <h5 class="title"><a href="single-product.html">Animal For Life</a></h5>
                                            <span class="rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half-o"></i>
                                                <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star-o"></i>
                                            </span>
                                            <span class="price">
                                                <span class="new">$75.50</span>
                                                <span class="old">$82.85</span>
                                            </span>
                                        </div>
                                        <!-- Content End  -->
                                    </div>
                                </div>
                                <!-- Product End -->

                                <!-- Product Start -->
                                <div class="col-12 col-sm-6 col-lg-3 product-wrapper mb-8">
                                    <div class="product">
                                        <!-- Thumb Start  -->
                                        <div class="thumb">
                                            <a href="single-product.html" class="image">
                                                <img class="fit-image" src="assets/images/products/medium-product/4.png"
                                                    alt="Product" />
                                            </a>
                                            <div class="action-wrapper">
                                                <a href="#/" class="action quickview" data-bs-toggle="modal"
                                                    data-bs-target="#quick-view"><i class="ti-plus"></i></a>
                                                <a href="wishlist.html" class="action wishlist" title="Wishlist"><i
                                                        class="ti-heart"></i></a>
                                                <a href="cart.html" class="action cart" title="Cart"><i
                                                        class="ti-shopping-cart"></i></a>
                                            </div>
                                        </div>
                                        <!-- Thumb End  -->

                                        <!-- Content Start  -->
                                        <div class="content">
                                            <h5 class="title"><a href="single-product.html">Pet Food Corner</a></h5>
                                            <span class="rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half-o"></i>
                                                <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star-o"></i>
                                            </span>
                                            <span class="price">
                                                <span class="new">$105.00</span>
                                            </span>
                                        </div>
                                        <!-- Content End  -->
                                    </div>
                                </div>
                                <!-- Product End -->

                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- Products Tab End -->
        </div>
    </div>
    <!-- Product Section End -->

    <!-- box Section Start -->
    <div class="section section-margin">
        <div class="container">

            <!-- Banners Start -->
            <div class="row mb-n6">

                <!-- Banner Start -->
                <div class="col-md-6 col-12 mb-6" data-aos="fade-up" data-aos-duration="1000">
                    <a href="shop.html" class="banner">
                        <img class="fit-image" src="assets/images/banner/6.png" alt="Banner Image" />
                    </a>
                </div>
                <!-- Banner End -->

                <!-- Banner Start -->
                <div class="col-md-6 col-12 mb-6" data-aos="fade-up" data-aos-duration="1400">
                    <a href="shop.html" class="banner">
                        <img class="fit-image" src="assets/images/banner/7.png" alt="Banner Image" />
                    </a>
                </div>
                <!-- Banner End -->

            </div>
            <!-- Banners End -->

        </div>
    </div>
    <!--  box Section End -->
    <!-- Modal Start  -->
    <div class="modalquickview modal fade" id="quick-view" tabindex="-1" aria-labelledby="quick-view" role="dialog"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <button class="btn close" data-bs-dismiss="modal">×</button>
                <div class="row">
                    <div class="col-md-6 col-12">

                        <!-- Product Details Image Start -->
                        <div class="modal-product-carousel">

                            <!-- Single Product Image Start -->
                            <div class="swiper-container">
                                <div class="swiper-wrapper">
                                    <a class="swiper-slide" href="#">
                                    </a>

                                </div>
                                <!-- Next Previous Button End -->
                            </div>
                            <!-- Single Product Image End -->

                        </div>
                        <!-- Product Details Image End -->

                    </div>
                    <div class="col-md-6 col-12 overflow-hidden position-relative">

                        <!-- Product Summery Start -->
                        <div class="product-summery position-relative">

                            <!-- Product Head Start -->
                            <div class="product-head mb-3">
                                <h2 class="product-title"></h2>
                            </div>
                            <!-- Product Head End -->

                            <!-- Rating Start -->
                            <span class="rating justify-content-start mb-2">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-half-o"></i>
                                <i class="fa fa-star-o"></i>
                            </span>
                            <!-- Rating End -->

                            <!-- Price Box Start -->
                            <div class="price-box mb-2">
                                <span class="regular-price"></span>
                                <span class="old-price"><del></del></span>
                            </div>
                            <!-- Price Box End -->


                            <!-- Product Inventory Start -->
                            <div class="product-inventroy mb-3">
                                <span class="inventroy-title"> <strong></strong></span>
                                <span class="inventory-varient"></span>
                            </div>
                            <!-- Product Inventory End -->

                            <!-- Description Start -->
                            <p class="desc-content mb-5"></p>
                            <!-- Description End -->

                            <!-- Quantity Start -->
                            <div class="quantity d-flex align-items-center justify-content-start mb-5">
                                <span class="me-2"><strong>Qty: </strong></span>
                                <div class="cart-plus-minus">
                                    <input class="cart-plus-minus-box" value="1" type="text">
                                    <div class="dec qtybutton dec-qty"></div>
                                    <div class="inc qtybutton inc-qty"></div>
                                </div>
                            </div>
                            <!-- Quantity End -->

                            <!-- Inventory Start -->
                            <div class="inventory-varient available-stock">
                                <!-- The stock quantity will be updated here -->
                            </div>
                            <!-- Inventory End -->


                            <!-- Cart Button Start -->
                            <div class="cart-btn action-btn mb-6">
                                <div class="action-cart-btn-wrapper d-flex justify-content-start">
                                    <div class="add-to_cart">
                                        <a class="btn btn-primary btn-hover-dark rounded-0" href="#"
                                            data-product-id="" onclick="addToCart(event)">Add to cart</a>

                                    </div>
                                    <a href="wishlist.html" title="Wishlist" class="action"><i class="ti-heart"></i></a>
                                </div>
                            </div>
                            <!-- Cart Button End -->


                            <!-- Social Shear Start -->
                            <div class="social-share">
                                <div class="widget-social justify-content-center mb-6">
                                    <a title="Twitter" href="#/"><i class="icon-social-twitter"></i></a>
                                    <a title="Instagram" href="#/"><i class="icon-social-instagram"></i></a>
                                    <a title="Linkedin" href="#/"><i class="icon-social-linkedin"></i></a>
                                    <a title="Skype" href="#/"><i class="icon-social-skype"></i></a>
                                    <a title="Dribble" href="#/"><i class="icon-social-dribbble"></i></a>
                                </div>
                            </div>
                            <!-- Social Shear End -->

                            <!-- Payment Option Start -->
                            <div class="payment-option mt-4 d-flex justify-content-start">
                                <span><strong>Payment: </strong></span>
                                <a href="#">
                                    <img class="fit-image ms-1" src="assets/images/payment/payment_large.png"
                                        alt="Payment Option Image">
                                </a>
                            </div>
                            <!-- Payment Option End -->

                        </div>
                        <!-- Product Summery End -->

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal End  -->
@endsection
