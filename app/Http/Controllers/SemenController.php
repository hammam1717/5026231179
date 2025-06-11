<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SemenController extends Controller
{
    public function index()
    {
        // Mengambil data dari tabel semen
        $semen = DB::table('semen')->paginate(10);

        // Mengirim data ke view index
        return view('index3', ['semen' => $semen]);
    }

    public function tambah()
    {
        // Menampilkan view tambah data semen
        return view('tambah2');
    }

    public function store(Request $request)
    {
        // Insert data ke dalam tabel semen
        DB::table('bis')->insert([
            'merksemen'   => $request->merksemen,
            'hargasemen'  => $request->hargasemen,
            'tersedia'  => $request->tersedia ? 1 : 0, // Checkbox disimpan sebagai 1 (true) atau 0 (false)
            'berat'     => $request->berat
        ]);

        // Redirect ke halaman utama
        return redirect('/semen');
    }

    public function edit($id)
    {
        $semen = DB::table('semen')->where('id', $id)->first(); // Gunakan first() untuk mendapatkan satu data

        if (!$semen) {
            return redirect('/semen')->with('error', 'Data semen tidak ditemukan.');
        }

        return view('edit2', ['semen' => $semen]);
    }

    public function update(Request $request)
    {
        // Update data semen
        DB::table('semen')->where('id', $request->id)->update([
            'merksemen'   => $request->merksemen,
            'hargasemen'  => $request->hargasemen,
            'tersedia'  => $request->tersedia ? 1 : 0, // Checkbox disimpan sebagai 1 (true) atau 0 (false)
            'berat'     => $request->berat
        ]);

        session()->flash('success', 'Data semen berhasil ditambahkan!');
        return redirect('/semen');
    }

    public function hapus($id)
    {
        // Hapus data semen
        DB::table('semen')->where('id', $id)->delete();

        return redirect('/semen');
    }

    public function cari(Request $request)
    {
        $cari = $request->cari;

        // Cari berdasarkan merkbis
        $bis = DB::table('semen')
            ->where('merksemen', 'like', "%" . $cari . "%")
            ->paginate();

        return view('index3', ['semen' => $semen]);
    }
}
