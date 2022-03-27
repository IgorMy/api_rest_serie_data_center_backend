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
        Schema::create('role', function (Blueprint $table) {
            // It might be, than an actor play two or more diferent roles in a serie.
            $table->unsignedBigInteger('actor_id');
            $table->unsignedBigInteger('serie_id');
            $table->string('name')->nullable(false);
            //$table->foreign('actor_id')->references('actor')->on('id');
            //$table->foreign('serie_id')->references('serie')->on('id');
        });

        DB::statement('ALTER TABLE role ADD CONSTRAINT role_actor_id_foreign FOREIGN KEY (actor_id) REFERENCES actor(id);');
        DB::statement('ALTER TABLE role ADD CONSTRAINT role_serie_id_foreign FOREIGN KEY (serie_id) REFERENCES series(id);');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('role');
    }
};
