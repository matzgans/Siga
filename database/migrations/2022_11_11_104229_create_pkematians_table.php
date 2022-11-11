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
        Schema::create('pkematians', function (Blueprint $table) {
            $table->id();
            $table->foreignId('desa_id')->constrained('desas');
            $table->integer('jum_partuslama')->nullable();
            $table->integer('jum_infeksi')->nullable();
            $table->integer('jum_hirpetensi')->nullable();
            $table->integer('jum_pendarahan')->nullable();
            $table->integer('jum_penyebablain')->nullable();
            $table->string('sumber')->nullable();
            $table->foreignId('tahun_id')->constrained('tahuns');
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
        Schema::dropIfExists('pkematians');
    }
};
