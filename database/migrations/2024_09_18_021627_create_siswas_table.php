<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('siswas', function (Blueprint $table) {
        $table->id();
        $table->string('nama_lengkap');
        $table->string('asal_sekolah');
        $table->date('tanggal_lahir');
        $table->string('alamat');
        $table->string('tempat_lahir');
        $table->string('email');
        $table->string('foto');
        $table->string('scan_kk');
        $table->string('name_cat')->nullable()->change();
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('siswas');
    }
};
