@extends('admin.layouts.app')

@section('content')

    <div class="row">
        <div class="col-lg-12">
            <div class="ibox">
                <div class="ibox-title">
                    <h3>Customers</h3>
                </div>

                <div class="ibox-content">
                    @if($users)
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Email</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($users as $user)
                                <tr>
                                    <td>{{ $user->id }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    @else
                        <h4>No Customer Found</h4>
                    @endif
                </div>

            </div>

        </div>
    </div>

@endsection

