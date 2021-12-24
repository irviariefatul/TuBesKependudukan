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
                                <h4 class="card-title">EDIT DATA KELAHIRAN</h4>
                                <br>
                                <div class="basic-form">
                                    @if (session('status'))
                                    <div class="alert alert-success" role="alert">
                                        {{ session('status') }}
                                    </div>
                                    @endif
                                    <div class="form-validation">
                                        <form class="form-valide" action="/kelahirans/{{$kelahiran->id}}" method="post">
                                            {{csrf_field()}}
                                            @method('PUT')
                                            <input type="hidden" name="id" value="{{$kelahiran->id}}"></br>
                                            <div class="form-group row">
                                                <label class="col-lg-4 col-form-label" for="nama_ibu">Nama Ibu<span class="text-danger">*</span>
                                                </label>
                                                <div class="col-lg-6">
                                                    <select class="form-control" name="Penduduk">
                                                        @foreach($penduduk as $p)
                                                        @if( $p->jenis_kelamin === 'Perempuan' AND $p->status_keadaan ==='Menikah' AND $p->status === 'Terverifikasi' )
                                                        <option value="{{$p->id}}" {{$kelahiran->penduduk_id == $p->id ? "selected":""}}>{{ $p->nama }}</option>
                                                        @endif
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-4 col-form-label" for="nama">Nama Anak <span class="text-danger">*</span>
                                                </label>
                                                <div class="col-lg-6">
                                                    <input type="text" class="form-control" id="nama" name="nama" required="required" value="{{$kelahiran->nama}}" placeholder="Nama Anak">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-4 col-form-label" for="tempat">Tempat Lahir <span class="text-danger">*</span>
                                                </label>
                                                <div class="col-lg-6">
                                                    <input type="text" class="form-control" id="tempat" name="tempat" required="required" value="{{$kelahiran->tempat}}" placeholder="Tempat Lahir">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-4 col-form-label" for="anak_ke">Anak Ke <span class="text-danger">*</span>
                                                </label>
                                                <div class="col-lg-6">
                                                    <input type="text" class="form-control" id="anak_ke" name="anak_ke" required="required" value="{{$kelahiran->anak_ke}}" placeholder="Anak Ke">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-4 col-form-label" for="tanggal">Tanggal Lahir <span class="text-danger">*</span>
                                                </label>
                                                <div class="col-lg-6">
                                                    <input type="date" class="form-control" id="tanggal" name="tanggal" required="required" value="{{$kelahiran->tanggal}}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-4 col-form-label" for="jenis_kelamin">Jenis Kelamin<span class="text-danger">*</span>
                                                </label>
                                                <div class="col-lg-6">
                                                    <select class="form-control" id="jenis_kelamin" name="jenis_kelamin" required="required" value="{{$kelahiran->jenis_kelamin}}">
                                                        <option value="">Please select</option>
                                                        <option value="Laki-Laki">Laki - Laki</option>
                                                        <option value="Perempuan">Perempuan</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-4 col-form-label" for="status">Status<span class="text-danger">*</span>
                                                </label>
                                                <div class="col-lg-6">
                                                    <select class="form-control" id="status" name="status" required="required" value="{{$kelahiran->status}}">
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