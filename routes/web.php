<?php

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

$router->group(['prefix' => 'api'], function () use ($router) {
    $router->get('categoria',  ['uses' => 'CategoriaController@showAll']);
    $router->get('categoria/{id}', ['uses' => 'CategoriaController@showOne']);
    $router->post('categoria', ['uses' => 'CategoriaController@create']);
    $router->delete('categoria/{id}', ['uses' => 'CategoriaController@delete']);
    $router->put('categoria/{id}', ['uses' => 'CategoriaController@update']);

    $router->get('movimiento',  ['uses' => 'MovimientoController@showAll']);
    $router->get('movimiento/{id}', ['uses' => 'MovimientoController@showOne']);
    $router->post('movimiento', ['uses' => 'MovimientoController@create']);
    $router->delete('movimiento/{id}', ['uses' => 'MovimientoController@delete']);
    $router->put('movimiento/{id}', ['uses' => 'MovimientoController@update']);
});
