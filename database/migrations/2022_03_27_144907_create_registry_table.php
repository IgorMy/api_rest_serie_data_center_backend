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
        Schema::create('registry', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('serie_id');
            $table->integer('season')->nullable(false);
            $table->integer('chapter')->nullable(false);
            $table->datetime('date')->nullable(false);

            $table->foreign('serie_id')->references('id')->on('serie');
            $table->foreign('user_id')->references('id')->on('users');

            $table->unique('user_id', 'serie_id','season','chapter','date');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('registry');
    }
};
