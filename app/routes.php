<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return Redirect::to('admin');
});

Route::controller('login', 'LoginController');
//Route::group(array('before'=>'auth'),function()
//{
Route::controller('admin/shop', 'Admin_ShopController');
Route::controller('admin/employeeposition', 'Admin_PositionController');
Route::controller('admin/employee', 'Admin_EmployeeController');
Route::controller('admin', 'AdminController');

//});
