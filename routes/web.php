<?php

/** @var \Laravel\Lumen\Routing\Router $router */

use Illuminate\Http\Request;
use App\Http\Controllers\ShowController;

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return redirect('/docs');
});

$router->get('/docs', function () use ($router) {
    return view('docs', []);
});

$router->post('/anime/create', function (Request $request) {
    return ShowController::create(
        $request->input('japanese_name'),
        $request->input('english_name')
    );
});
