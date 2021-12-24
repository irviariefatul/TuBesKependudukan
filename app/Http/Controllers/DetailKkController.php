<?php

namespace App\Http\Controllers;

use App\Models\DetailKk;
use App\Models\KartuKeluarga;
use App\Models\Penduduk;
use Illuminate\Http\Request;

class DetailKkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kartuKeluarga = KartuKeluarga::all();
        $detailkk = DetailKk::all();
        return view('detailKks.index', [
            'kartuKeluarga' => $kartuKeluarga,
            'detailkk' => $detailkk
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $penduduk = Penduduk::all();
        $kartuKeluarga = KartuKeluarga::all();
        return view('detailKks.create', [
            'penduduk' => $penduduk,
            'kartuKeluarga' => $kartuKeluarga
        ]);
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
        $detailkk = new DetailKk;
        
        $detailkk->hubungan = $request->hubungan;

        $penduduk = new Penduduk;
        $penduduk->id = $request->Penduduk;

        $kartuKeluarga = new KartuKeluarga;
        $kartuKeluarga->id = $request->kartuKeluarga;

        $detailkk->penduduks()->associate($penduduk);
        $detailkk->kartu_keluargas()->associate($kartuKeluarga);
        $detailkk->save();

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
        $detailkk = DetailKk::find($id);
        $kartuKeluarga = KartuKeluarga::all();
        $penduduk = Penduduk::all();
        return view('penduduks.show', [
            'kartuKeluarga' => $kartuKeluarga,
            'detailkk' => $detailkk,
            'penduduk' => $penduduk
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
        $detailkk = DetailKk::find($id);
        $penduduk = Penduduk::all();
        $kartuKeluarga = KartuKeluarga::all();
        return view('detailKks.edit', [
            'kartuKeluarga' => $kartuKeluarga,
            'penduduk' => $penduduk,
            'detailkk' => $detailkk
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
        $detailkk = DetailKk::find($id);

        $detailkk->hubungan = $request->hubungan;

        $penduduk = new Penduduk;
        $penduduk->id = $request->Penduduk;

        $kartuKeluarga = new KartuKeluarga;
        $kartuKeluarga->id = $request->kartuKeluarga;

        $detailkk->penduduks()->associate($penduduk);
        $detailkk->kartu_keluargas()->associate($kartuKeluarga);
        $detailkk->save();

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
        $detailkk = DetailKk::find($id);
        $detailkk->delete();
        return redirect()->route('kartuKeluargas.index');
    }

    public function __construct()
    {
        $this->middleware('auth');
    }
}
