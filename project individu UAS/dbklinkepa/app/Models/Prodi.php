<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Prodi extends Model
{
    public $kode;
    public $nama;
    public $kaprodi;

    /**
     * Create a new Prodi instance.
     *
     * @param string $kode
     * @param string $nama
     */
    public function __construct($kode, $nama)
    {
        $this->kode = $kode;
        $this->nama = $nama;
    }
}
