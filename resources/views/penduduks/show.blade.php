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

                    <form action="/penduduks/{{$penduduk->id}}" method="get">
                    @csrf

                    <table class="table table-responsive">
                    <img width="250px" src="{{asset('storage/'. $penduduk->photo)}}"><br><br>
                        <tr>
                            <th>NIK</th>
                            <th>:</th>
                            <td>{{ $penduduk -> nik}}</td>
                        </tr>
                        <tr>
                            <th>Kewarganegaraan</th>
                            <th>:</th>
                            <td>{{ $penduduk -> kewarganegaraan}}</td>
                        </tr>
                        <tr>
                            <th>Nama</th>
                            <th>:</th>
                            <td>{{ $penduduk -> nama}}</td>
                        </tr>
                        <tr>
                            <th>Tempat Lahir</th>
                            <th>:</th>
                            <td>{{ $penduduk -> tempat_lahir}}</td>
                        </tr>
                        <tr>
                            <th>Tanggal Lahir</th>
                            <th>:</th>
                            <td>{{ $penduduk -> tanggal_lahir}}</td>
                        </tr>
                        <tr>
                            <th>Jenis Kelamin</th>
                            <th>:</th>
                            <td>{{ $penduduk -> jenis_kelamin}}</td>
                        </tr>
                        <tr>
                            <th>Agama</th>
                            <th>:</th>
                            <td>{{ $penduduk -> agama}}</td>
                        </tr>
                        <tr>
                            <th>Pekerjaan</th>
                            <th>:</th>
                            <td>{{ $penduduk -> pekerjaan}}</td>
                        </tr>
                        <tr>
                            <th>Status Keadaan</th>
                            <th>:</th>
                            <td>{{ $penduduk -> status_keadaan}}</td>
                        </tr>
                        <tr>
                            <th>RT</th>
                            <th>:</th>
                            <td>{{ $penduduk -> rt}}</td>
                        </tr>
                        <tr>
                            <th>RW</th>
                            <th>:</th>
                            <td>{{ $penduduk -> rw}}</td>
                        </tr>
                        <tr>
                            <th>Kelurahan</th>
                            <th>:</th>
                            <td>{{ $penduduk -> kelurahan}}</td>
                        </tr>
                        <tr>
                            <th>Kecamatan</th>
                            <th>:</th>
                            <td>{{ $penduduk -> kecamatan}}</td>
                        </tr>
                        <tr>
                            <th>Status</th>
                            <th>:</th>
                            <td>{{ $penduduk -> status}}</td>
                        </tr>
                        <tr>
                            <th>Create At</th>
                            <th>:</th>
                            <td>{{ $penduduk -> created_at}}</td>
                        </tr>
                        <tr><th>Update At</th><th>:</th><td>{{ $penduduk -> updated_at}}</td></tr>
                    </table>
                    <a href="http://127.0.0.1:8000/penduduks" class="btn btn-primary float-right">Back</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection