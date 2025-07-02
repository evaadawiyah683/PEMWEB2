<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pasien;
use App\Models\Paramedik;
use App\Models\Periksa;
use App\Models\UnitKerja;

class DashboardController extends Controller
{
    public function index()
    {
        $totalPasien = Pasien::count();
        $totalParamedik = Paramedik::count();
        $totalPeriksa = Periksa::count();
        $totalUnitKerja = UnitKerja::count();


        return view('dashboard', compact(
    'totalPasien',
    'totalParamedik',
    'totalPeriksa',
    'totalUnitKerja'
));

    }
}

