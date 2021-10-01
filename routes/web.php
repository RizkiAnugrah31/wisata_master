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

$router->get('/SplashScreen/fetch','Cms\SplashScreenController@index');
$router->get('/SplashScreen/detail/{id}','Cms\SplashScreenController@detail');
$router->post('/SplashScreen/store','Cms\SplashScreenController@store');
$router->put('/SplashScreen/update/{id}','Cms\SplashScreenController@update');
$router->delete('/SplashScreen/delete/{id}','Cms\SplashScreenController@delete');

$router->get('/Tour/fetch','Cms\TourController@index');
$router->get('/Tour/detail/{id}','Cms\TourController@detail');
$router->post('/Tour/store','Cms\TourController@store');
$router->put('/Tour/update/{id}','Cms\TourController@update');
$router->delete('/Tour/delete/{id}','Cms\TourController@delete');



