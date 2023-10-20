<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Dokter;
use App\Models\User;
use Hash;

class DatadokterController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index(Request $request)
    {
        $dokter = DB::table('tb_dokter')->get();

        $q = DB::table('tb_dokter')->select(DB::raw('MAX(RIGHT(id_dokter,3)) as kode'));
        $kd="";
        if($q->count()>0)
        {
            foreach($q->get() as $k)
            {
                $tmp = ((int)$k->kode)+1;
                $kd = sprintf("%03s",$tmp);
            }
        }
        else {
            $kd = "505";
        }

        return view('admin.datadokter', compact('dokter', 'kd'));
    }

    public function create()
    {
        return view('admin.datadokter');
    }

    public function store(Request $request)
    {
        $this->validate(request(), [
            'id_dokter' => 'required',
            'name' => 'required',
            'jenis_kelamin' => 'required',
            'spesialis' => 'required',
            'alamat' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);

        $dokter = Dokter::create([
        'id_dokter' => $request->id_dokter,
        'name' => $request->name,
        'jenis_kelamin' => $request->jenis_kelamin,
        'spesialis' => $request->spesialis,
        'alamat' => $request->alamat,
        'email' => $request->email,
        'password' => $request->password,
        
        ]);

        $user = new User();
        $user->id = $request->id_dokter;
        $user->name = $request->post('name');
        $user->email = $request->post('email');
        $user->password = Hash::make($request->post('password'));
        $user->level = 'dokter';
        $user->save();

        if($dokter){
        //redirect dengan pesan sukses
            return redirect()->route('admin.datadokter')->with(['success' => 'Data Saved Successfully!']);
        }else{
        //redirect dengan pesan error
            return redirect()->route('admin.datadokter')->with(['error' => 'Data Save Failed!']);
        }

    }

    public function edit($id_dokter)
    {
        $dokter = Dokter::where('id_dokter',$id_dokter)->get();

        return view('admin.datadokter', compact('dokter'));
    }

  

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        DB::table('tb_dokter')->where('id_dokter',$request->id_dokter)->update([
            'name' => $request->name,
            'jenis_kelamin' => $request->jenis_kelamin,
            'spesialis' => $request->spesialis,
            'alamat' => $request->alamat,
            'email' => $request->email,
            'password' => $request->password,
        ]);

        DB::table('users')->where('id',$request->id_dokter)->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect('/admin/datadokter')->with(['success' => 'Data Updated Successfully!']);
    }

    public function destroy($id_dokter)
    {
        DB::table('tb_dokter')->where('id_dokter', $id_dokter)->delete();

        DB::table('users')->where('id', $id_dokter)->delete();

        return redirect ('/admin/datadokter')->with(['success' => 'Data Deleted Successfully!']);
    }
}
