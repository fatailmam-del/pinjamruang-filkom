<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('rooms', function (Blueprint $table) {
            $table->id();
            $table->string('nama', 100);              // contoh: Ruang Kelas F3.1
            $table->string('gedung', 30);             // contoh: F, G, A, Rinov (teks bebas)
            $table->unsignedTinyInteger('lantai');    // contoh: 3
            $table->string('ruangan', 10);            // nomor ruangan, contoh: 3.1
            $table->unsignedInteger('kapasitas');
            $table->timestamps();

            $table->unique(['gedung', 'ruangan']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('rooms');
    }
};
