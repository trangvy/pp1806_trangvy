@extends('layouts.app')
@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Create Order') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('orders.store') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="total_price" class="col-md-4 col-form-label text-md-right">{{ __('User') }}</label>

                            <div class="col-md-6">
                                <div class="col-md-6">
                                    <input type="text" readonly name="user_id" value="{{ $user->name }}">
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="total_price" class="col-md-4 col-form-label text-md-right">{{ __('Total price') }}</label>

                            <div class="col-md-6">
                                <input type="number" name="total_price" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="total_price" class="col-md-4 col-form-label text-md-right">{{ __('Descrption') }}</label>

                            <textarea class="form-control rounded-0" rows="5" id="exampleFormControlTextarea2" name="description" required></textarea>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Create') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
@endsection
