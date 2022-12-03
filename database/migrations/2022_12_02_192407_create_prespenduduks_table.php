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
        Schema::create('prespenduduks', function (Blueprint $table) {
            $table->id();
            $table->foreignId('desa_id')->constrained('desas');
            $table->integer('l0');
            $table->integer('p0');
            $table->integer('l6');
            $table->integer('p6');
            $table->integer('l13');
            $table->integer('p13');
            $table->integer('l18');
            $table->integer('p18');
            $table->integer('l51');
            $table->integer('p51');
            $table->string('ket');
            $table->string('sumber');
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
        Schema::dropIfExists('prespenduduks');
    }
};
