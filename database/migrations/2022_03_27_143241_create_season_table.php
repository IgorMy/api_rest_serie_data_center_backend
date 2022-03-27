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
        Schema::create('season', function (Blueprint $table) {
            $table->unsignedBigInteger('serie_id')->nullable(false);
            $table->integer('season')->nullable(false);
            $table->datetime('date');
            $table->integer('chapter_number')->nullable(false);
            //$table->foreign('serie_id')->references('series')->on('id');
        });

        

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('season');
    }
};
