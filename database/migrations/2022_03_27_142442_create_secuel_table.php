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
        Schema::create('secuel', function (Blueprint $table) {
            $table->unsignedBigInteger('original_serie_id');
            $table->unsignedBigInteger('secuel_serie_id');
            $table->foreign('original_serie_id')->references('series')->on('id');
            //$table->foreign('secuel_serie_id')->references('series')->on('id');
            //$table->unique('original_serie_id', 'secuel_serie_id');
        });

        // Check original_serie_id != secuel_serie_id
        DB::statement('ALTER TABLE secuel ADD CONSTRAINT chk_distinct_origin_secuel CHECK (original_serie_id <> secuel_serie_id);');
        DB::statement('ALTER TABLE secuel ADD CONSTRAINT secuel_original_serie_id_foreign FOREIGN KEY (original_serie_id) REFERENCES series(id);');
        DB::statement('ALTER TABLE secuel ADD CONSTRAINT secuel_secuel_serie_id_foreign FOREIGN KEY (secuel_serie_id) REFERENCES series(id);');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('secuel');
    }
};
