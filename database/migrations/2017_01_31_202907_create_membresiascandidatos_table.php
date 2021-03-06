<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMembresiascandidatosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('membresias_candidatos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('membresia_id')->unsigned();
            $table->integer('candidato_id')->unsigned();
			$table->dateTime('desde');
			$table->dateTime('hasta');
			$table->decimal('pagado', 10, 2);	
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
        Schema::dropIfExists('membresias_candidatos');
    }
}
