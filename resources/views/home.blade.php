@extends('layouts.app')

@section('content')
    <!-- banner section -->
    <section id="aa-banner">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="aa-banner-area">
                            <a href="{{ route('products') }}"><img src="{{ asset('assets/img/fashion-banner.jpg') }}"
                                             alt="fashion banner img"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Products section -->
    <section id="aa-product">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        @if(!empty($prods))
                        <div class="aa-product-area">
                            <div class="aa-product-inner">
                                    <!-- Start product category -->
                                <ul class="aa-product-catg">
                                    @foreach($prods as $key=>$product)
                                                @foreach($product as $prod)
                                                    <li>
                                                        <figure>
                                                            <a href="{{ route('product.detail', ['id'=> $prod->id]) }}" class="aa-product-img" href="#"><img src="{{ asset('/product/images/'. $prod->image)  }}"
                                                                                                                                                             alt="polo shirt img"></a>
                                                            <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
                                                                @csrf
                                                                <input type="hidden" value="{{ $prod->id }}" name="id">
                                                                <input type="hidden" value="{{ $prod->name }}" name="name">
                                                                <input type="hidden" value="{{ $prod->price }}" name="price">
                                                                <input type="hidden" value="{{ $prod->image }}"  name="image">
                                                                <input type="hidden" value="1" name="quantity">
                                                                <button class="aa-add-card-btn"><span
                                                                        class="fa fa-shopping-cart"></span>Add To Cart</button>
                                                            </form>
                                                            <figcaption>
                                                                <h4 class="aa-product-title"><a href="{{ route('product.detail', ['id'=> $prod->id]) }}">{{ $prod->name }}</a></h4>
                                                                <span class="aa-product-price">AED {{ $prod->price }}</span>
                                                            </figcaption>
                                                        </figure>
                                                        <!-- product badge -->
                                                        <span class="aa-badge aa-sale" href="#">SALE!</span>
                                                    </li>
                                                @endforeach
                                    @endforeach
                                    <div class="clearfix"></div>
                                        <div class="col-md-12 text-center">
                                <a class="aa-browse-btn " href="{{ route('products') }}">Browse all Products <span
                                        class="fa fa-long-arrow-right"></span></a>
                                        </div>
                                </ul>
                            </div>
                        </div>
                        @else
                            <h2>No Product Found</h2>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Support section -->
    <section id="aa-support">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="aa-support-area">
                        <!-- single support -->
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="aa-support-single">
                                <span class="fa fa-truck"></span>
                                <h4>FREE SHIPPING</h4>
                                <P>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam, nobis.</P>
                            </div>
                        </div>
                        <!-- single support -->
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="aa-support-single">
                                <span class="fa fa-clock-o"></span>
                                <h4>30 DAYS MONEY BACK</h4>
                                <P>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam, nobis.</P>
                            </div>
                        </div>
                        <!-- single support -->
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="aa-support-single">
                                <span class="fa fa-phone"></span>
                                <h4>SUPPORT 24/7</h4>
                                <P>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam, nobis.</P>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- / Support section -->

@endsection
