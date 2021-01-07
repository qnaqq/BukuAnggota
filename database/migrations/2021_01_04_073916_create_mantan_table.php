<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMantanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mantan', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama');
            $table->char('nim',12);
            $table->string('fakultas');
            $table->string('prodi');
            $table->string('angkatan');
            $table->string('alasan');
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
        Schema::dropIfExists('mantan');
    }
}
