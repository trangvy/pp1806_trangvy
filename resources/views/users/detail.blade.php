@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    @if (Session::has('message'))
                    <div class="alert alert-success">{{ Session::get('message') }} </div>
                    @endif
                    <div class="card-header">User Detail</div>

                    <div class="card-body">
                        <form>
                            <div class="form-group row">
                                <label for="name" class="col-sm-2 col-form-label">Name</label>
                                <div class="col-sm-10">
                                    <input type="text" readonly class="form-control-plaintext" value="{{ $user->name }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
                                <div class="col-sm-10">
                                    <input type="text" readonly class="form-control-plaintext"  value="{{ $user->email }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="create" class="col-sm-2 col-form-label">Created Date</label>
                                <div class="col-sm-10">
                                    <input type="text" readonly class="form-control-plaintext"  value="{{ $user->created_at }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="create" class="col-sm-2 col-form-label">Orders</label>
                                <div class="col-sm-10">
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
                                        @foreach($user->orders as $order)
                                            <tr>
                                                <td scope="row">{{ $order->id }}</td>
                                                <td>{{ $order->user['name'] }}</td>
                                                <td>{{ $order->total_price }}</td>
                                                <td>
                                                    {{ $order->products->count() }}
                                                </td>
                                                <td>
                                                    <a href="{{ route('orders.show',$order->id) }}" class="btn btn-info" role="button"> Detail</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
