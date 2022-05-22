@extends('layouts.app')

@section('content')

    <!-- catg header banner section -->
    <section id="aa-catg-head-banner">
        <img src="{{ asset('assets/img/fashion/fashion-header-bg-8.jpg') }}" alt="dummy-banner">
        <div class="aa-catg-head-banner-area">
            <div class="container">
                <div class="aa-catg-head-banner-content">
                    <h2>{{ $product->title }}</h2>
                    <ol class="breadcrumb">
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li><a href="{{ route('products') }}">Product</a></li>
                        <li class="active">T-shirt</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <!-- / catg header banner section -->
    <!-- product category -->
    <section id="aa-product-details">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="aa-product-details-area">
                        <div class="aa-product-details-content">
                            <div class="row">
                                <!-- Modal view slider -->
                                <div class="col-md-5 col-sm-5 col-xs-12">
                                    <div class="aa-product-view-slider">
                                        <div id="demo-1" class="simpleLens-gallery-container">
                                            <div class="simpleLens-container">
                                                <div class="simpleLens-big-image-container">
                                                    <a data-lens-image="{{ asset('/product/images/'. $product->image)  }}"
                                                       class="simpleLens-lens-image">
                                                        <img src="{{ asset('/product/images/'. $product->image)  }}"
                                                             class="simpleLens-big-image"></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Modal view content -->
                                <div class="col-md-7 col-sm-7 col-xs-12">
                                    <div class="aa-product-view-content">
                                        <h3>{{ $product->name }}</h3>
                                        <div class="aa-price-block">
                                            <span class="aa-product-view-price">AED: {{ $product->price }}</span>
                                        </div>
                                        <p>{{ $product->description }}</p>
                                        <div class="aa-prod-quantity">
                                            <p class="aa-prod-category">
                                                Category: <a href="#">{{ $product->category }}</a>
                                            </p>
                                        </div>
                                        <div class="aa-prod-view-bottom">
                                            <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
                                                @csrf
                                                <input type="hidden" value="{{ $product->id }}" name="id">
                                                <input type="hidden" value="{{ $product->name }}" name="name">
                                                <input type="hidden" value="{{ $product->price }}" name="price">
                                                <input type="hidden" value="{{ $product->image }}"  name="image">
                                                <input type="hidden" value="1" name="quantity">
                                                <button class="aa-add-to-cart-btn">Add To Cart</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="aa-product-details-bottom">
                            <ul class="nav nav-tabs" id="myTab2">
                                <li><a href="#description" data-toggle="tab">Description</a></li>
                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div class="tab-pane fade in active" id="description">
                                    <p>{{ $product->description }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
