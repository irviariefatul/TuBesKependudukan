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
                                <h4 class="card-title">EDIT DATA PENDUDUK</h4>
                                <br>
                                <div class="basic-form">
                                    @if (session('status'))
                                    <div class="alert alert-success" role="alert">
                                        {{ session('status') }}
                                    </div>
                                    @endif
                                    <div class="form-validation">
                                        <form class="form-valide" action="/penduduks/{{$penduduk->id}}" method="post" enctype="multipart/form-data">
                                            {{csrf_field()}}
                                            @method('PUT')
                                            <input type="hidden" name="id" value="{{$penduduk->id}}"></br>
                                            <div class="form-group row">
                                                <label class="col-lg-4 col-form-label" for="nik">NIK <span class="text-danger">*</span>
                                                </label>
                                                <div class="col-lg-6">
                                                    <input type="text" class="form-control" id="nik" name="nik" required="required" value="{{$penduduk->nik}}" placeholder="NIK">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-4 col-form-label" for="kewarganegaraan">Kewarganegaraan <span class="text-danger">*</span>
                                                </label>
                                                <div class="col-lg-6">
                                                    <input type="text" class="form-control" id="kewarganegaraan" name="kewarganegaraan" required="required" value="{{$penduduk->kewarganegaraan}}" placeholder="Kewarganegaraan">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-4 col-form-label" for="nama">Nama <span class="text-danger">*</span>
                                                </label>
                                                <div class="col-lg-6">
                                                    <input type="text" class="form-control" id="nama" name="nama" required="required" value="{{$penduduk->nama}}" placeholder="Nama">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-4 col-form-label" for="tempat_lahir">Tempat Lahir <span class="text-danger">*</span>
                                                </label>
                                                <div class="col-lg-6">
                                                    <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" required="required" value="{{$penduduk->tempat_lahir}}" placeholder="Tempat Lahir">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-4 col-form-label" for="tanggal_lahir">Tanggal Lahir <span class="text-danger">*</span>
                                                </label>
                                                <div class="col-lg-6">
                                                    <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" required="required" value="{{$penduduk->tanggal_lahir}}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-4 col-form-label" for="jenis_kelamin">Jenis Kelamin<span class="text-danger">*</span>
                                                </label>
                                                <div class="col-lg-6">
                                                    <select class="form-control" id="jenis_kelamin" name="jenis_kelamin" required="required" value="{{$penduduk->jenis_kelamin}}">
                                                        <option value="">Please select</option>
                                                        <option value="Laki-Laki">Laki - Laki</option>
                                                        <option value="Perempuan">Perempuan</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-4 col-form-label" for="agama">Agama<span class="text-danger">*</span>
                                                </label>
                                                <div class="col-lg-6">
                                                    <select class="form-control" id="agama" name="agama" required="required" value="{{$penduduk->agama}}">
                                                        <option value="">Please select</option>
                                                        <option value="Islam">Islam</option>
                                                        <option value="Kristen">Kristen</option>
                                                        <option value="Katolik">Katolik</option>
                                                        <option value="Hindu">Hindu</option>
                                                        <option value="Budha">Budha</option>
                                                        <option value="Lainya">lainya</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-4 col-form-label" for="pekerjaan">Pekerjaan <span class="text-danger">*</span>
                                                </label>
                                                <div class="col-lg-6">
                                                    <input type="text" class="form-control" id="pekerjaan" name="pekerjaan" required="required" value="{{$penduduk->pekerjaan}}" placeholder="Pekerjaan">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-4 col-form-label" for="status_keadaan">Status Keadaan<span class="text-danger">*</span>
                                                </label>
                                                <div class="col-lg-6">
                                                    <select class="form-control" id="status_keadaan" name="status_keadaan" required="required" value="{{$penduduk->status_keadaan}}">
                                                        <option value="">Please select</option>
                                                        <option value="Menikah">Menikah</option>
                                                        <option value="Belum Menikah">Belum Menikah</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-4 col-form-label" for="rt">RT <span class="text-danger">*</span>
                                                </label>
                                                <div class="col-lg-6">
                                                    <input type="text" class="form-control" id="rt" name="rt" required="required" value="{{$penduduk->rt}}" placeholder="RT">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-4 col-form-label" for="rw">RW <span class="text-danger">*</span>
                                                </label>
                                                <div class="col-lg-6">
                                                    <input type="text" class="form-control" id="rw" name="rw" required="required" value="{{$penduduk->rw}}" placeholder="RW">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-4 col-form-label" for="kelurahan">Kelurahan <span class="text-danger">*</span>
                                                </label>
                                                <div class="col-lg-6">
                                                    <input type="text" class="form-control" id="kelurahan" name="kelurahan" required="required" value="{{$penduduk->kelurahan}}" placeholder="kelurahan">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-4 col-form-label" for="kecamatan">Kecamatan <span class="text-danger">*</span>
                                                </label>
                                                <div class="col-lg-6">
                                                    <input type="text" class="form-control" id="kecamatan" name="kecamatan" required="required" value="{{$penduduk->kecamatan}}" placeholder="kecamatan">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-4 col-form-label" for="photo">Foto KTP <span class="text-danger">*</span> <br>
                                                    <img width="150px" src="{{asset('storage/'.$penduduk->photo)}}"></label>
                                                <div class="col-lg-6">
                                                    <input type="file" class="form-control" required="required" name="photo" value="{{$penduduk->photo}}"></br>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-4 col-form-label" for="status">Status<span class="text-danger">*</span>
                                                </label>
                                                <div class="col-lg-6">
                                                    <select class="form-control" id="status" name="status" required="required" value="{{$penduduk->status}}">
                                                        <option value="Belum Terverifikasi">Belum Terferivikasi</option>
                                                        <option value="Terverifikasi">Terferivikasi</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-lg-8 ml-auto">
                                                    <button type="submit" name="edit" class="btn btn-primary">Save Changes</button>
                                                </div>
                                            </div>
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