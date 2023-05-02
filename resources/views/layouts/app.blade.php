<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Dashboard</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->

    <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet"
        href="{{ asset('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{ asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
    <!-- JQVMap -->
    <link rel="stylesheet" href="{{ asset('plugins/jqvmap/jqvmap.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{ asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{ asset('plugins/daterangepicker/daterangepicker.css') }}">
    <!-- summernote -->
    <link rel="stylesheet" href="{{ asset('plugins/summernote/summernote-bs4.min.css') }}">

    <!-- Add inside the <head> tag -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">


</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        {{-- <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60"
                width="60">
        </div> --}}

        @yield('login')

        @auth
            @include('layouts.header')

            @include('layouts.sidebar')

            @yield('content')

            <!-- Control Sidebar -->
            <aside class="control-sidebar control-sidebar-dark">
                <!-- Control sidebar content goes here -->
            </aside>
            <!-- /.control-sidebar -->

            <footer class="main-footer">
                <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
                All rights reserved.
                <div class="float-right d-none d-sm-inline-block">
                    <b>Version</b> 3.2.0
                </div>
            </footer>

        @endauth

    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="{{ asset('plugins/jquery-ui/jquery-ui.min.js') }}"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- ChartJS -->
    <script src="{{ asset('plugins/chart.js/Chart.min.js') }}"></script>

    <!-- jQuery Knob Chart -->
    <script src="{{ asset('plugins/jquery-knob/jquery.knob.min.js') }}"></script>
    <!-- daterangepicker -->
    <script src="{{ asset('plugins/moment/moment.min.js') }}"></script>
    <script src="{{ asset('plugins/daterangepicker/daterangepicker.js') }}"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="{{ asset('plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
    <!-- Summernote -->
    <script src="{{ asset('plugins/summernote/summernote-bs4.min.js') }}"></script>
    <!-- overlayScrollbars -->
    <script src="{{ asset('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('dist/js/adminlte.js') }}"></script>
    <!-- AdminLTE for demo purposes -->

    <!-- bs-custom-file-input -->
    <script src="{{ asset('plugins/bs-custom-file-input/bs-custom-file-input.min.js') }}"></script>

    <!-- Add before the closing </body> tag -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>

    <!-- DataTables  & Plugins -->
    <script src="{{ asset('plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('plugins/jszip/jszip.min.js') }}"></script>
    <script src="{{ asset('plugins/pdfmake/pdfmake.min.js') }}"></script>
    <script src="{{ asset('plugins/pdfmake/vfs_fonts.js') }}"></script>
    <script src="{{ asset('plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>


    <script>
        function asset(url) {
            const baseUrl = "{{ asset('') }}";
            return baseUrl + url;
        }

        $(document).ready(function() {
            // Initialize DataTables
            $("#example1").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');

            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });

            // Initialize Bootstrap custom file input
            bsCustomFileInput.init();

            // Product view modal
            $('.view-product').on('click', function() {
                const productId = $(this).data('id');
                const productRoute = `/admin/product/${productId}`;

                $.getJSON(productRoute, function(product) {
                    $('#productName').text(product.name);
                    $('#productImage').attr('src', asset(product.image));
                    $('#productDescription').text(product.description);
                    $('#productPrice').text(product.price);
                    $('#productDiscount').text(product.discount);

                    // Format the 'updated_at' value
                    const updatedAt = new Date(product.updated_at);
                    const formattedDate = updatedAt.toISOString().split('T')[0];
                    $('#productUpdateAt').text(formattedDate);
                });
            });


            $('#deleteModal').on('show.bs.modal', function(event) {
                const button = $(event.relatedTarget); // Button that triggered the modal
                const productId = button.data('id'); // Extract the product ID from data-id attribute

                // Update the form action attribute with the correct product ID
                const action = "{{ url('/admin/product') }}/" + productId;
                $('#deleteProductForm').attr('action', action);
            });



            const viewOrderButtons = document.querySelectorAll('.view-order');

            viewOrderButtons.forEach((button) => {
                button.addEventListener('click', (event) => {
                    const order = JSON.parse(event.target.getAttribute('data-order'));
                    const orderId = document.querySelector('#orderId');
                    const orderUser = document.querySelector('#orderUser');
                    const orderStatus = document.querySelector('#orderStatus');
                    const orderTotalPrice = document.querySelector('#orderTotalPrice');
                    const orderItemsTable = document.querySelector('#orderItems tbody');

                    orderId.value = order.id;
                    orderUser.value = order.user.first_name + ' ' + order.user
                        .last_name;
                    orderStatus.value = order.status;
                    orderTotalPrice.value = order.total_price;

                    // Clear the existing order items
                    orderItemsTable.innerHTML = '';

                    order.order_items.forEach((item) => {
                        const row = document.createElement('tr');

                        const productCell = document.createElement('td');
                        productCell.textContent = item.product.name;
                        row.appendChild(productCell);

                        const quantityCell = document.createElement('td');
                        quantityCell.textContent = item.quantity;
                        row.appendChild(quantityCell);

                        const priceCell = document.createElement('td');
                        priceCell.textContent = item.product.price;
                        row.appendChild(priceCell);

                        orderItemsTable.appendChild(row);
                    });
                });
            });

            const deleteButtons = document.querySelectorAll('.delete-order');

            deleteButtons.forEach(function(button) {
                button.addEventListener('click', function() {
                    const orderId = button.getAttribute('data-id');

                    if (confirm('Are you sure you want to delete this order?')) {
                        const form = document.createElement('form');
                        form.action = `/admin/orders/${orderId}`;
                        form.method = 'POST';

                        const csrfInput = document.createElement('input');
                        csrfInput.name = '_token';
                        csrfInput.value = '{{ csrf_token() }}';
                        csrfInput.type = 'hidden';
                        form.appendChild(csrfInput);

                        const methodInput = document.createElement('input');
                        methodInput.name = '_method';
                        methodInput.value = 'DELETE';
                        methodInput.type = 'hidden';
                        form.appendChild(methodInput);

                        document.body.appendChild(form);
                        form.submit();
                    }
                });
            });
        });




        function renderSalesChart(data) {
            const ctx = document.getElementById("salesChart").getContext("2d");

            const labels = data.map((item) => item.date);
            const sales = data.map((item) => item.sales);

            const chart = new Chart(ctx, {
                type: "line",
                data: {
                    labels: labels,
                    datasets: [{
                        label: "Sales",
                        data: sales,
                        borderColor: "rgba(75, 192, 192, 1)",
                        backgroundColor: "rgba(75, 192, 192, 0.2)",
                        borderWidth: 2,
                    }, ],
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true,
                        },
                    },
                },
            });
        }
    </script>



</body>

</html>
