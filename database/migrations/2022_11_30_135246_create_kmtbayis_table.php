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
        Schema::create('kmtbayis', function (Blueprint $table) {
            $table->id();
            $table->foreignId('desa_id')->constrained('desas');
            $table->integer('l');
            $table->integer('p');
            $table->string('sumber');
            $table->string('ket');
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
        Schema::dropIfExists('kmtbayis');
    }
};
