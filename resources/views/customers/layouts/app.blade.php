<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Amber - Pet Care Bootstrap 5 Template</title>

    <!-- Favicons -->
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}">

    <!-- Vendor CSS (Icon Font) -->
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/fontawesome.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/simple-line-icons.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/themify-icons-min.css') }}"/>

    <!-- Plugins CSS (All Plugins Files) -->
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/swiper-bundle.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/animate.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/lightgallery.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/aos.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/nice-select.min.css') }}"/>

    <!-- Main Style CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}"/>


</head>

<body>

@include('customers.layouts.header')

@yield('customer')

@include('customers.layouts.footer')

<!-- Vendor JS -->
<script src="{{ asset('assets/js/vendor/popper.min.js') }}"></script>
<script src="{{ asset('assets/js/vendor/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/vendor/jquery-3.6.0.min.js') }}"></script>
<script src="{{ asset('assets/js/vendor/jquery-migrate-3.3.2.min.js') }}"></script>
<script src="{{ asset('assets/js/vendor/modernizr-3.11.2.min.js') }}"></script>

<!-- Plugins JS -->
<script src="{{ asset('assets/js/plugins/aos.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/jquery.ajaxchimp.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/jquery-ui.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/nice-select.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/swiper-bundle.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/countdown.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/lightgallery-all.min.js') }}"></script>

<script>

    $(document).ready(function () {
        $('#updateUserButton').click(function(e){
            e.preventDefault();

            var formData = {
                'country': $('.myniceselect').val(),
                'first_name': $('input[name=first_name]').val(),
                'last_name': $('input[name=last_name]').val(),
                'company_name': $('input[name=company_name]').val(),
                'address': $('input[name=address]').val(),
                'apartment': $('input[name=apartment]').val(),
                'city': $('input[name=town_city]').val(),
                'state': $('input[name=state_county]').val(),
                'postcode': $('input[name=postcode_zip]').val(),
                'email': $('input[name=email]').val(),
                'phone': $('input[name=phone]').val(),
            };

            $.ajax({
                type: 'PUT',
                url: '/user/update',
                data: formData,
                success: function (data) {
                    console.log(data);
                    alert('User data updated successfully!');
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    console.log(textStatus, errorThrown);
                }
            });
        });
    });


    $(document).ready(function () {
        $('.action.quickview').on('click', function () {
            const productId = $(this).data('product-id');
            const url =
                `/product/${productId}`; // Replace 'your-product-fetch-url' with the actual route

            $.ajax({
                url: url,
                method: 'GET',
                success: function (response) {
                    // Update the modal content with the fetched product data
                    console.log(response);
                    // Update the product title, image, description, price, and stock
                    // Update the data-product-id attribute with the fetched product ID
                    $('#quick-view .add-to_cart a').attr('data-product-id', response.id);
                    $('#quick-view .product-title').text(response.name);
                    $('#quick-view .desc-content').text(response.description);
                    $('#quick-view .regular-price').text(`$${response.price}`);

                    // If quantity is 0, display 'Out of Stock' in red, else display quantity
                    if (response.stock.quantity === 0) {
                        $('#quick-view .inventory-varient').css('color', 'red').text('Out of Stock');
                        $('.add-to_cart').hide(); // Hide 'Add to Cart' button
                        $('.cart-plus-minus-box').prop('disabled', true); // Disable quantity input box
                        $('.qtybutton').hide(); // Hide increment and decrement buttons
                    } else {
                        $('#quick-view .inventory-varient').css('color', 'black').text(`${response.stock.quantity} Left in Stock`);
                        $('.add-to_cart').show(); // Show 'Add to Cart' button
                        $('.cart-plus-minus-box').prop('disabled', false); // Enable quantity input box
                        $('.qtybutton').show(); // Show increment and decrement buttons
                    }

                    // Update product image
                    let imagesHtml =
                        `<a class="swiper-slide" href="#"><img class="w-100" src="{{ asset('${response.image}') }}" alt="${response.name}"></a>`;
                    $('#quick-view .swiper-wrapper').html(imagesHtml);

                    // Update product rating
                    let ratingHtml = '';
                    for (let i = 1; i <= 5; i++) {
                        if (i <= response.rating) {
                            ratingHtml += '<i class="fa fa-star"></i>';
                        } else if (i - 0.5 <= response.rating) {
                            ratingHtml += '<i class="fa fa-star-half-o"></i>';
                        } else {
                            ratingHtml += '<i class="fa fa-star-o"></i>';
                        }
                    }
                    $('#quick-view .rating').html(ratingHtml);
                },
                error: function () {
                    console.error('Error fetching product data');
                }
            });
        });
    });

    $('.inc-qty').on('click', function () {
        const input = $(this).parent().find('.cart-plus-minus-box');
        const currentQty = parseInt(input.val());
        const availableStock = parseInt($('.available-stock').text());

        if (currentQty < availableStock) {
            input.val(currentQty + 1);
        }
    });

    $('.dec-qty').on('click', function () {
        const input = $(this).parent().find('.cart-plus-minus-box');
        const currentQty = parseInt(input.val());

        if (currentQty > 1) {
            input.val(currentQty - 1);
        }
    });


    function addToCart(event) {
        event.preventDefault();
        const productId = $(event.target).data('product-id');
        const quantity = parseInt($('.cart-plus-minus-box').val());

        // Check if user is logged in
        $.get('/is-logged-in', function (data) {
            if (data.loggedIn) {
                // User is logged in, proceed with adding to cart
                saveOrUpdateOrder(productId, quantity);
            } else {
                // User is not logged in, redirect to login page
                window.location.href = '/login';
            }
        });
    }


    function saveOrUpdateOrder(productId, quantity) {
        const url = `/order/saveOrUpdate/${productId}/${quantity}`;

        $.ajax({
            url: url,
            method: 'POST',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function (response) {
                window.location.href = `/cart`;
            },
            error: function (e) {
                // Handle the error response from the server
                // The error message is assumed to be in e.responseJSON.message, change this as needed
                const errorMessage = e.responseJSON.message;

                // Display the error message in the modal
                $('#errorMessage')
                    .text(errorMessage)
                    .removeClass('d-none');
            }
        });
    }

</script>

<!-- Use the minified version files listed below for better performance and remove the files listed above -->

<!--
<script src="assets/js/vendor.min.js"></script>
<script src="assets/js/plugins.min.js"></script>
-->

<!--Main JS-->
<script src="{{ asset('assets/js/main.js') }}"></script>
</body>

</html>
