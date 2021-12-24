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

                    <form action="/kematians/{{$kematian->id}}" method="get">
                        @csrf

                        <table class="table table-responsive">
                            <tr>
                                <th>Nama</th>
                                <th>:</th>
                                <td>{{ $kematian ->penduduks->nama}}</td>
                            </tr>
                            <tr>
                                <th>Jenis Kelamin</th>
                                <th>:</th>
                                <td>{{ $kematian ->penduduks->jenis_kelamin}}</td>
                            </tr>
                            <tr>
                                <th>Tempat Lahir</th>
                                <th>:</th>
                                <td>{{ $kematian ->penduduks->tempat_lahir}}</td>
                            </tr>
                            <tr>
                                <th>Tempat Meninggal</th>
                                <th>:</th>
                                <td>{{ $kematian -> tempat}}</td>
                            </tr>
                            <tr>
                                <th>Tanggal Lahir</th>
                                <th>:</th>
                                <td>{{ $kematian ->penduduks->tanggal_lahir}}</td>
                            </tr>
                            <tr>
                                <th>Tanggal Meninggal</th>
                                <th>:</th>
                                <td>{{ $kematian -> tanggal}}</td>
                            </tr>
                            <tr>
                                <th>Alasan</th>
                                <th>:</th>
                                <td>{{ $kematian -> alasan}}</td>
                            </tr>
                            <tr>
                                <th>Status</th>
                                <th>:</th>
                                <td>{{ $kematian -> status}}</td>
                            </tr>
                            <tr>
                                <th>Create At</th>
                                <th>:</th>
                                <td>{{ $kematian -> created_at}}</td>
                            </tr>
                            <tr>
                                <th>Update At</th>
                                <th>:</th>
                                <td>{{ $kematian -> updated_at}}</td>
                            </tr>
                        </table>
                        @if ( $kematian -> status === 'Terverifikasi')
                        <a href="/kematians/{{$kematian->id}}/report" class="btn btn-success float-right" target="_blank">Print PDF</a>
                        <a href="http://127.0.0.1:8000/kematians" class="btn btn-primary float-left">Back</a>
                        @else
                        <a href="http://127.0.0.1:8000/kematians" class="btn btn-primary float-right">Back</a>
                        @endif
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection