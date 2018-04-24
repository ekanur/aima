<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Standar1s extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('standar1s', function (Blueprint $table) {
            $table->increments('id');
            $table->string('kode', 15);
            $table->json('data')->nullable();
            $table->float('skor', 8,2)->nullable();
            $table->integer('kategori');
            $table->integer('id_prodi');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
         Schema::dropIfExists('standar1s');
    }
}
