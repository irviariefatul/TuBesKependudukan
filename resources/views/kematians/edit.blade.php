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
                                <h4 class="card-title">EDIT DATA KEMATIAN</h4>
                                <br>
                                <div class="basic-form">
                                    @if (session('status'))
                                    <div class="alert alert-success" role="alert">
                                        {{ session('status') }}
                                    </div>
                                    @endif                               
                                    <div class="form-validation">                                            
                                    <form class="form-valide" action="/kematians/{{$kematian->id}}" method="post">
                                        {{csrf_field()}}
                                        @method('PUT')
                                        <input type="hidden" name="id" value="{{$kematian->id}}"></br>                                            
                                            <div class="form-group row">
                                                <label class="col-lg-4 col-form-label" for="nama">Nama<span class="text-danger">*</span>
                                                </label>
                                                <div class="col-lg-6">
                                                    <select class="form-control" name="Penduduk">
                                                        @foreach($penduduk as $p)
                                                        @if($p->status === 'Terverifikasi' )
                                                        <option value="{{$p->id}}" {{$kematian->penduduk_id == $p->id ? "selected":""}}>{{ $p->nama }}</option>
                                                        @endif
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-4 col-form-label" for="tempat">Tempat Meninggal<span class="text-danger">*</span>
                                                </label>
                                                <div class="col-lg-6">
                                                    <input type="text" class="form-control" id="tempat" name="tempat" required="required"  value="{{$kematian->tempat}}" placeholder="Tempat">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-4 col-form-label" for="tanggal">Tanggal Meninggal <span class="text-danger">*</span>
                                                </label>
                                                <div class="col-lg-6">                                                        
                                                    <input type="date" class="form-control" id="tanggal" name="tanggal" required="required" value="{{$kematian->tanggal}}">
                                                </div>
                                            </div>                                                
                                            <div class="form-group row">
                                                <label class="col-lg-4 col-form-label" for="alasan">Alasan<span class="text-danger">*</span>
                                                </label>
                                                <div class="col-lg-6">
                                                    <select class="form-control" id="alasan" name="alasan" required="required" value="{{$kematian->alasan}}">
                                                        <option value="">Please select</option>
                                                        <option value="Sakit">Sakit</option>
                                                        <option value="Kecelakaan">Kecelakaan</option>
                                                        <option value="Lainnya">Lainnya</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-4 col-form-label" for="status">Status<span class="text-danger">*</span>
                                                </label>
                                                <div class="col-lg-6">
                                                    <select class="form-control" id="status" name="status" required="required" value="{{$kematian->status}}">
                                                        <option value="Belum Terverifikasi">Belum Terverifikasi</option>
                                                        <option value="Terverifikasi">Terverifikasi</option>
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