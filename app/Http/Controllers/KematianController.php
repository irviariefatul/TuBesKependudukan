<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kematian;
use App\Models\Penduduk;
use PDF;


class KematianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kematian = Kematian::with('penduduks')->get();
        return view('kematians.index', ['kematian' => $kematian]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $penduduk = Penduduk::all();
        return view('kematians.create', ['penduduk' => $penduduk]);
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
        $kematian = new Kematian;
        
        $kematian->alasan = $request->alasan;
        $kematian->tempat = $request->tempat;
        $kematian->status = $request->status;
        $kematian->tanggal = $request->tanggal;

        $penduduk = new Penduduk;
        $penduduk->id = $request->Penduduk;

        $kematian->penduduks()->associate($penduduk);
        $kematian->save();

        // if true, redirect to index
        return redirect()->route('kematians.index')
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
        $kematian = Kematian::find($id);
        return view('kematians.show', ['kematian' => $kematian]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kematian = Kematian::find($id);
        $penduduk = Penduduk::all();
        return view('kematians.edit', [
            'kematian' => $kematian,
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
        $kematian = Kematian::find($id);

        $kematian->tanggal = $request->tanggal;
        $kematian->alasan = $request->alasan;
        $kematian->tempat = $request->tempat;
        $kematian->status = $request->status;

        $penduduk = new Penduduk;
        $penduduk->id = $request->Penduduk;

        $kematian->penduduks()->associate($penduduk);
        $kematian->save();

        return redirect()->route('kematians.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kematian = kematian::find($id);
        $kematian->delete();
        return redirect()->route('kematians.index');
    }

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function report($id){
        $kematian = Kematian::find($id);
        $pdf = PDF::loadview('kematians.report',['kematian'=>$kematian]);
        return $pdf->stream();
    }
}
