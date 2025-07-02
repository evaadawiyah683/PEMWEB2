<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class periksa extends Model
{
    protected $table = 'periksas';
    protected $fillable = [
        'tanggal',
        'berat',
        'tinggi',
        'tensi',
        'keterangan',
        'pasien_id',
        'paramedik_id'
    ];

    public function pasien()
    {
        return $this->belongsTo(pasien::class);
    }

    public function paramedik()
    {
        return $this->belongsTo(paramedik::class);
    }
}
