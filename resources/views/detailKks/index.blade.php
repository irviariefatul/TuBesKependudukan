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
                    <form action="/kartuKeluargas/{{$kartuKeluarga->id}}" method="get">
                        @csrf

                        <table class="table table-responsive">
                            <tr>
                                <th>Nomor Kartu Keluarga</th>
                                <th>:</th>
                                <td>{{ $kartuKeluarga->nomor}}</td>
                            </tr>
                            <tr>
                                <th>Nama</th>
                                <th>:</th>
                                <td>{{ $kartuKeluarga->penduduks->nama}}</td>
                            </tr>
                            <tr>
                                <th>Status</th>
                                <th>:</th>
                                <td>{{ $kartuKeluarga->status}}</td>
                            </tr>
                        </table>
                        <div class="card-body">
                            @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                            @endif
                            <br>
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered zero-configuration">
                                    <thead>
                                        <tr>
                                            <th>Nomor Kartu Keluarga</th>
                                            <th>Nama Anggota Keluarga</th>
                                            <th>Hubungan</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($detailkk as $dk)
                                        <tr>
                                            <td>{{ $dk->kartu_keluargas->nomor }}</td>
                                            <td>{{ $dk->penduduks->nama}}</td>
                                            <td>{{ $dk->hubungan}} </td>
                                            <td>
                                                <form action="/detailkks/{{$dk->id}}" method="POST">
                                                    @method('GET')
                                                    <a href="/detailkks/{{$dk->id}}" class="btn btn-primary">View</a>
                                                    @can('manage-admins')
                                                    <a href="/detalkks/{{$dk->id}}/edit" class="btn btn-warning">Edit</a>
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
                        <a href="/detailkks/create" class="btn btn-success float-right">Tambah Anggota Keluarga</a> <br><br>
                        <a href="http://127.0.0.1:8000/kematians" class="btn btn-primary float-left">Back</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection