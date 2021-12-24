<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kelahiran;
use App\Models\Penduduk;
use PDF;

class KelahiranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kelahiran = Kelahiran::with('penduduks')->get();
        return view('kelahirans.index', ['kelahiran' => $kelahiran]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $penduduk = Penduduk::all();
        return view('kelahirans.create',['penduduk'=>$penduduk]);
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
        $kelahiran = new Kelahiran;

        $kelahiran->nama = $request->nama;
        $kelahiran->tempat = $request->tempat;
        $kelahiran->anak_ke = $request->anak_ke;
        $kelahiran->jenis_kelamin = $request->jenis_kelamin;
        $kelahiran->tanggal = $request->tanggal;
        $kelahiran->status = $request->status;

        $penduduk = new Penduduk;
        $penduduk->id = $request->Penduduk;

        $kelahiran->penduduks()->associate($penduduk);
        $kelahiran->save();

        // if true, redirect to index
        return redirect()->route('kelahirans.index')
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
        $kelahiran = Kelahiran::find($id);
        return view('kelahirans.show', ['kelahiran' => $kelahiran]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kelahiran = Kelahiran::find($id);
        $penduduk = Penduduk::all();
        return view('kelahirans.edit',['kelahiran'=>$kelahiran,
        'penduduk'=>$penduduk]);
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
        $kelahiran = Kelahiran::find($id);

        $kelahiran->nama = $request->nama;
        $kelahiran->tempat = $request->tempat;
        $kelahiran->anak_ke = $request->anak_ke;
        $kelahiran->jenis_kelamin = $request->jenis_kelamin;
        $kelahiran->tanggal = $request->tanggal;
        $kelahiran->status = $request->status;

        $penduduk = new Penduduk;
        $penduduk->id = $request->Penduduk;

        $kelahiran->penduduks()->associate($penduduk);
        $kelahiran->save();

        return redirect()->route('kelahirans.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kelahiran = Kelahiran::find($id);
        $kelahiran->delete();
        return redirect()->route('kelahirans.index');
    }

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function report($id){
        $kelahiran = Kelahiran::find($id);
        $pdf = PDF::loadview('kelahirans.report',['kelahiran'=>$kelahiran]);
        return $pdf->stream();
    }
}
