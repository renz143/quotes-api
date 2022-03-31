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

$router->get('/quotes', 'QuotesController@index');
$router->get('/quotes/{id}', 'QuotesController@show');
$router->post('/quotes', 'QuotesController@create');
$router->put('/quotes/{id}', 'QuotesController@update');
$router->delete('/quotes/{id}', 'QuotesController@delete');

$router->get('/', function () use ($router) {
    return $router->app->version();
});
