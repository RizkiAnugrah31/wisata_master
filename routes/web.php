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
    return $router->app->version();
});
$router->get('/Banner/fetch','Cms\BannerController@index');
$router->get('/Banner/detail/{id}','Cms\BannerController@detail');
$router->post('/Banner/store','Cms\BannerController@store');
$router->put('/Banner/update/{id}','Cms\BannerController@update');
$router->delete('/Banner/delete/{id}','Cms\BannerController@delete');


