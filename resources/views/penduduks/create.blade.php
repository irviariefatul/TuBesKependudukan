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
                                <h4 class="card-title">ADD DATA PENDUDUK</h4>
                                <br>
                                <div class="basic-form">
                                    @if (session('status'))
                                    <div class="alert alert-success" role="alert">
                                        {{ session('status') }}
                                    </div>
                                    @endif
                                    <div class="form-validation">
                                        <form class="form-valide" action="/penduduks" method="post" enctype="multipart/form-data">
                                            @csrf
                                            <div class="form-group row">
                                                <label class="col-lg-4 col-form-label" for="nik">NIK <span class="text-danger">*</span>
                                                </label>
                                                <div class="col-lg-6">
                                                    <input type="text" class="form-control" id="nik" name="nik" placeholder="NIK" required="required">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-4 col-form-label" for="kewarganegaraan">Kewarganegaraan <span class="text-danger">*</span>
                                                </label>
                                                <div class="col-lg-6">
                                                    <input type="text" class="form-control" id="kewarganegaraan" name="kewarganegaraan" placeholder="Kewarganegaraan" required="required">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-4 col-form-label" for="nama">Nama <span class="text-danger">*</span>
                                                </label>
                                                <div class="col-lg-6">
                                                    <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama" required="required">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-4 col-form-label" for="tempat_lahir">Tempat Lahir <span class="text-danger">*</span>
                                                </label>
                                                <div class="col-lg-6">
                                                    <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" placeholder="Tempat Lahir" required="required">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-4 col-form-label" for="tanggal_lahir">Tanggal Lahir <span class="text-danger">*</span>
                                                </label>
                                                <div class="col-lg-6">
                                                    <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" required="required">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-4 col-form-label" for="jenis_kelamin">Jenis Kelamin<span class="text-danger">*</span>
                                                </label>
                                                <div class="col-lg-6">
                                                    <select class="form-control" id="jenis_kelamin" name="jenis_kelamin" required="required">
                                                        <option value="">Please select</option>
                                                        <option value="Laki - Laki">Laki - Laki</option>
                                                        <option value="Perempuan">Perempuan</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-4 col-form-label" for="agama">Agama<span class="text-danger">*</span>
                                                </label>
                                                <div class="col-lg-6">
                                                    <select class="form-control" id="agama" name="agama" required="required">
                                                        <option value="">Please select</option>
                                                        <option value="islam">Islam</option>
                                                        <option value="kristen">Kristen</option>
                                                        <option value="katolik">Katolik</option>
                                                        <option value="hindu">Hindu</option>
                                                        <option value="budha">Budha</option>
                                                        <option value="lainya">lainya</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-4 col-form-label" for="pekerjaan">Pekerjaan <span class="text-danger">*</span>
                                                </label>
                                                <div class="col-lg-6">
                                                    <input type="text" class="form-control" id="pekerjaan" name="pekerjaan" placeholder="Pekerjaan" required="required">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-4 col-form-label" for="status_keadaan">Status Keadaan<span class="text-danger">*</span>
                                                </label>
                                                <div class="col-lg-6">
                                                    <select class="form-control" id="status_keadaan" name="status_keadaan" required="required">
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
                                                    <input type="text" class="form-control" id="rt" name="rt" placeholder="RT" required="required">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-4 col-form-label" for="rw">RW <span class="text-danger">*</span>
                                                </label>
                                                <div class="col-lg-6">
                                                    <input type="text" class="form-control" id="rw" name="rw" placeholder="RW" required="required">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-4 col-form-label" for="kelurahan">Kelurahan <span class="text-danger">*</span>
                                                </label>
                                                <div class="col-lg-6">
                                                    <input type="text" class="form-control" id="kelurahan" name="kelurahan" placeholder="Kelurahan" required="required">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-4 col-form-label" for="kecamatan">Kecamatan <span class="text-danger">*</span>
                                                </label>
                                                <div class="col-lg-6">
                                                    <input type="text" class="form-control" id="kecamatan" name="kecamatan" placeholder="Kecamatan" required="required">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-4 col-form-label" for="photo">Foto KTP <span class="text-danger">*</span>
                                                </label>
                                                <div class="col-lg-6">
                                                    <input type="file" class="form-control" id="photo" name="photo" required="required">
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
                                                    <button type="submit" class="btn btn-primary">Confirm</button>
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