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
                    <h4 class="card-title">DATA KELAHIRAN</h4>
                    <br>
                    <div class="table-responsive">
                    <a href="/kelahirans/create" class="btn btn-primary">Add Data</a> <br><br>
                        <table class="table table-striped table-bordered zero-configuration">
                            <thead>
                                <tr>
                                    <th>Nama Ibu</th>
                                    <th>Nama</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Tanggal Lahir </th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($kelahiran as $k)
                                <tr>
                                    <td>{{ $k->penduduks->nama }}</td>
                                    <td>{{ $k->nama }}</td>
                                    <td>{{ $k->jenis_kelamin}}</td>
                                    <td>{{ $k->tanggal }}</td>
                                    <td>{{ $k->status }}</td>
                                    <td>
                                        <form action="/kelahirans/{{$k->id}}" method="POST">
                                            @method('GET')
                                            <a href="/kelahirans/{{$k->id}}" class="btn btn-primary">View</a>
                                            @can('manage-admins')
                                            <a href="/kelahirans/{{$k->id}}/edit" class="btn btn-warning">Edit</a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" name="delete" class="btn btn-danger">Delete</button>
                                            @endcan
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