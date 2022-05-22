@extends('layouts.app')

@section('content')

    <!-- catg header banner section -->
    <section id="aa-catg-head-banner">
        <img src="{{ asset('assets/img/fashion/fashion-header-bg-8.jpg') }}" alt="dummy-banner">
        <div class="aa-catg-head-banner-area">
            <div class="container">
                <div class="aa-catg-head-banner-content">
                    <h2>Cart</h2>
                    <ol class="breadcrumb">
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li class="active">Cart</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <!-- / catg header banner section -->

    @if ($message = Session::get('success'))
        <section id="aa-contact">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="aa-contact-area">
                            <div class="aa-contact-top">
                                <h2>{{ $message }}</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif

    <!-- Cart view section -->
    <section id="cart-view">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="cart-view-area">
                        <div class="cart-view-table">
                            <form action="{{ route('cart.update') }}" method="POST">
                                @csrf
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            {{--<th></th>--}}
                                            <th></th>
                                            <th>Product</th>
                                            <th>Price</th>
                                            <th>Quantity</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach ($cartItems as $item)
                                            <tr>
                                                {{--<td>
                                                    <form action="{{ route('cart.remove') }}" method="POST">
                                                        @csrf
                                                        <input type="hidden" value="{{ $item->id }}"
                                                               name="id">
                                                        <button class="remove">
                                                            <fa class="fa fa-close"></fa>
                                                        </button>
                                                    </form>
                                                </td>--}}
                                                <td><a href="#"><img src="{{ asset('/product/images/'. $item->attributes->image) }}" alt="img"></a>
                                                </td>
                                                <td>{{ $item->name }}</td>
                                                <td>AED {{ $item->price }}</td>
                                                <td><input class="aa-cart-quantity" name="quantity"
                                                           value="{{ $item->quantity }}" type="number">
                                                    <input type="hidden" name="id" value="{{ $item->id}}"></td>
                                            </tr>
                                        @endforeach
                                            <tr>
                                                <td colspan="6" class="aa-cart-view-bottom">
                                                    <input class="aa-cart-view-btn" type="submit" value="Update Cart">
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </form>
                            <!-- Cart Total view -->
                            <div class="cart-view-total">
                                <h4>Cart Totals</h4>
                                <table class="aa-totals-table">
                                    <tbody>
                                    <tr>
                                        <th>Total</th>
                                        <td>AED{{ Cart::getTotal() }}</td>
                                    </tr>
                                    </tbody>
                                </table>
                                <a href="{{ route('checkout.index') }}" class="aa-cart-view-btn">Proceed to Checkout</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- / Cart view section -->

@endsection
