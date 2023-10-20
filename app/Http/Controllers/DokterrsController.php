<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Pasien;
use App\Models\Berkas;
use App\Models\Dosen;

class DokterrsController extends Controller
{

    public function __construct()
    {
         $this->middleware('auth');
    }
    
    public function index(Request $request)
    {
        $berkas = DB::table('tb_berkas')
            ->join('tb_pasien', 'tb_pasien.id_pasien', '=', 'tb_berkas.id_pasien')
            ->join('tb_dokter', 'tb_dokter.id_dokter', '=', 'tb_berkas.id_dokter')
            ->get();

        $pasien = DB::table('tb_pasien')->get();
        $dokter = DB::table('tb_dokter')->get();

        return view('dokterrs', compact('berkas', 'pasien', 'dokter'));
    }

}
