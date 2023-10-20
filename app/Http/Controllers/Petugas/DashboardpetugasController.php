<?php

namespace App\Http\Controllers\Petugas;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardpetugasController extends Controller
{

    public function __construct()
    {
         $this->middleware('auth');
    }
    
    public function index(Request $request)
    {
        $pasien = DB::table('tb_pasien')->get();
        $berkas = DB::table('tb_berkas')->get();
        $lakis = DB::table('tb_pasien')->where('jenis_kelamin', '=', 'Laki-Laki',$request->jenis_kelamin)->get();
        $perempuans = DB::table('tb_pasien')->where('jenis_kelamin', '=', 'Perempuan',$request->jenis_kelamin)->get();

        return view('petugas.dashboard', compact('pasien', 'lakis', 'perempuans', 'berkas'));
    }
}
