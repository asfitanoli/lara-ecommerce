@extends('admin.layouts.app')

@section('content')

    <div class="server-response alert alert-success alert-dismissable" style="display:none">
        <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
        <div id="server-response"></div>
    </div>

    <div class="row">
        <div class="col-md-4">
            <div class="ibox ">
                <div class="ibox-title">
                    <h5>Billing Information</h5>
                </div>
                <div>
                    <div class="ibox-content profile-content">
                        <h4><strong>{{ $order->billing_name }}</strong></h4>
                        <p>Email: {{ $order->billing_email }}</p>
                        <p>Phone: {{ $order->billing_phone }}</p>
                        <p>Address: {{ $order->billing_address }}</p>
                        <p>City: {{ $order->billing_city }}</p>
                        <p>Country: {{ ucfirst($order->billing_country) }}</p>
                        <p>Payment Method: {{ strtoupper($order->payment_gateway) }}</p>
                        <p>Approved: {{ $order->shipped ? "Yes" : "No" }}</p>

                        @role('Admin')
                        <div class="user-button">
                            <div class="row">
                                @if(!$order->shipped)
                                    <div class="col-md-6">
                                        <button type="button" id="approveOrder"
                                                data-url="{{ route('order.approve', ['id'=>$order->id]) }}"
                                                class="btn btn-primary btn-sm btn-block">
                                            Approve Order
                                        </button>
                                    </div>
                                @endif
                            </div>
                        </div>
                        @endrole
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-8">
            <div class="ibox">
                <div class="ibox-title">
                    <h3>Order Information</h3>
                </div>

                <div class="ibox-content mb-0">
                    <p id="OrderId" data-order="{{ $order->id }}">Order ID: {{ $order->id }}</p>
                    <p>Order Time: {{ $order->created_at }}</p>
                </div>

                <div class="ibox-content">
                    <h3>Order Items</h3>
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th>Product Id</th>
                            <th>Image</th>
                            <th>Name</th>
                            <th>Price</th>
                            <th>Quantity</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($order->products as $product)
                            <tr>
                                <td>{{ $product->id }}</td>
                                <td><img class="img-lg" src="{{ asset('/product/images/'. $product->image)  }}" alt="">
                                </td>
                                <td>{{ $product->name }}</td>
                                <td>AED {{ $product->price }}</td>
                                <td>{{ $product->pivot->quantity }}</td>
                            </tr>
                        @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection

