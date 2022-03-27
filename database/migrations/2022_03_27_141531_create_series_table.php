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
        Schema::create('series', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable(false);
            $table->datetime('date');
            $table->unsignedBigInteger('creator_id')->nullable(true);
            $table->timestamps();
            //$table->foreign('creator_id')->references('creator')->on('id');
        });

        DB::statement('ALTER TABLE series ADD CONSTRAINT series_creator_id_foreign FOREIGN KEY (creator_id) REFERENCES creator(id);');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('series');
    }
};
