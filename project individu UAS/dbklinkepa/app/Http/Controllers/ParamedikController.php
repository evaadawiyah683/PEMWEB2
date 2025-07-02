<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Paramedik;
use App\Models\UnitKerja;

class ParamedikController extends Controller
{
    public function index()
    {
        $data_paramedik = Paramedik::all();
        return view('paramedik.index', compact('data_paramedik'));
    }

    public function create()
    {
        $data_unit_kerja = UnitKerja::all();
        return view('paramedik.tambah', compact('data_unit_kerja'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'gender' => 'required',
            'tmp_lahir' => 'required',
            'tgl_lahir' => 'required',
            'kategori' => 'required',
            'telepon' => 'required',
            'alamat' => 'required',
            'unit_kerja_id' => 'required',
        ]);

        $paramedik = new Paramedik;
        $paramedik->nama = $request->nama;
        $paramedik->gender = $request->gender;
        $paramedik->tmp_lahir = $request->tmp_lahir;
        $paramedik->tgl_lahir = $request->tgl_lahir;
        $paramedik->kategori = $request->kategori;
        $paramedik->telepon = $request->telepon;
        $paramedik->alamat = $request->alamat;
        $paramedik->unit_kerja_id = $request->unit_kerja_id;
        $paramedik->save();

        return redirect('/paramedik');
    }

    public function edit($id)
    {
        $paramedik = Paramedik::find($id);
        $data_unit_kerja = UnitKerja::all();
        return view('paramedik.edit', compact('paramedik', 'data_unit_kerja'));
    }

    public function update(Request $request, $id)
    {
        $paramedik = Paramedik::find($id);
        $paramedik->nama = $request->input('nama');
        $paramedik->gender = $request->input('gender');
        $paramedik->tmp_lahir = $request->input('tmp_lahir');
        $paramedik->tgl_lahir = $request->input('tgl_lahir');
        $paramedik->kategori = $request->input('kategori');
        $paramedik->telepon = $request->input('telepon');
        $paramedik->alamat = $request->input('alamat');
        $paramedik->unit_kerja_id = $request->input('unit_kerja_id');
        $paramedik->save();
        return redirect('/paramedik');
    }

    public function destroy($id)
    {
        $paramedik = Paramedik::find($id);
        $paramedik->delete();
        return redirect('/paramedik');
    }
}
