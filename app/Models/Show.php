<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\QueryException;

class Show extends Model
{
    public static function create(string $japanese_name, string $english_name)
    {
        $response = [];

        try {
            DB::insert(
                "INSERT INTO Shows (
                    japanese_name,
                    english_name
                ) VALUES (?,?)",
                [$japanese_name, $english_name]
            );

            $response['status'] = 201;
            $response['message'] = "Anime successfully inserted!";
        }
        catch(QueryException $err) {
            $response['status'] = 500;
            $response['mysql_errno'] = $err->code;
            $response['mysql_error'] = $err->message;
        }

        return $response;
    }
}
