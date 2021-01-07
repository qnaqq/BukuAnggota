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

// Landing Page
Route::get('/', function(){
    return view('landingPage');
});

// Admin
Route::get('/admin', 'AdminsController@index');
Route::get('/admin/manage', 'ManagesController@index');
Route::get('/admin/manage/createAdmin', 'ManagesController@create');
Route::get('/admin/manage/{manage}', 'ManagesController@show');
Route::get('/admin/showbukuanggotaadmin/{member}', 'AdminsController@show');
Route::delete('admin/manage/{manage}', 'ManagesController@destroy');

// Member
Route::get('/bukuanggota', 'MembersController@index');
Route::get('/admin/showbukuanggotaadmin/{member}/editmember', 'MembersController@edit');
Route::get('/admin/createbukuanggota', 'MembersController@create');
Route::get('/bukuanggota/showbukuanggota/{member}', 'MembersController@show');
Route::delete('/admin/showbukuanggotaadmin/{member}', 'MembersController@destroy');
Route::patch('/admin/showbukuanggotaadmin/{member}', 'MembersController@update');

Route::post('/bukuanggota', 'MembersController@store');

Route::post('/admin/manage', 'ManagesController@store');

// Auth::routes('login');

Route::get('/home', 'HomeController@index')->name('home');
