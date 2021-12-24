@extends('layouts.app3')

@section('content')
@if (session('status'))
<div class="alert alert-success" role="alert">
    {{ session('status') }}
</div>
@endif
<div class="container-fluid mt-3">
    @can('manage-admins')
    <div class="row">
        <div class="col-lg-3 col-sm-6">
            <div class="card gradient-1">
                <div class="card-body">
                    <h3 class="card-title text-white">Penduduk</h3>
                    <div class="d-inline-block">
                        <h2 class="text-white">{{ $totalPenduduk }}</h2>
                    </div>
                    <span class="float-right display-5 opacity-5"><i class="fa fa-users"></i></span>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6">
            <div class="card gradient-2">
                <div class="card-body">
                    <h3 class="card-title text-white">Kartu Keluarga</h3>
                    <div class="d-inline-block">
                        <h2 class="text-white"> {{ $totalKK }}</h2>
                    </div>
                    <span class="float-right display-5 opacity-5"><i class="fa fa-folder"></i></span>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6">
            <div class="card gradient-3">
                <div class="card-body">
                    <h3 class="card-title text-white">Kelahiran</h3>
                    <div class="d-inline-block">
                        <h2 class="text-white">{{ $totalKelahiran }}</h2>
                    </div>
                    <span class="float-right display-5 opacity-5"><i class="fa fa-heart"></i></span>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6">
            <div class="card gradient-4">
                <div class="card-body">
                    <h3 class="card-title text-white">Kematian</h3>
                    <div class="d-inline-block">
                        <h2 class="text-white">{{ $totalKematian }}</h2>
                    </div>
                    <span class="float-right display-5 opacity-5"><i class="fa fa-star"></i></span>
                </div>
            </div>
        </div>
    </div>

    @elsecan('manage-users')
    <div class="container-fluid">
        <div class="row">
            <div class="col-18">
                <div class="card">
                    <div class="card-body">
                        <h1>Selamat Datang</h1>
                        <p>WebsKep adalah Website Kependudukan yang sangaja dibuat oleh pegawai desa/kelurahan.
                            Terciptanya WebsKep diharapkan dapat membantu para penduduk desa dan pegawai desa/kelurahan, agar mekanisme
                            dalam mendapatkan surat atau membuat surat dapat dilakukan dengan cepat, efektif dan efisien. Tanpa perlu pergi ke kantor
                            desa/kelurahan kecuali kepentingan mendesak. Sehingga dapat menekan angka korban Covid-19 di Indoensia
                            karena WebsKep dapat mengurangi tingkat bertemu atau berkomunikasi secara langsung dengan banyak orang.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- PETA -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-18">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title mb-6">Location</h4>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d987.8859514555177!2d112.61930815763323!3d-7.942618658877191!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x789ce9a636cd3aa2!2sPoliteknik%20Negeri%20Malang!5e0!3m2!1sid!2sid!4v1639405330303!5m2!1sid!2sid" width="1110" height="500" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endcan
</div>
<!--************
 Content body end
*************-->
@endsection