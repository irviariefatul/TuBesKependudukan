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
                    <h4 class="card-title">DATA KARTU KELUARGA</h4>
                    <br>
                    <div class="table-responsive">
                    <a href="/kartuKeluargas/create" class="btn btn-primary">Add Data</a> <br><br>
                        <table class="table table-striped table-bordered zero-configuration">
                            <thead>
                                <tr>
                                    <th>Nomor Kartu Keluarga</th>
                                    <th>Nama Kepala Keluarga</th>                                    
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($kartuKeluarga as $kk)
                                <tr>
                                    <td>{{ $kk->nomor }}</td>
                                    <td>{{ $kk->penduduks->nama}}</td>                                   
                                    <td>{{ $kk->status}} </td>
                                    <td>
                                        <form action="/kartuKeluargas/{{$kk->id}}" method="POST">
                                            @method('GET')
                                            <a href="/kartuKeluargas/{{$kk->id}}" class="btn btn-primary">View</a>
                                            @can('manage-admins')
                                            <a href="/kartuKeluargas/{{$kk->id}}/edit" class="btn btn-warning">Edit</a>
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