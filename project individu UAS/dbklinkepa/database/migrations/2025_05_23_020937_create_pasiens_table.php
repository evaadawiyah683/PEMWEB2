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
        Schema::create('pasiens', function (Blueprint $table) {
            $table->id();
            $table->string('kode', 10)->unique()->required();
            $table->string('nama', 40)->required();
            $table->string('tmp_lahir', 40);
            $table->date('tgl_lahir');
            $table->enum('jk', ['L', 'P']);
            $table->string('alamat', 100);
            $table->string('email', 40);
            $table->foreignId('kelurahan_id')->constrained('kelurahans')->onDelete('cascade');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pasiens');
    }
};
