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
        Schema::create('partsekolahs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('desa_id')->constrained('desas');
            $table->decimal('l7');
            $table->decimal('p7');
            $table->decimal('l13');
            $table->decimal('p13');
            $table->decimal('l16');
            $table->decimal('p16');
            $table->decimal('l19');
            $table->decimal('p19');
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
        Schema::dropIfExists('partsekolahs');
    }
};
