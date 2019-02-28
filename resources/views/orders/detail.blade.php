@extends('layouts.order')

@section('title', 'Create Order')

@section('content')
	<div class="row justify-content-center">
        <div class="col-md-8">
        	<div class="card">
                 <div class="card-header">Orders </div>

                 <div class="card-body">
                     @if (Session::has('message'))
                         <div class="alert alert-success">{{ Session::get('message') }} </div>
                     @else
                        <p><span style="font-weight: bold">Total price: </span>{{$order->total_price}}</p>
                        <p><span style="font-weight: bold">Description: </span>{{$order->description}}</p>
                        <p><span style="font-weight: bold">Product: </span></p>
                        <table style="width: 100%">
                            <tr>
                                <th>Name</th>
                                <th>Price</th>
                                <th>Rating</th>
                            </tr>
                        @foreach ($order->products as $product)
                            <tr>
                                <td>{{$product->product_na}}</td>
                                <td>{{$product->price}}</td>
                                <td>{{$product->avg_rating}}</td>
                            </tr>
                        @endforeach
                        </table>
                     @endif
                 </div>
             </div>
        </div>
    </div>
@endsection
