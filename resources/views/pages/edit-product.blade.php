@extends('layouts.app')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Edit Product</h1>
                    </div><!-- /.col -->

                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8 offset-md-1">
                        <div class="card">
                            {{-- <div class="card-header">Edit Product</div> --}}

                            <div class="card-body">
                                <form method="POST" action="{{ route('products.update', $product->id) }}"
                                    enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')

                                    <div class="form-group">
                                        <label for="name">Product Name</label>
                                        <input type="text" class="form-control" id="name" name="name"
                                            value="{{ $product->name }}" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="description">Product Description</label>
                                        <textarea class="form-control" id="description" name="description" rows="3">{{ $product->description }}</textarea>
                                    </div>

                                    <div class="form-group">
                                        <label for="price">Price</label>
                                        <input type="number" class="form-control" id="price" name="price"
                                            value="{{ $product->price }}" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="discount">Discount</label>
                                        <input type="number" class="form-control" id="discount" name="discount"
                                            value="{{ $product->discount }}">
                                    </div>

                                    <div class="form-group">
                                        <label for="quantity">Quantity</label>
                                        <input type="number" class="form-control" id="quantity" name="quantity"
                                            value="{{ $product->stock->quantity }}" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="image">Image</label>
                                        <input type="file" class="form-control-file" id="image" name="image">
                                        <img src="{{ asset($product->image) }}" alt="Product image"
                                            class="img-thumbnail mt-2" style="max-width: 150px;">
                                    </div>
                                    <div class="text-right">
                                        <button type="button" class="btn btn-secondary mr-2"
                                            onclick="window.history.back()">Back</button>
                                        <button type="submit" class="btn btn-primary">Save Changes</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </div>

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
