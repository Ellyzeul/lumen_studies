<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;
use App\Models\Show;

class ShowController extends Controller
{
    public static function create(string $japanese_name, string $english_name)
    {
        $response = Show::create($japanese_name, $english_name);

        $status_code = $response['status'];
        unset($response['status']);

        return response($response, $status_code);
    }

    public static function read(int $id)
    {
        $response = Show::read($id);
        $status_code = $response['status'];
        unset($response['status']);

        return response($response, $status_code);
    }
}