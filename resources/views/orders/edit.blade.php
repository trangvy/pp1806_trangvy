@extends('layouts.order')

@section('title', 'Create Order')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Edit Order') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('orders.update', $order->id) }}">
                        @csrf
                        <div class="form-group row">
                            <label for="total_price" class="col-md-4 col-form-label text-md-right">{{ __('User') }}</label>

                            <div class="col-md-6">
                                <input type="text" readonly name="user_id" value="{{ $order->user->name }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="total_price" class="col-md-4 col-form-label text-md-right">{{ __('Total price') }}</label>

                            <div class="col-md-6">
                                <input type="number" name="total_price" value="{{ $order->total_price }}" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="total_price" class="col-md-4 col-form-label text-md-right">{{ __('Descrption') }}</label>

                            <div class="col-md-6">
                                <textarea class="form-control rounded-0" rows="5" id="exampleFormControlTextarea2" name="description" required>{{ $order->description }}</textarea>
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __(' Update') }}
                                </button>
                                <a href="{{ route('orders.index') }}" class="btn btn-info"> Cancel</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
@endsection
