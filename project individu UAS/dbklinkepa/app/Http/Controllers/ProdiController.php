<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Prodi;

class ProdiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $prodi1 = new Prodi('SI', 'Sistem Informasi');
        $prodi2 = new Prodi('TI', 'Teknologi Informasi');
        $prodi3 = new Prodi('BD', 'Bisnis Digital');

        $ar_prodi = [$prodi1, $prodi2, $prodi3];
        return view('prodi.index', [
            'judul' => 'Daftar Program Studi STT Nurul Fikri',
            'ar_prodi' => $ar_prodi
        ]);
    }
}
