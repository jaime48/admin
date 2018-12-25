<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/', 'HomeController@index')->name('home');

Route::get('test', function () {
    $data = \DB::connection('mysql')->select('select * from test');
    print_r($data);
    echo '</br>';
    $data = \DB::connection('mysql2')->select('select * from test');
    print_r($data);
    return view('welcome');
});

Route::any('user/update/{user_id}', 'User\UserController@update');

Route::get('contact', function () {
    return view('template.contact.index');
})->name('contact');

Route::get('permission', 'User\UserController@index')->name('permission');
Route::get('user', 'User\UserController@user')->name('user');
Route::get('order', 'User\UserController@order')->name('order');
Route::get('payment', 'User\UserController@payment')->name('payment');

Route::get('test_controller', 'TestController@test');

Route::get('test_logout', 'TestController@logout');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('tables', function() {
    return view('template.tables_dynamic');
});
