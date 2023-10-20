<?php

namespace App\Http\Controllers\Petugas;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Pasien;

class LaporanberkasController extends Controller
{

    public function __construct()
    {
         $this->middleware('auth');
    }
    
    public function index(Request $request)
    {
        return view('petugas.laporandata');
    }

    public function datapasien(Request $request)
    {
        $pasien = DB::table('tb_pasien')->get();

        return view('petugas.previewpasien', compact('pasien'));
    }

    public function databerkas(Request $request)
    {
        $berkas = DB::table('tb_berkas')
            ->join('tb_pasien', 'tb_pasien.id_pasien', '=', 'tb_berkas.id_pasien')
            ->join('tb_dokter', 'tb_dokter.id_dokter', '=', 'tb_berkas.id_dokter')
            ->get();

        return view('petugas.previewberkas', compact('berkas'));
    }
}
