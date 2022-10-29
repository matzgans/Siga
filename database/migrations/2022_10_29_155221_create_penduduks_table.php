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
        Schema::create('penduduks', function (Blueprint $table) {
            $table->id();
            $table->integer('nik')->unique();
            $table->string('nama');
            $table->string('tempat_lahir');
            $table->timestamp('tanggal_lahir')->nullable();
            $table->enum('jk', ['l','p']);
            $table->foreignId('agama_id')->constrained('agamas');
            $table->foreignId('desa_id')->constrained('desas');
            $table->foreignId('pekerjaan_id')->constrained('pekerjaans');
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
        Schema::dropIfExists('penduduks');
    }
};
