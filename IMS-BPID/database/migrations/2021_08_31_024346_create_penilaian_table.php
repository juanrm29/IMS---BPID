<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenilaianTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penilaian', function (Blueprint $table) {
            $table->id();
            $table->integer('penilaian_id');
            $table->integer('penilaian_satu');
            $table->integer('penilaian_dua');
            $table->integer('penilaian_tiga');
            $table->integer('penilaian_empat');
            $table->integer('penilaian_lima');
            $table->integer('petugas_id');
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
        Schema::dropIfExists('penilaian');
    }
}