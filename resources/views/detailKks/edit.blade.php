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
                                <h4 class="card-title">EDIT DATA ANGGOTA KELUARGA</h4>
                                <br>
                                <div class="basic-form">
                                    @if (session('status'))
                                    <div class="alert alert-success" role="alert">
                                        {{ session('status') }}
                                    </div>
                                    @endif                               
                                    <div class="form-validation">                                            
                                    <form class="form-valide" action="/detailKks/{{$detailkk->id}}" method="post">
                                        {{csrf_field()}}
                                        @method('PUT')
                                        <input type="hidden" name="id" value="{{$detailkk->id}}"></br>     
                                        <div class="form-group row">
                                                <label class="col-lg-4 col-form-label" for="nomor">Nomor Kartu Keluarga<span class="text-danger">*</span>
                                                </label>
                                                <div class="col-lg-6">
                                                <select class="form-control" name="kartuKeluarga">
                                                        @foreach($kartuKeluarga as $kk)
                                                        <option value="{{$kk->id}}" {{$detailkk->kartukeluarga_id == $kk->id ? "selected":""}}>{{ $kk->nomor }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>                                       
                                            <div class="form-group row">
                                                <label class="col-lg-4 col-form-label" for="nama_anggota_keluarga">Nama Kepala Keluarga<span class="text-danger">*</span>
                                                </label>
                                                <div class="col-lg-6">
                                                    <select class="form-control" name="Penduduk">
                                                        @foreach($penduduk as $p)
                                                        @if($p->status === 'Terverifikasi' )
                                                        <option value="{{$p->id}}" {{$detailkk->penduduk_id == $p->id ? "selected":""}}>{{ $p->nama }}</option>
                                                        @endif
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-4 col-form-label" for="hubungan">Hubungan <span class="text-danger">*</span>
                                                </label>
                                                <div class="col-lg-6">
                                                    <input type="text" class="form-control" id="hubungan" name="hubungan" required="required" value="{{$detailkk->hubungan}}" placeholder="Hubungan">
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