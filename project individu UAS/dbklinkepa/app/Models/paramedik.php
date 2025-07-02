<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\UnitKerja; // <- tambahkan ini

class Paramedik extends Model // <- GANTI: huruf besar P
{
    protected $table = 'paramediks';
    protected $fillable = [
        'nama',
        'gender',
        'tmp_lahir',
        'tgl_lahir',
        'kategori',
        'telepon',
        'alamat',
        'unit_kerja_id'
    ];

    public function unit_kerja()
    {
        return $this->belongsTo(UnitKerja::class); // <- GANTI: huruf besar U dan K
    }
}
