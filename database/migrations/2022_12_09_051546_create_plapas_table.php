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
        Schema::create('plapas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('tahanan_id')->constrained('tahanans');
            $table->foreignId('tahun_id')->constrained('tahuns');
            $table->integer('l');
            $table->integer('p');
            $table->string('ket');
            $table->string('sumber');
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
        Schema::dropIfExists('plapas');
    }
};
