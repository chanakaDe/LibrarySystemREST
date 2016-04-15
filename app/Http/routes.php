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

$app->get('/', function () use ($app) {
    return "Lumen RESTful API By chanu1993";
});

$app->group(['prefix' => 'api/v1', 'namespace' => 'App\Http\Controllers'], function ($app) {

//    Books
    $app->get('book', 'BookController@index');
    $app->get('book/{id}', 'BookController@getbook');
    $app->post('book', 'BookController@createBook');
    $app->put('book/{id}', 'BookController@updateBook');
    $app->delete('book/{id}', 'BookController@deleteBook');

//    Orders
    $app->get('order', 'OrderController@index');
    $app->get('order/{id}', 'OrderController@getOrder');
    $app->post('order', 'OrderController@createOrder');
    $app->delete('order/{id}', 'OrderController@deleteOrder');
    $app->put('order/{id}', 'OrderController@updateOrder');

//    Users
    $app->get('user', 'UserController@index');
    $app->get('user/{id}', 'UserController@getUser');
    $app->post('user', 'UserController@createUser');
    $app->delete('user/{id}', 'UserController@deleteUser');
});
