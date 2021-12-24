@extends('layouts.app3')

@section('content')

<div class="row page-titles mx-0">
    <div class="col p-md-0">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
            <li class="breadcrumb-item active"><a href="javascript:void(0)">Home</a></li>
        </ol>
    </div>
</div>
<!-- row -->

<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    <h4 class="card-title">DATA USERS</h4>
                    <br>
                    <div class="table-responsive">
                    <a href="/users/create" class="btn btn-primary">Add Data</a> <br><br>
                        <table class="table table-striped table-bordered zero-configuration">
                            <thead>
                                <tr>
                                    <th>Username</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Role</th>
                                    <th>Created At</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($user as $s)
                                <tr>
                                    <td>{{ $s->username }}</td>
                                    <td>{{ $s->name }}</td>
                                    <td>{{ $s->email }}</td>
                                    <td>{{ $s->role }}</td>
                                    <td>{{ $s->created_at }}</td>
                                    <td>
                                        <form action="/users/{{$s->id}}" method="POST">
                                            <a href="/users/{{$s->id}}/edit" class="btn btn-warning">Edit</a>
                                            @method('GET')
                                            <a href="/users/{{$s->id}}" class="btn btn-primary">View</a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" name="delete" class="btn btn-danger">Delete</button>
                                        </form>
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
</div>
@endsection