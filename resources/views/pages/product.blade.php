@extends('layouts.app')

@section('content')
    @php
        use Illuminate\Support\Facades\Storage;
    @endphp
    <style>
        .actions-column {
            width: 200px;
        }

        ,
        .product-modal-image {
            max-width: 100%;
            height: auto;
            object-fit: cover;
        }
    </style>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Product</h1>
                    </div><!-- /.col -->

                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title d-inline-block">Production</h3>
                                <button class="btn btn-success float-right" data-toggle="modal"
                                    data-target="#addProductModal">
                                    <i class="fas fa-plus"></i> Add
                                </button>

                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example2" class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Id </th>
                                            <th>Product </th>
                                            <th>Descript</th>
                                            <th>Price</th>
                                            <th>Discount</th>
                                            <th>Quantity</th>


                                            <th class="actions-column">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($products as $product)
                                            <td>
                                                {{ $product->id }}
                                            </td>
                                            <td>{{ $product->name }}</td>
                                            <td>{{ $product->description }}</td>
                                            <td>{{ $product->price }}</td>
                                            <td>{{ $product->discount }}%</td>
                                            <td>{{ $product->stock->quantity }}</td>


                                            <td>
                                                <button class="btn btn-info btn-sm view-product" data-toggle="modal"
                                                    data-target="#productModal" data-id="{{ $product->id }}">
                                                    <i class="fas fa-eye"></i> View
                                                </button>

                                                <a href="{{ route('products.edit', $product->id) }}"
                                                    class="btn btn-primary btn-sm">
                                                    <i class="fas fa-edit"></i> Edit
                                                </a>

                                                <form action="{{ route('products.destroy', $product->id) }}" method="POST"
                                                    class="d-inline-block">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="btn btn-danger btn-sm" type="submit">
                                                        <i class="fas fa-trash"></i> Delete
                                                    </button>
                                                </form>

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
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->


    <!-- Add Product Modal -->
    <div class="modal fade" id="addProductModal" tabindex="-1" role="dialog" aria-labelledby="addProductModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addProductModalLabel">Add Product</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <label for="name">Name:</label>
                            <input type="text" name="name" id="name" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label for="description">Description:</label>
                            <textarea name="description" id="description" class="form-control" rows="3"></textarea>
                        </div>

                        <div class="form-group">
                            <label for="image">Image:</label>
                            <input type="file" name="image" id="image" class="form-control" accept="image/*"
                                required>
                        </div>

                        <div class="form-group">
                            <label for="price">Price:</label>
                            <input type="number" name="price" id="price" class="form-control" step="0.01"
                                required>
                        </div>

                        <div class="form-group">
                            <label for="discount">Discount:</label>
                            <input type="number" name="discount" id="discount" class="form-control" step="0.01">
                        </div>
                        <div class="form-group">
                            <label for="quantity">Quantity:</label>
                            <input type="number" name="quantity" id="quantity" class="form-control" required>
                        </div>

                        <button type="submit" class="btn btn-primary">Add Product</button>

                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- show Product  -->
    <div class="modal fade" id="productModal" tabindex="-1" role="dialog" aria-labelledby="productModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="productModalLabel">Product Details</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <img class="rounded mx-auto d-block img-fluid" id="productImage" src=""
                                alt="Product image">
                        </div>
                        <div class="col-md-6">
                            <h5 class="mb-3"><strong>Product:</strong> <span id="productName"></span></h5>
                            <p class="mb-3"><strong>Description:</strong> <span id="productDescription"></span></p>
                            <p class="mb-3"><strong>Price:</strong> <span id="productPrice"></span></p>
                            <p class="mb-3"><strong>Discount:</strong> <span id="productDiscount"></span></p>
                            <p class="mb-3"><strong>Last Updated:</strong> <span id="productUpdateAt"></span></p>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
@endsection
