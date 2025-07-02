<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UnitKerja;

class UnitKerjaController extends Controller
{
    public function index()
    {
        $data_unit_kerja = UnitKerja::all();
        return view('unit_kerja.index', compact('data_unit_kerja'));
    }

    public function create()
    {
        return view('unit_kerja.tambah');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
        ]);

        $unit_kerja = new UnitKerja;
        $unit_kerja->nama = $request->nama;
        $unit_kerja->save();

        return redirect('/unitkerja');
    }

    public function edit($id)
    {
        $unit_kerja = UnitKerja::find($id);
        return view('unit_kerja.edit', compact('unit_kerja'));
    }

    public function update(Request $request, $id)
    {
        $unit_kerja = UnitKerja::find($id);
        $unit_kerja->nama = $request->input('nama');
        $unit_kerja->save();
        return redirect('/unitkerja');
    }

    public function destroy($id)
    {
        $unit_kerja = UnitKerja::find($id);
        $unit_kerja->delete();
        return redirect('/unitkerja');
    }
}
