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
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">ADD DATA KARTU KELUARGA</h4>
                                <br>
                                <div class="basic-form">
                                    @if (session('status'))
                                    <div class="alert alert-success" role="alert">
                                        {{ session('status') }}
                                    </div>
                                    @endif
                                    <div class="form-validation">
                                        <form class="form-valide" action="/kartuKeluargas" method="post">
                                            @csrf
                                            <div class="form-group row">
                                                <label class="col-lg-4 col-form-label" for="nomor">Nomor Kartu Keluarga<span class="text-danger">*</span>
                                                </label>
                                                <div class="col-lg-6">
                                                    <input type="text" class="form-control" id="nomor" name="nomor" placeholder="Nomor Kartu Keluarga" required="required">
                                                </div>
                                            </div> 
                                            <div class="form-group row">
                                                <label class="col-lg-4 col-form-label" for="nama_kelpala_keluarga">Nama Kepala Keluarga<span class="text-danger">*</span>
                                                </label>
                                                <div class="col-lg-6">
                                                    <select class="form-control" name="Penduduk">
                                                        @foreach($penduduk as $p)
                                                        @if($p->status === 'Terverifikasi' )
                                                        <option value="{{$p->id}}">{{ $p->nama }}</option>
                                                        @endif
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>                         
                                            @can('manage-users')
                                            <div class="form-group row">
                                                <label class="col-lg-4 col-form-label" for="status">Status<span class="text-danger">*</span>
                                                </label>
                                                <div class="col-lg-6">
                                                    <select class="form-control" id="status" name="status">
                                                        <option value="Belum Terverifikasi">Belum Terferivikasi</option>
                                                        <option value="Terverifikasi" disabled hidden >Terferivikasi</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-lg-8 ml-auto">
                                                    <button type="submit" class="btn btn-primary">Confirm</button>
                                                </div>
                                            </div>

                                            @elsecan('manage-admins')
                                            <div class="form-group row">
                                                <label class="col-lg-4 col-form-label" for="status">Status<span class="text-danger">*</span>
                                                </label>
                                                <div class="col-lg-6">
                                                    <select class="form-control" id="status" name="status" required="required">
                                                        <option value="Belum Terverifikasi">Belum Terferivikasi</option>
                                                        <option value="Terverifikasi">Terferivikasi</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-lg-8 ml-auto">
                                                    <button type="submit" name="add" class="btn btn-primary">Confirm</button>
                                                </div>
                                            </div>
                                            @endcan
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection