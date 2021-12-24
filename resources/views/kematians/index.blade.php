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
                    <h4 class="card-title">DATA KEMATIAN</h4>
                    <br>
                    <div class="table-responsive">
                    <a href="/kematians/create" class="btn btn-primary">Add Data</a> <br><br>
                        <table class="table table-striped table-bordered zero-configuration">
                            <thead>
                                <tr>
                                    <th>Nama</th>
                                    <th>Tempat</th>
                                    <th>Tanggal Meninggal</th>
                                    <th>Alasan</th>                                    
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($kematian as $km)
                                <tr>
                                    <td>{{ $km->penduduks->nama }}</td>
                                    <td>{{ $km->tempat}}</td>
                                    <td>{{ $km->tanggal }}</td>
                                    <td>{{ $km->alasan}}</td>                                    
                                    <td>{{ $km->status}} </td>
                                    <td>
                                        <form action="/kematians/{{$km->id}}" method="POST">
                                            @method('GET')
                                            <a href="/kematians/{{$km->id}}" class="btn btn-primary">View</a>
                                            @can('manage-admins')
                                            <a href="/kematians/{{$km->id}}/edit" class="btn btn-warning">Edit</a>
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