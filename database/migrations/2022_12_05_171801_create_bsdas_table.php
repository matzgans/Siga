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
        Schema::create('bsdas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('bencana_id')->constrained('bencanas');
            $table->foreignId('tahun_id')->constrained('tahuns');
            $table->integer('ldes');
            $table->integer('pdes');
            $table->integer('lan');
            $table->integer('pan');
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
        Schema::dropIfExists('bsdas');
    }
};
