@extends('customers.layouts.app')

@section('customer')
    <!-- Breadcrumb Area Start -->
    <div class="section breadcrumb-area bg-bright">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <div class="breadcrumb-wrapper">
                        <h2 class="breadcrumb-title">Shop </h2>
                        <ul>
                            <li><a href="{{ url('/') }}">Home</a></li>
                            <li>Shop </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Area End -->

    <!-- Shop Section Start -->
    <div class="section section-margin">
        <div class="container">
            <div class="row">
                <div class="col-12">

                    <!--shop toolbar start-->
                    <div class="shop_toolbar_wrapper flex-column flex-md-row p-2 mb-8 border">

                        <!-- Shop Top Bar Left start -->
                        <div class="shop-top-bar-left">

                            <div class="shop_toolbar_btn">
                                <button data-role="grid_4" type="button" class="active btn-grid-4" title="Grid"><i
                                        class="ti-layout-grid4-alt"></i></button>
                                <button data-role="grid_list" type="button" class="btn-list" title="List"><i
                                        class="ti-align-justify"></i></button>
                            </div>
                            <div class="shop-top-show">
                                <span>Showing 1–12 of 39 results</span>
                            </div>

                        </div>
                        <!-- Shop Top Bar Left end -->

                        <!-- Shopt Top Bar Right Start -->
                        <div class="shop-top-bar-right">

                            <h4 class="title me-2">Short By: </h4>

                            <div class="shop-short-by">
                                <select class="nice-select" aria-label=".form-select-sm example">
                                    <option selected>Short by Default</option>
                                    <option value="1">Short by Popularity</option>
                                    <option value="2">Short by Rated</option>
                                    <option value="3">Short by Latest</option>
                                    <option value="3">Short by Price</option>
                                    <option value="3">Short by Price</option>
                                </select>
                            </div>
                        </div>
                        <!-- Shopt Top Bar Right End -->

                    </div>
                    <!--shop toolbar end-->

                    <!-- Shop Wrapper Start -->
                    <div class="row shop_wrapper grid_4">

                        <!-- Single Product Start -->
                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 product">
                            <div class="product-inner">
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
                                            data-bs-target="#quick-view" title="Quickview"><i class="ti-plus"></i></a>
                                        <a href="wishlist.html" class="action wishlist" title="Wishlist"><i
                                                class="ti-heart"></i></a>
                                        <a href="cart.html" class="action cart" title="Cart"><i
                                                class="ti-shopping-cart"></i></a>
                                    </div>
                                </div>
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
                                    <p>It is a long established fact that a reader will be distracted by the readable
                                        content of a page when looking at its layout. The point of using Lorem Ipsum is that
                                        it has a more-or-less normal distribution of letters, as opposed to using 'Content
                                        here, content here', making it look like readable English.</p>
                                    <!-- Cart Button Start -->
                                    <div class="cart-btn action-btn">
                                        <div class="action-cart-btn-wrapper d-flex">
                                            <div class="add-to_cart">
                                                <a class="btn btn-primary btn-hover-dark rounded-0" href="cart.html">Add to
                                                    cart</a>
                                            </div>
                                            <a href="wishlist.html" title="Wishlist" class="action"><i
                                                    class="ti-heart"></i></a>
                                            <a href="#/" class="action quickview" data-bs-toggle="modal"
                                                data-bs-target="#quick-view" title="Quickview"><i class="ti-plus"></i></a>
                                        </div>
                                    </div>
                                    <!-- Cart Button End -->
                                </div>
                            </div>
                        </div>
                        <!-- Single Product End -->

                        <!-- Single Product Start -->
                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 product">
                            <div class="product-inner">
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
                                <div class="content">
                                    <h5 class="title"><a href="single-product.html">Wait, You Need This</a></h5>
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
                                    <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium
                                        voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint
                                        occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt
                                        mollitia animi, id est laborum et dolorum fuga.</p>
                                    <!-- Cart Button Start -->
                                    <div class="cart-btn action-btn">
                                        <div class="action-cart-btn-wrapper d-flex">
                                            <div class="add-to_cart">
                                                <a class="btn btn-primary btn-hover-dark rounded-0" href="cart.html">Add
                                                    to cart</a>
                                            </div>
                                            <a href="wishlist.html" title="Wishlist" class="action"><i
                                                    class="ti-heart"></i></a>
                                            <a href="#/" class="action quickview" data-bs-toggle="modal"
                                                data-bs-target="#quick-view" title="Quickview"><i
                                                    class="ti-plus"></i></a>
                                        </div>
                                    </div>
                                    <!-- Cart Button End -->
                                </div>
                            </div>
                        </div>
                        <!-- Single Product End -->

                        <!-- Single Product Start -->
                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 product">
                            <div class="product-inner">
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
                                    <p>On the other hand, we denounce with righteous indignation and dislike men who are so
                                        beguiled and demoralized by the charms of pleasure of the moment, so blinded by
                                        desire, that they cannot foresee the pain and trouble that are bound to ensue; and
                                        equal blame belongs to those who fail in their duty through weakness of will</p>
                                    <!-- Cart Button Start -->
                                    <div class="cart-btn action-btn">
                                        <div class="action-cart-btn-wrapper d-flex">
                                            <div class="add-to_cart">
                                                <a class="btn btn-primary btn-hover-dark rounded-0" href="cart.html">Add
                                                    to cart</a>
                                            </div>
                                            <a href="wishlist.html" title="Wishlist" class="action"><i
                                                    class="ti-heart"></i></a>
                                            <a href="#/" class="action quickview" data-bs-toggle="modal"
                                                data-bs-target="#quick-view" title="Quickview"><i
                                                    class="ti-plus"></i></a>
                                        </div>
                                    </div>
                                    <!-- Cart Button End -->
                                </div>
                            </div>
                        </div>
                        <!-- Single Product End -->

                        <!-- Single Product Start -->
                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 product">
                            <div class="product-inner">
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

                                    <div class="countdown-area">
                                        <div class="countdown-wrapper" data-countdown="2028/12/28"></div>
                                    </div>
                                </div>
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
                                    <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a
                                        piece of classical Latin literature from 45 BC, making it over 2000 years old.
                                        Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia,</p>
                                    <!-- Cart Button Start -->
                                    <div class="cart-btn action-btn">
                                        <div class="action-cart-btn-wrapper d-flex">
                                            <div class="add-to_cart">
                                                <a class="btn btn-primary btn-hover-dark rounded-0" href="cart.html">Add
                                                    to cart</a>
                                            </div>
                                            <a href="wishlist.html" title="Wishlist" class="action"><i
                                                    class="ti-heart"></i></a>
                                            <a href="#/" class="action quickview" data-bs-toggle="modal"
                                                data-bs-target="#quick-view" title="Quickview"><i
                                                    class="ti-plus"></i></a>
                                        </div>
                                    </div>
                                    <!-- Cart Button End -->
                                </div>
                            </div>
                        </div>
                        <!-- Single Product End -->

                        <!-- Single Product Start -->
                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 product">
                            <div class="product-inner">
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
                                    <p>A long established fact that a reader will be distracted by the readable content of a
                                        page when looking at its layout. The point of using Lorem Ipsum is that it has a
                                        more-or-less normal...</p>
                                    <!-- Cart Button Start -->
                                    <div class="cart-btn action-btn">
                                        <div class="action-cart-btn-wrapper d-flex">
                                            <div class="add-to_cart">
                                                <a class="btn btn-primary btn-hover-dark rounded-0" href="cart.html">Add
                                                    to cart</a>
                                            </div>
                                            <a href="wishlist.html" title="Wishlist" class="action"><i
                                                    class="ti-heart"></i></a>
                                            <a href="#/" class="action quickview" data-bs-toggle="modal"
                                                data-bs-target="#quick-view" title="Quickview"><i
                                                    class="ti-plus"></i></a>
                                        </div>
                                    </div>
                                    <!-- Cart Button End -->
                                </div>
                            </div>
                        </div>
                        <!-- Single Product End -->

                        <!-- Single Product Start -->
                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 product">
                            <div class="product-inner">
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
                                <div class="content">
                                    <h5 class="title"><a href="single-product.html">This is the testing</a></h5>
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
                                    <p>As opposed to using 'Content here, content here', making it look like readable
                                        English. Many desktop publishing packages and web page editors now use Lorem Ipsum
                                        as their default model text, and a search for...</p>
                                    <!-- Cart Button Start -->
                                    <div class="cart-btn action-btn">
                                        <div class="action-cart-btn-wrapper d-flex">
                                            <div class="add-to_cart">
                                                <a class="btn btn-primary btn-hover-dark rounded-0" href="cart.html">Add
                                                    to cart</a>
                                            </div>
                                            <a href="wishlist.html" title="Wishlist" class="action"><i
                                                    class="ti-heart"></i></a>
                                            <a href="#/" class="action quickview" data-bs-toggle="modal"
                                                data-bs-target="#quick-view" title="Quickview"><i
                                                    class="ti-plus"></i></a>
                                        </div>
                                    </div>
                                    <!-- Cart Button End -->
                                </div>
                            </div>
                        </div>
                        <!-- Single Product End -->

                        <!-- Single Product Start -->
                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 product">
                            <div class="product-inner">
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
                                <div class="content">
                                    <h5 class="title"><a href="single-product.html">Basic Dog Trainning</a></h5>
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
                                    <p>There are many variations of passages of lorem ipsum, but the majority have suffered
                                        alteration in some form, by injected humour, or randomised words which don't look
                                        even slightly believable. If you are going to use a passage of Lorem Ipsum, you need
                                        to be sure there isn't anything embarrassing hidden in the middle of text.</p>
                                    <!-- Cart Button Start -->
                                    <div class="cart-btn action-btn">
                                        <div class="action-cart-btn-wrapper d-flex">
                                            <div class="add-to_cart">
                                                <a class="btn btn-primary btn-hover-dark rounded-0" href="cart.html">Add
                                                    to cart</a>
                                            </div>
                                            <a href="wishlist.html" title="Wishlist" class="action"><i
                                                    class="ti-heart"></i></a>
                                            <a href="#/" class="action quickview" data-bs-toggle="modal"
                                                data-bs-target="#quick-view" title="Quickview"><i
                                                    class="ti-plus"></i></a>
                                        </div>
                                    </div>
                                    <!-- Cart Button End -->
                                </div>
                            </div>
                        </div>
                        <!-- Single Product End -->

                        <!-- Single Product Start -->
                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 product">
                            <div class="product-inner">
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
                                    <p>There are many variations of passages of lorem ipsum, but the majority have suffered
                                        alteration in some form, by injected humour, or randomised words which don't look
                                        even slightly believable. If you are going to use a passage of Lorem Ipsum, you need
                                        to be sure there isn't anything embarrassing hidden in the middle of text.</p>
                                    <!-- Cart Button Start -->
                                    <div class="cart-btn action-btn">
                                        <div class="action-cart-btn-wrapper d-flex">
                                            <div class="add-to_cart">
                                                <a class="btn btn-primary btn-hover-dark rounded-0" href="cart.html">Add
                                                    to cart</a>
                                            </div>
                                            <a href="wishlist.html" title="Wishlist" class="action"><i
                                                    class="ti-heart"></i></a>
                                            <a href="#/" class="action quickview" data-bs-toggle="modal"
                                                data-bs-target="#quick-view" title="Quickview"><i
                                                    class="ti-plus"></i></a>
                                        </div>
                                    </div>
                                    <!-- Cart Button End -->
                                </div>
                            </div>
                        </div>
                        <!-- Single Product End -->

                        <!-- Single Product Start -->
                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 product">
                            <div class="product-inner">
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
                                <div class="content">
                                    <h5 class="title"><a href="single-product.html">Basic Dog Trainning</a></h5>
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
                                    <p>On the other hand, we denounce with righteous indignation and dislike men who are so
                                        beguiled and demoralized by the charms of pleasure of the moment, so blinded by
                                        desire, that they cannot foresee the pain and trouble that are bound to ensue; and
                                        equal blame belongs to those who fail in their duty through weakness of will</p>
                                    <!-- Cart Button Start -->
                                    <div class="cart-btn action-btn">
                                        <div class="action-cart-btn-wrapper d-flex">
                                            <div class="add-to_cart">
                                                <a class="btn btn-primary btn-hover-dark rounded-0" href="cart.html">Add
                                                    to cart</a>
                                            </div>
                                            <a href="wishlist.html" title="Wishlist" class="action"><i
                                                    class="ti-heart"></i></a>
                                            <a href="#/" class="action quickview" data-bs-toggle="modal"
                                                data-bs-target="#quick-view" title="Quickview"><i
                                                    class="ti-plus"></i></a>
                                        </div>
                                    </div>
                                    <!-- Cart Button End -->
                                </div>
                            </div>
                        </div>
                        <!-- Single Product End -->

                        <!-- Single Product Start -->
                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 product">
                            <div class="product-inner">
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
                                            data-bs-target="#quick-view" title="Quickview"><i class="ti-plus"></i></a>
                                        <a href="wishlist.html" class="action wishlist" title="Wishlist"><i
                                                class="ti-heart"></i></a>
                                        <a href="cart.html" class="action cart" title="Cart"><i
                                                class="ti-shopping-cart"></i></a>
                                    </div>
                                </div>
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
                                    <p>It is a long established fact that a reader will be distracted by the readable
                                        content of a page when looking at its layout. The point of using Lorem Ipsum is that
                                        it has a more-or-less normal distribution of letters, as opposed to using 'Content
                                        here, content here', making it look like readable English.</p>
                                    <!-- Cart Button Start -->
                                    <div class="cart-btn action-btn">
                                        <div class="action-cart-btn-wrapper d-flex">
                                            <div class="add-to_cart">
                                                <a class="btn btn-primary btn-hover-dark rounded-0" href="cart.html">Add
                                                    to cart</a>
                                            </div>
                                            <a href="wishlist.html" title="Wishlist" class="action"><i
                                                    class="ti-heart"></i></a>
                                            <a href="#/" class="action quickview" data-bs-toggle="modal"
                                                data-bs-target="#quick-view" title="Quickview"><i
                                                    class="ti-plus"></i></a>
                                        </div>
                                    </div>
                                    <!-- Cart Button End -->
                                </div>
                            </div>
                        </div>
                        <!-- Single Product End -->

                        <!-- Single Product Start -->
                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 product">
                            <div class="product-inner">
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
                                    <p>Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit
                                        laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure
                                        reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur.</p>
                                    <!-- Cart Button Start -->
                                    <div class="cart-btn action-btn">
                                        <div class="action-cart-btn-wrapper d-flex">
                                            <div class="add-to_cart">
                                                <a class="btn btn-primary btn-hover-dark rounded-0" href="cart.html">Add
                                                    to cart</a>
                                            </div>
                                            <a href="wishlist.html" title="Wishlist" class="action"><i
                                                    class="ti-heart"></i></a>
                                            <a href="#/" class="action quickview" data-bs-toggle="modal"
                                                data-bs-target="#quick-view" title="Quickview"><i
                                                    class="ti-plus"></i></a>
                                        </div>
                                    </div>
                                    <!-- Cart Button End -->
                                </div>
                            </div>
                        </div>
                        <!-- Single Product End -->

                        <!-- Single Product Start -->
                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 product">
                            <div class="product-inner">
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
                                    <p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo
                                        minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis
                                        dolor repellendus.</p>
                                    <!-- Cart Button Start -->
                                    <div class="cart-btn action-btn">
                                        <div class="action-cart-btn-wrapper d-flex">
                                            <div class="add-to_cart">
                                                <a class="btn btn-primary btn-hover-dark rounded-0" href="cart.html">Add
                                                    to cart</a>
                                            </div>
                                            <a href="wishlist.html" title="Wishlist" class="action"><i
                                                    class="ti-heart"></i></a>
                                            <a href="#/" class="action quickview" data-bs-toggle="modal"
                                                data-bs-target="#quick-view" title="Quickview"><i
                                                    class="ti-plus"></i></a>
                                        </div>
                                    </div>
                                    <!-- Cart Button End -->
                                </div>
                            </div>
                        </div>
                        <!-- Single Product End -->

                    </div>
                    <!-- Shop Wrapper End -->

                    <!--shop toolbar start-->
                    <div class="shop_toolbar_wrapper justify-content-center mt-10">

                        <!-- Shopt Top Bar Right Start -->
                        <div class="shop-top-bar-right">
                            <nav>
                                <ul class="pagination">
                                    <li class="page-item"><a class="page-link active" href="#/">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#/">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#/">3</a></li>
                                    <li class="page-item">
                                        <a class="page-link rounded-0" href="#/" aria-label="Next">
                                            <span aria-hidden="true">&raquo;</span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <!-- Shopt Top Bar Right End -->

                    </div>
                    <!--shop toolbar end-->

                </div>
            </div>
        </div>
    </div>
    <!-- Shop Section End -->
@endsection
