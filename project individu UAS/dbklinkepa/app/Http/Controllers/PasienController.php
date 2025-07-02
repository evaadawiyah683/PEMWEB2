<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pasien;
use App\Models\Kelurahan;
class PasienController extends Controller
{
    public function index() {
        $data_pasien = Pasien::all();
        return view('pasien.index', compact('data_pasien'));
    }

    public function create() {
        $data_kelurahan = Kelurahan::all();

        return view('pasien.tambah_pasien', compact('data_kelurahan'));
    }

    public function store(Request $request) {
        $request->validate([
            'kode' => 'required|max:10',
            'nama' => 'required',
            'tmp_lahir' => 'required',
            'tgl_lahir' => 'required|date',
            'jk' => 'required',
            'alamat' => 'required',
            'email' => 'required|email',
            'kelurahan_id' => 'required|exists:kelurahans,id'
        ]);

        $pasien = new Pasien;
        $pasien->kode = $request->kode;
        $pasien->nama = $request->nama;
        $pasien->tmp_lahir = $request->tmp_lahir;
        $pasien->tgl_lahir = $request->tgl_lahir;
        $pasien->jk = $request->jk;
        $pasien->alamat = $request->alamat;
        $pasien->email = $request->email;
        $pasien->kelurahan_id = $request->kelurahan_id;
        $pasien->save();

        return redirect('/pasien');
    }

    public function edit($id) {
        // get data kelurahan berdasarkan id
        $pasien = Pasien::find($id);
        $data_kelurahan = Kelurahan::all();
        return view('pasien.edit', compact('pasien', 'data_kelurahan'));
    }

    public function update(Request $request, $id) {
        $request->validate([
            'kode' => 'required|max:10',
            'nama' => 'required',
            'tmp_lahir' => 'required',
            'tgl_lahir' => 'required|date',
            'jk' => 'required',
            'alamat' => 'required',
            'email' => 'required|email',
            'kelurahan_id' => 'required|exists:kelurahans,id'
        ]);

        $pasien = Pasien::find($id);
        $pasien->kode = $request->kode;
        $pasien->nama = $request->nama;
        $pasien->tmp_lahir = $request->tmp_lahir;
        $pasien->tgl_lahir = $request->tgl_lahir;
        $pasien->jk = $request->jk;
        $pasien->alamat = $request->alamat;
        $pasien->email = $request->email;
        $pasien->kelurahan_id = $request->kelurahan_id;
        $pasien->save();

        return redirect('/pasien');
    }

    public function destroy($id) {
        $pasien = Pasien::find($id);
        $pasien->delete();
        return redirect('/pasien');
    }
}
