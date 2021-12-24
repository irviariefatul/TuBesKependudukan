<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Penduduk;
use App\Models\Kelahiran;
use App\Models\Kematian;
use App\Models\KartuKeluarga;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $totalPenduduk = Penduduk::count();
        $totalKelahiran = Kelahiran::count();
        $totalKematian = Kematian::count();
        $totalKK = KartuKeluarga::count();

        return view('home', compact(
            'totalPenduduk', 'totalKelahiran', 'totalKematian', 'totalKK'
        ));

        $user = Auth::user();
        return view('home',['user' => $user]);
    }
}
