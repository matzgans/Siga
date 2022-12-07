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
        Schema::create('prespendidikans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('desa_id')->constrained('desas');
            $table->foreignId('tahun_id')->constrained('tahuns');
            $table->decimal('lb');
            $table->decimal('pb');
            $table->decimal('lsd');
            $table->decimal('psd');
            $table->decimal('lsmp');
            $table->decimal('psmp');
            $table->decimal('lsma');
            $table->decimal('psma');
            $table->decimal('lpt');
            $table->decimal('ppt');
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
        Schema::dropIfExists('prespendidikans');
    }
};
