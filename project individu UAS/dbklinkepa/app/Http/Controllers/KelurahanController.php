<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kelurahan;


class KelurahanController extends Controller
{
    public function index()
    {
        $data_kelurahan = Kelurahan::all();
        return view('kelurahan.index', compact('data_kelurahan'));

    }
    public function create() {
        return view('kelurahan.tambah_kelurahan');
    }

    public function store(Request $request) { 
        $data_kelurahan = new Kelurahan;
        $data_kelurahan->nama = $request->input('nama');
        $data_kelurahan->save();

        return redirect('/kelurahan')->with('success', 'Data berhasil ditambahkan');
    }

    public function edit($id) {
        $kelurahan = Kelurahan::find($id);
        return view('kelurahan.edit_kelurahan', compact('kelurahan'));
    }

    public function update(Request $request, $id) {
        $kelurahan = Kelurahan::find($id);
        $kelurahan->nama = $request->input('nama');
        $kelurahan->save();
        return redirect('/kelurahan')->with('success', 'Data berhasil diupdate');
    }

    public function destroy($id) {
        $kelurahan = Kelurahan::find($id);
        $kelurahan->delete();
        return redirect('/kelurahan')->with('success', 'Data berhasil dihapus');
    }
}






























