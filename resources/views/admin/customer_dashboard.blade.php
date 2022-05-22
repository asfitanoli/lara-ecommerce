@extends('admin.layouts.app')

@section('content')

    <div class="row">
        <div class="col-lg-12">
            <div class="ibox">
                <div class="ibox-title">
                    <h3>My Orders</h3>
                </div>

                <div class="ibox-content">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th>Order Id</th>
                            <th>Name</th>
                            <th>Total</th>
                            <th>Payment Gateway</th>
                            <th>Approved</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($orders as $order)
                            <tr>
                                <td>{{ $order->id }}</td>
                                <td>{{ $order->billing_name }}</td>
                                <td>AED {{ $order->billing_total }}</td>
                                <td>{{ $order->payment_gateway }}</td>
                                <td>{{ $order->shipped ? 'Yes' : 'No' }}</td>
                                <td>
                                    <a href="{{ route('order.view', ['id'=>$order->id]) }}"
                                       class="btn btn-outline btn-primary">View</a>
                                </td>

                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>

            </div>

        </div>
    </div>

@endsection

