<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Penduduk;

class PendudukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $penduduk = Penduduk::all();
        return view('penduduks.index', ['penduduk' => $penduduk]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('penduduks.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //add data
        $penduduk = new Penduduk;
        
        if ($request->file('photo')) {
            $image_name = $request->file('photo')->store('images', 'public');
        }

        $penduduk->nik = $request->nik;
        $penduduk->kewarganegaraan = $request->kewarganegaraan;
        $penduduk->nama = $request->nama;
        $penduduk->tempat_lahir = $request->tempat_lahir;
        $penduduk->tanggal_lahir = $request->tanggal_lahir;
        $penduduk->jenis_kelamin = $request->jenis_kelamin;
        $penduduk->agama = $request->agama;
        $penduduk->pekerjaan = $request->pekerjaan;
        $penduduk->status = $request->status;
        $penduduk->status_keadaan = $request->status_keadaan;
        $penduduk->rt = $request->rt;
        $penduduk->rw = $request->rw;
        $penduduk->kelurahan = $request->kelurahan;
        $penduduk->kecamatan = $request->kecamatan;
        $penduduk->photo = $image_name;
        $penduduk->save();

        // if true, redirect to index
        return redirect()->route('penduduks.index')
            ->with('success', 'Add data success!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $penduduk = Penduduk::find($id);
        return view('penduduks.show', ['penduduk' => $penduduk]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $penduduk = Penduduk::find($id);
        return view('penduduks.edit', ['penduduk' => $penduduk]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $penduduk = Penduduk::find($id);
        $penduduk->nik = $request->nik;
        $penduduk->kewarganegaraan = $request->kewarganegaraan;
        $penduduk->nama = $request->nama;
        $penduduk->tempat_lahir = $request->tempat_lahir;
        $penduduk->tanggal_lahir = $request->tanggal_lahir;
        $penduduk->jenis_kelamin = $request->jenis_kelamin;
        $penduduk->agama = $request->agama;
        $penduduk->pekerjaan = $request->pekerjaan;
        $penduduk->status = $request->status;
        $penduduk->status_keadaan = $request->status_keadaan;
        $penduduk->rt = $request->rt;
        $penduduk->rw = $request->rw;
        $penduduk->kelurahan = $request->kelurahan;
        $penduduk->kecamatan = $request->kecamatan;
        if ($penduduk->photo && file_exists(storage_path('app/public/'. $penduduk->photo))) 
        {
            \Storage::delete('public/'.$penduduk->photo);
        }
        $image_name = $request->file('photo')->store('images','public');
        $penduduk->photo = $image_name;
        $penduduk->save();
        return redirect()->route('penduduks.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $penduduk = Penduduk::find($id);
        $penduduk->delete();
        return redirect()->route('penduduks.index');
    }

    public function __construct()
    {
        $this->middleware('auth');
    }
}
