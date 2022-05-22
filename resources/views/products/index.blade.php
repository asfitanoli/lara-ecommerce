@extends('layouts.app')

@section('content')

    <!-- catg header banner section -->
    <section id="aa-catg-head-banner">
        <img src="{{ asset('assets/img/fashion/fashion-header-bg-8.jpg') }}" alt="dummy-banner">
        <div class="aa-catg-head-banner-area">
            <div class="container">
                <div class="aa-catg-head-banner-content">
                    @if(!isset($cat))
                        <h2>Shop</h2>
                    @else
                        <h2>{{ ucfirst($cat) }}</h2>
                    @endif
                </div>
            </div>
        </div>
    </section>
    <!-- / catg header banner section -->

    <!-- product category -->
    <section id="aa-product-category">
        <div class="container">
            <div class="row">

                <div class="col-lg-9 col-md-9 col-sm-8 col-md-push-3">
                    <div class="aa-product-catg-content">
                        <div class="aa-product-catg-body">
                            <ul class="aa-product-catg">
                                <!-- start single product item -->

                                @forelse($products as $prod)
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
                                                <h4 class="aa-product-title"><a href="#">{{ $prod->title }}</a></h4>
                                                <span class="aa-product-price">{{ $prod->title }}</span>
                                                <p class="aa-product-descrip">{{ $prod->description }}</p>
                                            </figcaption>
                                        </figure>
                                        <!-- product badge -->
                                        <span class="aa-badge aa-sale" href="#">SALE!</span>
                                    </li>
                                @empty
                                    <h3>No Record Found!</h3>
                                @endforelse

                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-3 col-sm-4 col-md-pull-9">
                    <aside class="aa-sidebar">
                        <!-- single sidebar -->
                        <div class="aa-sidebar-widget">
                            <h3>Category</h3>
                            <ul class="aa-catg-nav">
                                @foreach($categories as $ct)
                                    <li><a href="{{ route('products',['cat'=>strtolower($ct)]) }}">{{ $ct }}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </aside>
                </div>

            </div>
        </div>
    </section>

@endsection
