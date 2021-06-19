<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExigencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exigences', function (Blueprint $table) {
            $table->timestamps();
            $table->increments('id');
            $table->integer('user_id');
            $table->string('Type_exigence');
            $table->string('Importance');
            $table->string('statut');
            $table->string('discription');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('exigences');
    }
}
