@extends('layouts.app')

@section('content')

    <!-- catg header banner section -->
    <section id="aa-catg-head-banner">
        <img src="{{ asset('assets/img/fashion/fashion-header-bg-8.jpg') }}" alt="dummy-banner">
        <div class="aa-catg-head-banner-area">
            <div class="container">
                <div class="aa-catg-head-banner-content">
                    <h2>Checkout</h2>
                    <ol class="breadcrumb">
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li class="active">Checkout</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <!-- / catg header banner section -->


    <!-- Cart view section -->
    <section id="checkout">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="checkout-area">
                        <form action="{{ route('checkout.store') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="checkout-left">
                                        <div class="panel-group" id="accordion">

                                            <!-- Billing Details -->
                                            <div class="panel panel-default aa-checkout-billaddress">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        <a data-toggle="collapse" data-parent="#accordion"
                                                           href="#collapseOne">
                                                            Billing Details
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="collapseOne" class="panel-collapse collapse in">
                                                    <div class="panel-body">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="aa-checkout-single-bill">
                                                                    <input type="text" placeholder="Full Name*"
                                                                           name="billing_name" required>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="aa-checkout-single-bill">
                                                                    <input type="email" placeholder="Email Address*"
                                                                           name="billing_email" required>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="aa-checkout-single-bill">
                                                                    <input type="tel" placeholder="Phone*"
                                                                           name="billing_phone" required>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="aa-checkout-single-bill">
                                                                        <textarea cols="8" rows="3"
                                                                                  name="billing_address" required>Address*</textarea>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="aa-checkout-single-bill">
                                                                    <select name="billing_country" required>
                                                                        <option value="">Select Your Country</option>
                                                                        <option value="uae">UAE</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="aa-checkout-single-bill">
                                                                    <input type="text" placeholder="City / Town*"
                                                                           name="billing_city" required>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="checkout-right">
                                        <h4>Order Summary</h4>
                                        <div class="aa-order-summary-area">
                                            <table class="table table-responsive">
                                                <thead>
                                                <tr>
                                                    <th>Product</th>
                                                    <th>Total</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($cartItems as $item)
                                                <tr>
                                                    <td>{{ $item->name }} <strong> x {{ $item->quantity }}</strong></td>
                                                    <td>AED {{ $item->price }}</td>
                                                </tr>
                                                @endforeach
                                                </tbody>
                                                <tfoot>
                                                <tr>
                                                    <th>Total</th>
                                                    <td>AED {{ Cart::getTotal() }}</td>
                                                </tr>
                                                </tfoot>
                                            </table>
                                        </div>
                                        <h4>Payment Method</h4>
                                        <div class="aa-payment-method">
                                            <label for="cashdelivery">
                                                <input type="radio" id="cashdelivery"
                                                                             name="payment_method" required> Cash on Delivery
                                            </label>
                                            <input type="submit" value="Place Order" class="aa-browse-btn" >
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- / Cart view section -->

@endsection
