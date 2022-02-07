<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTabelFilms extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('films', function (Blueprint $table) {
            $table->bigincriments('filmid');
            $table->string('titel', 255);
            $table->text('omschrijving');
            $table->unsignedBigInteger('genre_genreid');
            $table->bigInteger('jaar');
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('genre_genreid')->references('genreid')->on('genres');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('films');
    }
}
