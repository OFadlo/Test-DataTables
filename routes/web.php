<?php

//use App\Http\Controllers;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});




Route::get('datatables.data', 'UserController@anyData')->name('datatables.data');
Route::get('datatables', 'UserController@getIndex')->name('datatables');



/*
Route::controller('datatables', 'UserController', [
    'anyData'  => 'datatables.data',
    'getIndex' => 'datatables',
]);*/