<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Paramedik; // Tambahkan ini

class UnitKerja extends Model
{
    protected $table = 'unit_kerjas';
    protected $fillable = ['nama'];

    public function paramedik()
    {
        return $this->hasMany(Paramedik::class); // perhatikan huruf besar!
    }
}
