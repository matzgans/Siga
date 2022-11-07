<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pegawais', function (Blueprint $table) {
            $table->id();
            $table->string('nik')->unique();
            $table->string('nama');
            $table->string('tempat_lahir');
            $table->timestamp('tanggal_lahir')->nullable();
            $table->enum('jk', ['l','p']);
            $table->integer('umur');
            $table->foreignId('klasifikasi_umur_id')->constrained('klasifikasi_umurs');
            $table->foreignId('agama_id')->constrained('agamas');
            $table->foreignId('opd_id')->constrained('opds');
            $table->foreignId('jabatan_id')->constrained('jabatans');
            $table->foreignId('tahun_id')->constrained('tahuns');
            $table->string('foto')->nullable();
            $table->text('alamat');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pegawais');
    }
};
