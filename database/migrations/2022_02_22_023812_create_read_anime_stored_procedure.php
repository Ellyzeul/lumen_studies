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
        DB::unprepared(
           "CREATE PROCEDURE `read_anime` (IN anime_id INT)
            BEGIN
                SELECT
                    japanese_name,
                    english_name
                FROM Shows
                WHERE id = anime_id;
            END"
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('read_anime');
    }
};
