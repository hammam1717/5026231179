<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class NewKaryawanController extends Controller
{
    public function index()
    {
        $data = DB::table('newkaryawan')->get();
        return view('newkaryawan.index', compact('data'));
    }

    public function create()
    {
        return view('newkaryawan.create');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
        'NIP' => 'required|unique:newkaryawan,NIP|size:9',
        'nama' => 'required|string',
        'pangkat' => 'required|string',
        'gaji' => 'required|integer|min:0',
        ]);

        if($validator->fails()){
        return redirect()->back()->withErrors($validator)->withInput();
        }
        DB::table('newkaryawan') -> insert ([
            'NIP'=> $request -> NIP,
            'nama'=> $request -> nama,
            'pangkat'=> $request -> pangkat,
            'gaji'=> $request -> gaji,
        ]);
        return redirect() -> route ('karyawan.index');
    }

    public function destroy($nip)
    {
    DB::table('newkaryawan')->where('NIP', $nip)->delete();
    return redirect()->route('karyawan.index');
    }

}
