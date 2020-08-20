<?php

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
    echo '<section style="background-color: #ff4343; height: 100%; color: #FFF; font-family: monospace; display: flex; justify-content: center; align-items: center; font-size: 40px;"><b>api</b>.YOURDOMAIN.pl</section>';
});

$router->group(['prefix' => 'api'], function($router){
    $router->get('metropolises', 'MetropolisesController@showAllMetropolises');
    $router->get('parishes', [
        'middleware' => 'auth',
        'uses' => 'ParishController@showAllParishes'
    ]);
    $router->get('parishes/{id}', [
        'middleware' => 'auth',
        'uses' => 'ParishController@showOneParish'
    ]);
    $router->get('parishes/t/{id}', [
        'middleware' => 'auth',
        'uses' => 'ParishController@showOneParish'
    ]);
    $router->post('parishes', 'ParishController@create');
});

$router->get('/api/dioceses', function () use ($router) {
    echo 'tu możemy wywołać diecezje';
});
