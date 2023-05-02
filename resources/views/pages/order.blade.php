@extends('layouts.app')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Order</h1>
                    </div><!-- /.col -->

                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title d-inline-block">Orders</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example2" class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Order ID</th>
                                            <th>User</th>
                                            <th>Total Price</th>
                                            <th>Status</th>
                                            <th>Order Date</th>
                                            <th class="actions-column">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($orders as $order)
                                            <tr>
                                                <td>{{ $order->id }}</td>
                                                <td>{{ $order->user->first_name }} {{ $order->user->last_name }}</td>
                                                <td>{{ $order->total_price }}</td>
                                                <td>{{ $order->status }}</td>
                                                <td>{{ $order->created_at }}</td>
                                                <td>
                                                    <button class="btn btn-info btn-sm view-order" data-toggle="modal"
                                                        data-target="#orderModal" data-order="{{ json_encode($order) }}">
                                                        <i class="fas fa-eye"></i> View
                                                    </button>
                                                    <button class="btn btn-danger btn-sm delete-order" type="button"
                                                        data-id="{{ $order->id }}">
                                                        <i class="fas fa-trash"></i> Delete
                                                    </button>

                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                </div>
                <!-- /.row -->
            </div>
        </section>
        <!-- /.content -->

        <div class="modal fade" id="orderModal" tabindex="-1" role="dialog" aria-labelledby="orderModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="orderModalLabel">Order Details</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="orderId">Order ID:</label>
                            <input type="text" id="orderId" class="form-control" readonly>
                        </div>

                        <div class="form-group">
                            <label for="orderUser">User:</label>
                            <input type="text" id="orderUser" class="form-control" readonly>
                        </div>

                        <div class="form-group">
                            <label for="orderStatus">Status:</label>
                            <input type="text" id="orderStatus" class="form-control" readonly>
                        </div>

                        <div class="form-group">
                            <label for="orderTotalPrice">Total Price:</label>
                            <input type="text" id="orderTotalPrice" class="form-control" readonly>
                        </div>

                        <div class="form-group">
                            <label>Order Items:</label>
                            <table id="orderItems" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Product</th>
                                        <th>Quantity</th>
                                        <th>Price</th>
                                    </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="successModal" tabindex="-1" role="dialog" aria-labelledby="successModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="successModalLabel">Success</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        Order deleted successfully.
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>


    </div>

    <!-- /.content-wrapper -->
@endsection
