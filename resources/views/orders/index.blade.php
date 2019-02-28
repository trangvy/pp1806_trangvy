@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Order List</div>

                    <div class="card-body">
                        @if (Session::has('message'))
                            <div class="alert alert-success">{{ Session::get('message') }} </div>
                        @endif
                        @if (Session::has('error'))
                            <div class="alert alert-warning">{{ Session::get('error') }} </div>
                        @endif
                        @if($orders->isEmpty())
                            <div class="alert alert-info alert-block">
                                <strong>You have not any order or product</strong>
                            </div>
                        @else
                            <table class="table">
                                <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">User</th>
                                    <th scope="col">Total Price</th>
                                    <th scope="col">Total Product</th>
                                    <th scope="col">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($orders as $order)
                                    <tr>
                                        <td scope="row">{{ $order->id }}</td>
                                        <td>{{ $order->user['name'] }}</td>
                                        <td>{{ $order->total_price }}</td>
                                        <td>
                                            {{ $order->products->count() }}
                                        </td>
                                        <td>
                                            <a href="{{ route('orders.show',$order->id) }}" class="btn btn-info" role="button"> Detail</a>
                                            @if( $user && ($user->id == $order->user['id']))
                                                <a href="{{ route('orders.edit',$order->id) }}" class="btn btn-info" role="button"> Edit</a>
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        @endif
                        <div class="col-md-6 offset-md-4">
                            @if($user)
                                <a href="{{ route('orders.create') }}" class="btn btn-info"> Create Order</a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
