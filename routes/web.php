<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\ExampleController;
use App\Models\User; 
/** @var \Laravel\Lumen\Routing\Router $router */

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
    return $router->app->version();
});

$router->get('hello',function(){
    return User::all()->toJson();
});

$router->get('users','ExampleController@getUsers');

$router->get('secrets','ExampleController@getSecrets');

$router->post('secret','ExampleController@storeSecret');