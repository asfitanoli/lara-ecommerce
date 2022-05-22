@extends('admin.layouts.app')

@section('content')

    <div class="row">
        <div class="col-lg-12">
            <div class="ibox">
                <div class="ibox-title">
                    <h3>Manage Products</h3>
                </div>
                <div class="ibox-tools">
                    <div class="col-md-4">
                        <a href="{{ route('product.add') }}" class="btn btn-w-m btn-primary float-right pull-right">Add Product</a>
                    </div>
                </div>

                <div class="ibox-content">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Price</th>
                            <th>Category</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($products as $prod)
                            <tr>
                                <td>{{ $prod->id }}</td>
                                <td>{{ $prod->name }}</td>
                                <td>{{ $prod->description }}</td>
                                <td>AED {{ $prod->price }}</td>
                                <td>{{ $prod->category }}</td>
                                <td><a href="{{ route('product.update', ['id'=>$prod->id]) }}"
                                       class="btn btn-outline btn-primary">Update</a></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>

            </div>

        </div>
    </div>

@endsection

