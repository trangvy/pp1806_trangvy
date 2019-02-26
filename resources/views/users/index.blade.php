@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">List User</div>

                    <div class="card-body">
                        <div class="alert alert-success" style="display:none"></div>
                        <div class="alert alert-warning" style="display:none"></div>
                        <table class="table" id="event_table">
                            <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($users as $user)
                                <tr class="table-row">
                                    <th scope="row" ><p class="user-id">{{ $user->id }}</p></th>
                                    <td class="name"> <a href="{{ route('users.show',$user->id) }}" target="_blank">{{ $user->name }}</a></td>
                                    <td>{{ $user->email }}</td>
                                    <td>
                                        <a href="{{ route('users.edit',$user->id) }}" class="btn btn-info"> Edit</a>
                                        <a  id="delete-button" class="btn btn-info" ng-click=" return eliminar({{ $user->id }})"> Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
            $('td #delete-button').on('click', function (e) {
                var tr = $(this).closest('tbody').find('.table-row');
                var id = $(this).closest('tr').find('.user-id').text();
                var name = $(this).closest('tr').find('.name').text();
                e.preventDefault();
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                    }
                });
                $.ajax({
                    url: '/users/destroy/' + id,
                    method: 'post',
                    data: {
                        _token : $('meta[name="csrf-token"]').attr('content'),
                        id: id,
                        name: name
                    },
                    dataType: 'json',
                    success: function(result){
                        tr.hide();
                        $('.alert-success').show();
                        $('.alert-success').html(result.success);
                    },
                    error: function () {
                        location.reload();
                    }
                });
            });
        });
    </script>
@endsection
