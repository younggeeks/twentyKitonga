<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

use App\User;

Route::get('/',[
"uses"=>"DashboardController@index",
    "middleware"=>"auth"
]);


Route::get('customer',[
    "as"=>"customer-estimations",
    "uses"=>"CustomersController@getEstimations"
]);

Route::controller("customer","CustomersController");


Route::controller("test","TestController");
Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);




Route::controller("company","CompanyController");
Route::controller("shop","ShopsController");

Route::controller("job","JobsController");

