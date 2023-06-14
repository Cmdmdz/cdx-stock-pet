@extends('customers.layouts.app')

@section('customer')
    <div class="section breadcrumb-area bg-bright">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <div class="breadcrumb-wrapper">
                        <h2 class="breadcrumb-title">Contact Us</h2>
                        <ul>
                            <li><a href="{{ url('/') }}">Home</a></li>
                            <li>Contact Us</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Contact Us Section Start -->
    <div class="section section-margin">
        <div class="container">

            <div class="row mb-n10">
                <div class="col-12 col-lg-6 mb-10 order-2 order-lg-1" data-aos="fade-up" data-aos-duration="1000">

                    <!-- Section Title Start -->
                    <div class="contact-title pb-3">
                        <h2 class="title">Get in Touch</h2>
                    </div>
                    <!-- Section Title End -->

                    <!-- Contact Form Wrapper Start -->
                    <div class="contact-form-wrapper contact-form">
                        <form action="assets/php/amber.php" id="contact-form" method="post">
                            <div class="row">
                                <div class="col-12">
                                    <div class="row">

                                        <div class="col-md-6">
                                            <div class="input-area mb-4">
                                                <input class="input-item" type="text" placeholder="Your Name *"
                                                    name="name">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="input-area mb-4">
                                                <input class="input-item" type="email" placeholder="Email *"
                                                    name="email">
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="input-area mb-4">
                                                <input class="input-item" type="text" placeholder="Subject *"
                                                    name="subject">
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="input-area mb-8">
                                                <textarea cols="30" rows="5" class="textarea-item" name="message" placeholder="Message"></textarea>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <button type="submit" id="submit" name="submit"
                                                class="btn btn-primary btn-hover-dark">Send Message</button>
                                        </div>
                                        <p class="col-8 form-message mb-0"></p>

                                    </div>
                                </div>
                            </div>
                        </form>
                        <p class="form-messege"></p>
                    </div>
                    <!-- Contact Form Wrapper End -->

                </div>
                <div class="col-12 col-lg-6 mb-10 order-1 order-lg-2" data-aos="fade-up" data-aos-duration="1500">
                    <!-- Section Title Start -->
                    <div class="contact-title pb-3">
                        <h2 class="title">Contact Us</h2>
                    </div>
                    <!-- Section Title End -->
                    <div class="contact-content">
                        <p>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est
                            notare quam littera gothica, quam nunc putamus parum claram anteposuerit litterarum formas
                            human.</p>
                        <address class="contact-block">
                            <ul>
                                <li><i class="fa fa-fax"></i> Your address goes here</li>
                                <li><i class="fa fa-phone"></i> <a href="tel:123-123-456-789">123 123 456 789</a></li>
                                <li><i class="fa fa-envelope-o"></i> <a href="mailto:weerawatvsz@gmail.com">weerawatvsz@gmail.com </a>
                                </li>
                            </ul>
                        </address>

                        <div class="working-time">
                            <h6 class="title">Working Hours</h6>
                            <p>Monday – Saturday:08AM – 22PM</p>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- Contact us Section End -->

    <!-- Contact Map Start -->
    <div class="section">

        <!-- Google Map Area Start -->
        <div class="google-map-area w-100" data-aos="fade-up" data-aos-duration="1000">
            <iframe class="contact-map"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2136.986005919501!2d-73.9685579655238!3d40.75862446708152!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c258e4a1c884e5%3A0x24fe1071086b36d5!2sThe%20Atrium!5e0!3m2!1sen!2sbd!4v1585132512970!5m2!1sen!2sbd"></iframe>
        </div>
        <!-- Google Map Area Start -->

    </div>
    <!-- Contact Map End -->
@endsection
