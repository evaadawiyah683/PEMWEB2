<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('paramediks', function (Blueprint $table) {
            $table->id();
            $table->string('nama', 45);
            $table->enum('gender', ['L', 'P']);
            $table->string('tmp_lahir', 30);
            $table->date('tgl_lahir');
            $table->enum('kategori', ['Umum', 'Jantung', 'Mata', 'Paru', 'Gigi', 'Kulit', 'Kandungan', 'Kesehatan', 'Lainnya']);
            $table->string('telepon', 15);
            $table->string('alamat', 100);
            $table->foreignId('unit_kerja_id')->constrained('unit_kerjas')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('paramediks');
    }
};
