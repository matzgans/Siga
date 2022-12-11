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
        Schema::create('jumkerloks', function (Blueprint $table) {
            $table->id();
            $table->foreignId('desa_id')->constrained('desas');
            $table->foreignId('tahun_id')->constrained('tahuns');
            $table->integer('bs');
            $table->integer('sd');
            $table->integer('smp');
            $table->integer('sma');
            $table->integer('pt');
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
        Schema::dropIfExists('jumkerloks');
    }
};
