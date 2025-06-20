<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KategoriController extends Controller
{
    public function index()
    {
        $kategori = DB::table('kategori')->get();
        return view('combo', compact('kategori'));
    }

    public function submit(Request $request)
    {
        $id = $request->input('kategori');
        return view('combo', [
            'kategori' => DB::table('kategori')->get(),
            'selected_id' => $id
        ]);
    }
}

