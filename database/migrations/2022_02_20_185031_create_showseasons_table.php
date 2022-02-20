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
        Schema::create('showseasons', function (Blueprint $table) {
            $table->bigInteger('show_id')->unsigned();
            $table->bigInteger('id')->unsigned();
            $table->string('japanese_name');
            $table->string('english_name');

            $table->foreign('show_id')->references('id')->on('shows');

            $table->primary(['id', 'show_id']);

            $table->bigIncrements('id')->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('showseasons');
    }
};
