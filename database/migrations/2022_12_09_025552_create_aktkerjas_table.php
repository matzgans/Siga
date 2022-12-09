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
        Schema::create('aktkerjas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('desa_id')->constrained('desas');
            $table->foreignId('tahun_id')->constrained('tahuns');
            $table->integer('lsd');
            $table->integer('psd');
            $table->integer('lsmp');
            $table->integer('psmp');
            $table->integer('lsma');
            $table->integer('psma');
            $table->integer('lpt');
            $table->integer('ppt');
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
        Schema::dropIfExists('aktkerjas');
    }
};
