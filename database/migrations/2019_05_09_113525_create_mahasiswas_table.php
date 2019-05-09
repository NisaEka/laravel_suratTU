<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMahasiswasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('mahasiswas');
        
        Schema::create('mahasiswas', function (Blueprint $table) {
            $table->increments('id');
			$table->string('nim',10);
			$table->string('nama',50);
			$table->integer('jurusan');
			$table->integer('semester');
			$table->string('tempatlahir',50)->nullable();
			$table->date('tanggallahir')->nullable();
			$table->string('telp',15)->nullable();
			$table->integer('user_id');

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
        Schema::dropIfExists('mahasiswas');
    }
}
