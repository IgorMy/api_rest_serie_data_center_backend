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
        Schema::create('chapter_director', function (Blueprint $table) {
            $table->unsignedBigInteger('serie_id')->nullable(false);
            $table->unsignedBigInteger('director_id')->nullable(false);
            $table->integer('season_number');
            $table->integer('chapter')->nullable(false);

            $table->foreign('serie_id')->references('id')->on('series');
            $table->foreign('director_id')->references('id')->on('series');

            $table->unique('serie_id', 'director_id','season','chapter');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('chapter_director');
    }
};
