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

    <section id="aa-contact">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="aa-contact-area">
                        <div class="aa-contact-top">
                            <h2>Thank you! Your order has been placed successfully!</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
