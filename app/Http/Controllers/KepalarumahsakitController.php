<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Pasien;

class KepalarumahsakitController extends Controller
{

    public function __construct()
    {
         $this->middleware('auth');
    }
    
    public function index(Request $request)
    {
        return view('kepalars.laporandatars');
    }

    public function datapasien(Request $request)
    {
        $pasien = DB::table('tb_pasien')->get();

        return view('kepalars.previewpasienrs', compact('pasien'));
    }

    public function databerkas(Request $request)
    {
        $berkas = DB::table('tb_berkas')
            ->join('tb_pasien', 'tb_pasien.id_pasien', '=', 'tb_berkas.id_pasien')
            ->join('tb_dokter', 'tb_dokter.id_dokter', '=', 'tb_berkas.id_dokter')
            ->get();

        return view('kepalars.previewberkasrs', compact('berkas'));
    }
}
