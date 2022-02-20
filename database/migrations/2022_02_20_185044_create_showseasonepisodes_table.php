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
        Schema::create('showseasonepisodes', function (Blueprint $table) {
            $table->bigInteger('season_id')->unsigned();
            $table->float('number');
            $table->string('japanese_name');
            $table->string('english_name');

            $table->foreign('season_id')->references('id')->on('showseasons');

            $table->primary(['number', 'season_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('showseasonepisodes');
    }
};
