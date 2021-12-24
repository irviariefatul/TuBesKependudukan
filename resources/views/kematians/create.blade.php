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
                                <h4 class="card-title">ADD DATA KEMATIAN</h4>
                                <br>
                                <div class="basic-form">
                                    @if (session('status'))
                                    <div class="alert alert-success" role="alert">
                                        {{ session('status') }}
                                    </div>
                                    @endif
                                    <div class="form-validation">
                                        <form class="form-valide" action="/kematians" method="post">
                                            @csrf
                                            <div class="form-group row">
                                                <label class="col-lg-4 col-form-label" for="nama_orang_tua">Nama<span class="text-danger">*</span>
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
                                            <div class="form-group row">
                                                <label class="col-lg-4 col-form-label" for="tempat">Tempat Meninggal<span class="text-danger">*</span>
                                                </label>
                                                <div class="col-lg-6">
                                                    <input type="text" class="form-control" id="tempat" name="tempat" placeholder="Tempat" required="required">
                                                </div>
                                            </div> 
                                            <div class="form-group row">
                                                <label class="col-lg-4 col-form-label" for="tanggal">Tanggal Meninggal <span class="text-danger">*</span>
                                                </label>
                                                    <div class="col-lg-6">                                                        
                                                        <input type="date" class="form-control" id="tanggal" name="tanggal" required="required">
                                                    </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-4 col-form-label" for="alasan">Alasan<span class="text-danger">*</span>
                                                </label>
                                                <div class="col-lg-6">
                                                    <select class="form-control" id="alasan" name="alasan" required="required">
                                                        <option value="">Please select</option>
                                                        <option value="Sakit">Sakit</option>
                                                        <option value="Kecelakaan">Kecelakaan</option>
                                                        <option value="Lainnya">Lainnya</option>
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