<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSuratsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('surats', function (Blueprint $table) {
            $table->increments('id');
			$table->integer('mhs_id');
            $table->integer('user_id');
			$table->integer('jenissurat');
			$table->text('detail');
            $table->boolean('hasread');
            $table->enum('status', ['masuk', 'proses', 'selesai']);
            $table->string('lampiran');

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
        Schema::dropIfExists('surats');
    }
}
