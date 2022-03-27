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
        Schema::create('remake', function (Blueprint $table) {
            $table->unsignedBigInteger('original_serie_id')->nullable(false);
            $table->unsignedBigInteger('remake_serie_id')->nullable(false);
            $table->foreign('original_serie_id')->references('serie')->on('id');
            //$table->foreign('remake_serie_id')->references('serie')->on('id');
            //$table->unique('original_serie_id', 'remake_serie_id');
        });

        // Check original_serie_id != secuel_serie_id
        DB::statement('ALTER TABLE remake ADD CONSTRAINT chk_distinct_origin_remake CHECK (original_serie_id <> remake_serie_id);');
        DB::statement('ALTER TABLE remake ADD CONSTRAINT remake_original_serie_id_foreign FOREIGN KEY (original_serie_id) REFERENCES series(id);');
        DB::statement('ALTER TABLE remake ADD CONSTRAINT remake_remake_serie_id_foreign FOREIGN KEY (remake_serie_id) REFERENCES series(id);');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('remake');
    }
};
