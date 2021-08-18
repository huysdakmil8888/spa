<?php

use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::group(['middleware'=>['auth','has.permission']], function () {
   Route::resource('departments', 'DepartmentController');
   Route::resource('roles', 'RoleController');
   Route::resource('users', 'UserController');
   Route::resource('permissions', 'PermissionController');
   Route::resource('leaves', 'LeaveController');
   Route::resource('notices', 'NoticeController');
   Route::post('leaves/status/{id}', 'LeaveController@status')->name('leaves.status');
   Route::get('mail', 'MailController@create');
   Route::post('mail/store', 'MailController@store');

});

