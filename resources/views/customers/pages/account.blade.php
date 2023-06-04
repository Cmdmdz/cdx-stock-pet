 @extends('customers.layouts.app')

 @section('customer')
     <!-- Breadcrumb Area Start -->
     <div class="section breadcrumb-area bg-bright">
         <div class="container">
             <div class="row">
                 <div class="col-12 text-center">
                     <div class="breadcrumb-wrapper">
                         <h2 class="breadcrumb-title">My Account</h2>
                         <ul>
                             <li><a href="{{url('/')}}">Home</a></li>
                             <li>My Account</li>
                         </ul>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     <!-- Breadcrumb Area End -->

     <!-- My Account Section Start -->
     <div class="section section-margin">
         <div class="container">

             <div class="row">
                 <div class="col-lg-12">

                     <!-- My Account Page Start -->
                     <div class="myaccount-page-wrapper">
                         <div class="row">

                             <!-- My Account Tab Menu Start -->
                             <div class="col-lg-3 col-md-4">
                                 <div class="myaccount-tab-menu nav" role="tablist">
                                     <a href="#dashboad" class="active" data-bs-toggle="tab"><i class="fa fa-dashboard"></i>
                                         Dashboard</a>
                                     <a href="#orders" data-bs-toggle="tab"><i class="fa fa-cart-arrow-down"></i> Orders</a>
                                     <a href="#payment-method" data-bs-toggle="tab"><i class="fa fa-credit-card"></i>
                                         Payment Method</a>
                                     <a href="#address-edit" data-bs-toggle="tab"><i class="fa fa-map-marker"></i>
                                         address</a>
                                     <a href="#account-info" data-bs-toggle="tab"><i class="fa fa-user"></i> Account
                                         Details</a>

                                     <a href="#"
                                         onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i
                                             class="fa fa-sign-out"></i> Logout</a>

                                 </div>
                                 <form id="logout-form" method="POST" action="{{ route('logout') }}"
                                     style="display: none;">
                                     @csrf
                                 </form>
                             </div>
                             <!-- My Account Tab Menu End -->

                             <!-- My Account Tab Content Start -->
                             <div class="col-lg-9 col-md-8">
                                 <div class="tab-content" id="myaccountContent">

                                     <!-- Single Tab Content Start -->
                                     <div class="tab-pane fade show active" id="dashboad" role="tabpanel">
                                         <div class="myaccount-content">
                                             <h3 class="title">Dashboard</h3>
                                             <div class="welcome">
                                                 <p>Hello, <strong>{{ Auth::user()->first_name }}
                                                         {{ Auth::user()->last_name }}</strong> (If Not
                                                     <strong>{{ Auth::user()->first_name }} !</strong>
                                                     <a href="#" class="logout"
                                                         onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                                         Logout
                                                     </a>)
                                                 </p>
                                             </div>

                                             <p class="mb-0">From your account dashboard. you can easily check & view your
                                                 recent orders, manage your shipping and billing addresses and edit your
                                                 password and account details.</p>
                                         </div>
                                     </div>
                                     <!-- Single Tab Content End -->

                                     <!-- Single Tab Content Start -->
                                     <div class="tab-pane fade" id="orders" role="tabpanel">
                                         <div class="myaccount-content">
                                             <h3 class="title">Orders</h3>
                                             <div class="myaccount-table table-responsive text-center">
                                                 <table class="table table-bordered">
                                                     <thead class="thead-light">
                                                         <tr>
                                                             <th>Order</th>
                                                             <th>Date</th>
                                                             <th>Status</th>
                                                             <th>Total</th>
                                                             <th>Action</th>
                                                         </tr>
                                                     </thead>
                                                     <tbody>
                                                         @foreach ($orders as $order)
                                                             <tr>
                                                                 <td>{{ $order->id }}</td>
                                                                 <td>{{ $order->created_at->format('M d, Y') }}</td>
                                                                 <td>{{ ucfirst($order->status) }}</td>
                                                                 <td>${{ number_format($order->total_price, 2) }}</td>
                                                                 <td>
                                                                    <a href="{{ route('cart')}}"
                                                                        class="btn btn btn-dark btn-hover-primary btn-sm rounded-0">View</a>
                                                                </td>
                                                             </tr>
                                                         @endforeach
                                                     </tbody>

                                                 </table>
                                             </div>
                                         </div>
                                     </div>
                                     <!-- Single Tab Content End -->


                                     <!-- Single Tab Content Start -->
                                     <div class="tab-pane fade" id="payment-method" role="tabpanel">
                                         <div class="myaccount-content">
                                             <h3 class="title">Payment Method</h3>
                                             <p class="saved-message">You Can't Saved Your Payment Method yet.</p>
                                         </div>
                                     </div>
                                     <!-- Single Tab Content End -->

                                     <!-- Single Tab Content Start -->
                                     <div class="tab-pane fade" id="address-edit" role="tabpanel">
                                         <div class="myaccount-content">
                                             <h3 class="title">Billing Address</h3>
                                             <address>
                                                 <p><strong>Alex Aya</strong></p>
                                                 <p>1234 Market ##, Suite 900 <br>Lorem Ipsum, ## 12345</p>
                                                 <p>Mobile: (123) 123-456789</p>
                                             </address>
                                             <a href="#" class="btn btn btn-dark btn-hover-primary rounded-0"><i
                                                     class="fa fa-edit me-2"></i>Edit Address</a>
                                         </div>
                                     </div>
                                     <!-- Single Tab Content End -->

                                     <!-- Single Tab Content Start -->
                                     <div class="tab-pane fade" id="account-info" role="tabpanel">
                                         <div class="myaccount-content">
                                             <h3 class="title">Account Details</h3>
                                             <div class="account-details-form">
                                                 <form action="#">
                                                     <div class="row">
                                                         <div class="col-lg-6">
                                                             <div class="single-input-item mb-3">
                                                                 <label for="first-name" class="required mb-2">First
                                                                     Name</label>
                                                                 <input type="text" id="first-name"
                                                                     placeholder="First Name" />
                                                             </div>
                                                         </div>
                                                         <div class="col-lg-6">
                                                             <div class="single-input-item mb-3">
                                                                 <label for="last-name" class="required mb-2">Last
                                                                     Name</label>
                                                                 <input type="text" id="last-name"
                                                                     placeholder="Last Name" />
                                                             </div>
                                                         </div>
                                                     </div>
                                                     <div class="single-input-item mb-3">
                                                         <label for="display-name" class="required mb-2">Display
                                                             Name</label>
                                                         <input type="text" id="display-name"
                                                             placeholder="Display Name" />
                                                     </div>
                                                     <div class="single-input-item mb-3">
                                                         <label for="email" class="required mb-1">Email Addres</label>
                                                         <input type="email" id="email"
                                                             placeholder="Email Address" />
                                                     </div>
                                                     <fieldset>
                                                         <legend>Password change</legend>
                                                         <div class="single-input-item mb-3">
                                                             <label for="current-pwd" class="required mb-2">Current
                                                                 Password</label>
                                                             <input type="password" id="current-pwd"
                                                                 placeholder="Current Password" />
                                                         </div>
                                                         <div class="row mb-n3">
                                                             <div class="col-lg-6">
                                                                 <div class="single-input-item mb-3">
                                                                     <label for="new-pwd" class="required mb-2">New
                                                                         Password</label>
                                                                     <input type="password" id="new-pwd"
                                                                         placeholder="New Password" />
                                                                 </div>
                                                             </div>
                                                             <div class="col-lg-6">
                                                                 <div class="single-input-item mb-3">
                                                                     <label for="confirm-pwd"
                                                                         class="required mb-2">Confirm Password</label>
                                                                     <input type="password" id="confirm-pwd"
                                                                         placeholder="Confirm Password" />
                                                                 </div>
                                                             </div>
                                                         </div>
                                                     </fieldset>
                                                     <div class="single-input-item single-item-button mt-6">
                                                         <button class="btn btn btn-primary btn-hover-dark rounded-0">Save
                                                             Changes</button>
                                                     </div>
                                                 </form>
                                             </div>
                                         </div>
                                     </div> <!-- Single Tab Content End -->

                                 </div>
                             </div>
                             <!-- My Account Tab Content End -->

                         </div>
                     </div>
                     <!-- My Account Page End -->

                 </div>
             </div>

         </div>
     </div>
     <!-- My Account Section End -->
 @endsection
