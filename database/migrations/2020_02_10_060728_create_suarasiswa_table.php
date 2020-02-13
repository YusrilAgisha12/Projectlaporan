<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSuarasiswaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('suarasiswa', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('namalengkap')->unique();
            $table->string('keluh');
            $table->string('kelas');
            $table->string('nomorhp');
            $table->string('jeniskelamin');
            $table->string('kategori');
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
        Schema::dropIfExists('suarasiswa');
    }
}
