@extends('customers.layouts.app')

@section('customer')
    <!-- Breadcrumb Area Start -->
    <div class="section breadcrumb-area bg-bright">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <div class="breadcrumb-wrapper">
                        <h2 class="breadcrumb-title">Checkout</h2>
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li>Checkout</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Area End -->

    <!-- Checkout Section Start -->
    <div class="section section-margin">
        <div class="container">

            <div class="row mb-n4">
                <div class="col-lg-6 col-12 mb-4">

                    <!-- Checkbox Form Start -->
                    <div class="checkbox-form">
                        <!-- Checkbox Form Title Start -->
                        <h3 class="title">Billing Details</h3>
                        <!-- Checkbox Form Title End -->

                        <div class="row">

                            <!-- Select Country Name Start -->
                            <div class="col-md-12 mb-6">
                                <div class="country-select">
                                    <label>Country <span class="required">*</span></label>
                                    <select class="myniceselect nice-select wide rounded-0" name="country">
                                        <option data-display="th">Thailand</option>
                                        <option value="uk">United Kingdom</option>
                                        <option value="rou">Romania</option>
                                        <option value="fr">France</option>
                                        <option value="de">Germany</option>
                                        <option value="aus">Australia</option>
                                    </select>
                                </div>
                            </div>
                            <!-- Select Country Name End -->

                            <!-- First Name Input Start -->
                            <div class="col-md-6">
                                <div class="checkout-form-list">
                                    <label>First Name <span class="required">*</span></label>
                                    <input placeholder="" type="text" name="first_name">
                                </div>
                            </div>
                            <!-- First Name Input End -->

                            <!-- Last Name Input Start -->
                            <div class="col-md-6">
                                <div class="checkout-form-list">
                                    <label>Last Name <span class="required">*</span></label>
                                    <input placeholder="" type="text" name="last_name">
                                </div>
                            </div>
                            <!-- Last Name Input End -->

                            <!-- Company Name Input Start -->
                            <div class="col-md-12">
                                <div class="checkout-form-list">
                                    <label>Company Name</label>
                                    <input placeholder="" type="text" name="company_name">
                                </div>
                            </div>
                            <!-- Company Name Input End -->

                            <!-- Address Input Start -->
                            <div class="col-md-12">
                                <div class="checkout-form-list">
                                    <label>Address <span class="required">*</span></label>
                                    <input placeholder="Street address" type="text" name="address">
                                </div>
                            </div>
                            <!-- Address Input End -->

                            <!-- Optional Text Input Start -->
                            <div class="col-md-12">
                                <div class="checkout-form-list">
                                    <input placeholder="Apartment, suite, unit etc. (optional)" type="text" name="apartment">
                                </div>
                            </div>
                            <!-- Optional Text Input End -->

                            <!-- Town or City Name Input Start -->
                            <div class="col-md-12">
                                <div class="checkout-form-list">
                                    <label>Town / City <span class="required">*</span></label>
                                    <input type="text" name="city">
                                </div>
                            </div>
                            <!-- Town or City Name Input End -->

                            <!-- State or Country Input Start -->
                            <div class="col-md-6">
                                <div class="checkout-form-list">
                                    <label>State / County <span class="required">*</span></label>
                                    <input placeholder="" type="text" name="state">
                                </div>
                            </div>
                            <!-- State or Country Input End -->

                            <!-- Postcode or Zip Input Start -->
                            <div class="col-md-6">
                                <div class="checkout-form-list">
                                    <label>Postcode / Zip <span class="required">*</span></label>
                                    <input placeholder="" type="text" name="postcode">
                                </div>
                            </div>
                            <!-- Postcode or Zip Input End -->

                            <!-- Email Address Input Start -->
                            <div class="col-md-6">
                                <div class="checkout-form-list">
                                    <label>Email Address <span class="required">*</span></label>
                                    <input placeholder="" type="email" name="email">
                                </div>
                            </div>
                            <!-- Email Address Input End -->

                            <!-- Phone Number Input Start -->
                            <div class="col-md-6">
                                <div class="checkout-form-list">
                                    <label>Phone <span class="required">*</span></label>
                                    <input type="text" name="phone">
                                </div>
                            </div>
                            <!-- Phone Number Input End -->

                        </div>
                    </div>
                    <!-- Checkbox Form End -->

                </div>

                <div class="col-lg-6 col-12 mb-4">

                    <!-- Your Order Area Start -->
                    <div class="your-order-area border">

                        <!-- Title Start -->
                        <h3 class="title">Your order</h3>
                        <!-- Title End -->

                        <!-- Your Order Table Start -->
                        <div class="your-order-table table-responsive">
                            <table class="table">

                                <!-- Table Head Start -->
                                <thead>
                                <tr class="cart-product-head">
                                    <th class="cart-product-name text-start">Product</th>
                                    <th class="cart-product-total text-end">Total</th>
                                </tr>
                                </thead>
                                <!-- Table Head End -->

                                <tbody>
                                @foreach($order->orderItems as $item)
                                    <tr class="cart_item">
                                        <td class="cart-product-name text-start ps-0">
                                            {{ $item->product->name }}<strong class="product-quantity"> × {{ $item->quantity }}</strong>
                                        </td>
                                        <td class="cart-product-total text-end pe-0">
                                            <span class="amount">{{ number_format($item->total_price_item, 2) }}</span>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>

                                <tfoot>

                                <tr class="order-total">
                                    <th class="text-start ps-0">Order Total</th>
                                    <td class="text-end pe-0"><strong><span class="amount">{{ number_format($order->total_price, 2) }}</span></strong></td>
                                </tr>
                                </tfoot>


                            </table>
                        </div>
                        <!-- Your Order Table End -->

                        <!-- Payment Accordion Order Button Start -->
                        <div class="payment-accordion-order-button">
                            <div class="payment-accordion">
                                <div class="single-payment">
                                    <h5 class="panel-title mb-3">
                                        <a class="collapse-off" data-bs-toggle="collapse" href="#collapseExample-3" aria-expanded="false" aria-controls="collapseExample-3">
                                            Paypal.
                                        </a>
                                    </h5>
                                    <div class="collapse" id="collapseExample-3">
                                        <div class="card card-body rounded-0">
                                            {{ number_format($order->total_price, 2) }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="order-button-payment">
                                <button id="updateUserButton" class="btn btn-primary btn-hover-secondary rounded-0 w-100">Place Order</button>
                            </div>
                        </div>
                        <!-- Payment Accordion Order Button End -->
                    </div>
                    <!-- Your Order Area End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Checkout Section End -->
@endsection
