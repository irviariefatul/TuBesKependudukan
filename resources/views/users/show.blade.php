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

                    <form action="/users/{{$user->id}}" method="get">
                    @csrf

                    <table class="table table-responsive">
                        <tr>
                            <th>Username</th>
                            <th>:</th>
                            <td>{{ $user -> username}}</td>
                        </tr>
                        <tr>
                            <th>Name</th>
                            <th>:</th>
                            <td>{{ $user -> name}}</td>
                        </tr>
                        <tr>
                            <th>Email</th>
                            <th>:</th>
                            <td>{{ $user -> email}}</td>
                        </tr>
                        <tr>
                            <th>Create At</th>
                            <th>:</th>
                            <td>{{ $user -> created_at}}</td>
                        </tr>
                        <tr><th>Update At</th><th>:</th><td>{{ $user -> updated_at}}</td></tr>
                    </table>
                    <a href="http://127.0.0.1:8000/users" class="btn btn-primary float-right">Back</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection