<?php

namespace App\Http\Controllers;

use App\Models\DetailKk;
use App\Models\KartuKeluarga;
use App\Models\Penduduk;
use Illuminate\Http\Request;

class KartuKeluargaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kartuKeluarga = KartuKeluarga::with('penduduks')->get();
        return view('kartuKeluargas.index', ['kartuKeluarga' => $kartuKeluarga]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $penduduk = Penduduk::all();
        return view('kartuKeluargas.create', ['penduduk' => $penduduk]);
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
        $kartuKeluarga = new KartuKeluarga;
        
        $kartuKeluarga->nomor = $request->nomor;
        $kartuKeluarga->status = $request->status;

        $penduduk = new Penduduk;
        $penduduk->id = $request->Penduduk;

        $kartuKeluarga->penduduks()->associate($penduduk);
        $kartuKeluarga->save();

        // if true, redirect to index
        return redirect()->route('kartuKeluargas.index')
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
        $kartuKeluarga = KartuKeluarga::find($id);
        $detailkk = DetailKk::all();
        return view('kartuKeluargas.show', [
            'kartuKeluarga' => $kartuKeluarga,
            'detailkk' => $detailkk
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kartuKeluarga = KartuKeluarga::find($id);
        $penduduk = Penduduk::all();
        return view('kartuKeluargas.edit', [
            'kartuKeluarga' => $kartuKeluarga,
            'penduduk' => $penduduk
        ]);
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
        $kartuKeluarga = KartuKeluarga::find($id);

        $kartuKeluarga->status = $request->status;
        $kartuKeluarga->nomor = $request->nomor;

        $penduduk = new Penduduk;
        $penduduk->id = $request->Penduduk;

        $kartuKeluarga->penduduks()->associate($penduduk);
        $kartuKeluarga->save();

        return redirect()->route('kartuKeluargas.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kartuKeluarga = KartuKeluarga::find($id);
        $kartuKeluarga->delete();
        return redirect()->route('kartuKeluargas.index');
    }

    public function __construct()
    {
        $this->middleware('auth');
    }
}
