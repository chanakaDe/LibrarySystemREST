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
    $app->get('book/{book_id}', 'BookController@getbook');
    $app->post('book', 'BookController@createBook');
    $app->put('book/{book_id}', 'BookController@updateBook');
    $app->delete('book/{book_id}', 'BookController@deleteBook');

//    Checkout
    $app->get('checkout', 'CheckoutController@index');
    $app->get('checkout/{id}', 'CheckoutController@getCheckout');
    $app->post('checkout', 'CheckoutController@createBookCheckout');
    $app->delete('checkout/{id}', 'CheckoutController@deleteCheckout');
    $app->put('checkout/{id}', 'CheckoutController@updateCheckout');

    //    Checkin
    $app->get('checkin', 'CheckinController@index');
    $app->get('checkin/{id}', 'CheckinController@getCheckin');
    $app->post('checkin', 'CheckinController@createBookCheckin');
    $app->delete('checkin/{id}', 'CheckinController@deleteCheckin');
    $app->put('checkin/{id}', 'CheckinController@updateCheckin');

//    Users
    $app->get('user', 'UserController@index');
    $app->get('user/{id}', 'UserController@getUser');
    $app->post('user', 'UserController@createUser');
    $app->delete('user/{id}', 'UserController@deleteUser');
    $app->post('user/login', 'UserController@loginUser');
});
