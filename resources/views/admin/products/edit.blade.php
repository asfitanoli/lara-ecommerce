@extends('admin.layouts.app')

@section('content')

    <div class="row">
        <div class="col-lg-12">
            <div class="ibox">
                <div class="ibox-title">
                    <h3>Update Product</h3>
                </div>
                <div class="ibox-content">

                    <form id="productForm" action="{{ route('product.update', ['id' => $product->id]) }}"
                          method="POST"
                          class="form justify-content-center" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group"><label>Name</label>
                            <input type="text" value="{{ $product->name }}" placeholder="Enter Name" name="name"
                                   class="form-control" required>
                        </div>
                        <div class="form-group"><label>Description</label>
                            <textarea placeholder="Enter Description" name="description" class="form-control"
                                      required>{{ $product->description }}</textarea>
                        </div>
                        <div class="form-group"><label>Price</label>
                            <input value="{{ $product->price }}" type="number" min="1" placeholder="Enter Price"
                                   name="price" class="form-control" required>
                        </div>
                        <div class="form-group"><label>Image</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" name="image" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="form-group"><label>Category</label>
                            <select class="form-control m-b" name="category" required>
                                <option value="">Select Category</option>
                                @foreach($categories as $cat)
                                    <option value="{{ $cat }}"
                                            @if ($cat == $product->category)
                                            selected="selected"
                                        @endif>
                                        {{ $cat }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div>
                            <button class="btn btn-primary" type="submit">
                                <strong>Add</strong></button>
                        </div>

                    </form>

                </div>

            </div>

        </div>
    </div>

@endsection

