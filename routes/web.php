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

$router->get('/helloWorld', fn() => 'Hola Mundo' );

$router->get('/projectManager', 'ProjectManagerController@index' );

$router->get('/projectManager/{id}', 'ProjectManagerController@read' );

$router->post('/projectManager', 'ProjectManagerController@create' );

$router->put('/projectManager/{id}', 'ProjectManagerController@update' );

$router->delete('/projectManager/{id}', 'ProjectManagerController@delete' );
