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
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
