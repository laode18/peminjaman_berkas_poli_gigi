<?php
  
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
  
class LandingController extends Controller
{   
    public function index(Request $request)
    {
        $navpic = DB::table('tb_landingpage_navpic')->get();
        $pasien = DB::table('tb_pasien')->get();
        $berkas = DB::table('tb_berkas')->get();
        $lakis = DB::table('tb_pasien')->where('jenis_kelamin', '=', 'Laki-Laki',$request->jenis_kelamin)->get();
        $perempuans = DB::table('tb_pasien')->where('jenis_kelamin', '=', 'Perempuan',$request->jenis_kelamin)->get();

        return view('landing_page', compact('navpic', 'pasien', 'lakis', 'perempuans', 'berkas'));
    }
}