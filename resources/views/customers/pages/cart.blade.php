@extends('customers.layouts.app')

@section('customer')
    <!-- Breadcrumb Area Start -->
    <div class="section breadcrumb-area bg-bright">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <div class="breadcrumb-wrapper">
                        <h2 class="breadcrumb-title">Order Item</h2>
                        <ul>
                            <li><a href="{{ url('/') }}">Home</a></li>
                            <li>Order Item</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Area End -->

    <!-- Shopping Cart Section Start -->
    <div class="section section-margin">
        <div class="container">

            <div class="row">
                <div class="col-12">
                        <!-- Cart Table Start -->
                        <div class="cart-table table-responsive">
                            <table class="table table-bordered">
                                <!-- Table Head Start -->
                                <thead>
                                <tr>
                                    <th class="pro-thumbnail">Image</th>
                                    <th class="pro-title">Product</th>
                                    <th class="pro-price">Price</th>
                                    <th class="pro-discount">discount</th>
                                    <th class="pro-quantity">Quantity</th>
                                    <th class="pro-subtotal">Total</th>
                                    <th class="pro-remove">Remove</th>
                                </tr>
                                </thead>
                                <!-- Table Head End -->

                                <!-- Table Body Start -->
                                <tbody>
                                @if($order && count($order->orderItems) > 0)
                                    @foreach ($order->orderItems as $item)
                                        <tr>
                                            <td class="pro-thumbnail"><a href="#"><img class="fit-image"
                                                                                       src="{{ asset($item->product->image) }}"
                                                                                       alt="Product"/></a></td>
                                            <td class="pro-title"><a href="#">{{ $item->product->name }}</a></td>
                                            <td class="pro-price">
                                                <span>${{ number_format($item->product->price, 2) }}</span>
                                            </td>
                                            <td class="pro-discount">
                                                <span>{{ $item->product->discount }}%</span>
                                            </td>
                                            <td class="pro-quantity">
                                               <span>{{ $item->quantity }}</span>
                                            </td>
                                            <td class="pro-subtotal">
                                                <span>${{ number_format($item->total_price_item, 2) }}</span></td>
                                            <td class="pro-remove"><a href="{{ route('delete-order', ['id' => $item->id]) }}"><i class="ti-trash"></i></a></td>
                                        </tr>
                                    @endforeach
                                @else
                                    <tr>
                                        <td colspan="6">{{ $message ?? 'No items in cart.' }}</td>
                                    </tr>
                                @endif
                                </tbody>
                            </table>
                        </div>
                        <!-- Cart Table End -->


                        <!-- Cart Button Start -->
                        <div class="cart-button-section mb-n4">

                            <!-- Cart Button left Side Start -->
                            <div class="cart-btn-lef-side mb-4">
                                <a href="{{route('customer.view')}}" class="btn btn btn-gray-deep btn-hover-primary">Continue
                                    Shopping</a>
                            </div>
                            <!-- Cart Button left Side End -->

                            <!-- Cart Button Right Side Start -->
                            <div class="cart-btn-right-right mb-4">
                                <a href="{{route('order.clearCart')}}" class="btn btn btn-gray-deep btn-hover-primary">Clear Shopping Cart</a>
                            </div>
                            <!-- Cart Button Right Side End -->

                        </div>
                        <!-- Cart Button End -->
                </div>
            </div>

            <div class="row mt-10">
                <div class="col-lg-6 me-0 ms-auto">

                    <!-- Cart Calculation Area Start -->
                    <div class="cart-calculator-wrapper">

                        <!-- Cart Calculate Items Start -->
                        <div class="cart-calculate-items">

                            <!-- Cart Calculate Items Title Start -->
                            <h3 class="title">Cart Totals</h3>
                            <!-- Cart Calculate Items Title End -->

                            <!-- Responsive Table Start -->
                            <div class="table-responsive">
                                <table class="table">
                                    @if($order && count($order->orderItems) > 0)
                                    <tr>
                                        <td>Sub Total</td>
                                        <td>{{$order->total_price}}</td>
                                    </tr>
                                    <tr>
                                        <td>Shipping</td>
                                        <td>Free only</td>
                                    </tr>
                                    <tr class="total">
                                        <td>Total</td>
                                        <td class="total-amount">{{$order->total_price}}</td>
                                    </tr>
                                    @else
                                        <tr>
                                            <td>Sub Total</td>
                                            <td>$0</td>
                                        </tr>
                                        <tr>
                                            <td>Shipping</td>
                                            <td>Free only</td>
                                        </tr>
                                        <tr class="total">
                                            <td>Total</td>
                                            <td class="total-amount">$0</td>
                                        </tr>
                                    @endif
                                </table>

                            </div>
                            <!-- Responsive Table End -->

                        </div>
                        <!-- Cart Calculate Items End -->

                        <!-- Cart Checktout Button Start -->
                        <a href="{{url('/checkout')}}" class="btn btn btn-gray-deep btn-hover-primary mt-6">Proceed To
                            Checkout</a>
                        <!-- Cart Checktout Button End -->

                    </div>
                    <!-- Cart Calculation Area End -->

                </div>
            </div>

        </div>
    </div>
    <!-- Shopping Cart Section End -->
@endsection
