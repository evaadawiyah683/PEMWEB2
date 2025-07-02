<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Periksa;
use App\Models\Pasien;
use App\Models\Paramedik;

class PeriksaController extends Controller
{
    public function index()
    {
        $data_periksa = Periksa::all();
        return view('periksa.index', compact('data_periksa'));
    }

    public function create()
    {
        $data_pasien = Pasien::all();
        $data_paramedik = Paramedik::all();
        return view('periksa.tambah', compact('data_pasien', 'data_paramedik'));
    }

    public function store(Request $request) {
        // 'berat',
        // 'tinggi',
        // 'tensi',
        // 'keterangan',
        // 'pasien_id',
        // 'paramedik_id'
        $request->validate([
            'tanggal' => 'required',
            'berat' => 'required',
            'tinggi' => 'required',
            'tensi' => 'required',
            'keterangan' => 'required',
            'pasien_id' => 'required',
            'paramedik_id' => 'required'
        ]);

        $periksa = new Periksa;
        $periksa->tanggal = $request->tanggal;
        $periksa->berat = $request->berat;
        $periksa->tinggi = $request->tinggi;
        $periksa->tensi = $request->tensi;
        $periksa->keterangan = $request->keterangan;
        $periksa->pasien_id = $request->pasien_id;
        $periksa->paramedik_id = $request->paramedik_id;
        $periksa->save();

        return redirect('/periksa');
    }

    public function edit($id) {
        $data_periksa = Periksa::find($id);
        $data_pasien = Pasien::all();
        $data_paramedik = Paramedik::all();
        return view('periksa.edit', compact('data_periksa', 'data_pasien', 'data_paramedik'));
    }

    public function update(Request $request, $id) {
        $request->validate([
            'tanggal' => 'required',
            'berat' => 'required',
            'tinggi' => 'required',
            'tensi' => 'required',
            'keterangan' => 'required',
            'pasien_id' => 'required',
            'paramedik_id' => 'required'
        ]);

        $periksa = Periksa::find($id);
        $periksa->tanggal = $request->tanggal;
        $periksa->berat = $request->berat;
        $periksa->tinggi = $request->tinggi;
        $periksa->tensi = $request->tensi;
        $periksa->keterangan = $request->keterangan;
        $periksa->pasien_id = $request->pasien_id;
        $periksa->paramedik_id = $request->paramedik_id;
        $periksa->save();

        return redirect('/periksa');
    }

    public function destroy($id) {
        $periksa = Periksa::find($id);
        $periksa->delete();
        return redirect('/periksa');
    }
}
