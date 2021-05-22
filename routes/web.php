<?php

use Illuminate\Support\Facades;
use Illuminate\Support\Facades\DB;
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
//Route::get('/companies/index', function () {
//    $companies = DB::select('select * from companies');
//    $name = "behruzjon";
//    return view('companies.index',compact('companies'));
//});

Route::get('/companies','App\Http\Controllers\CompaniesController@index');
Route::get('/companies/{show}','App\Http\Controllers\CompaniesController@show');
Route::get('/test','App\Http\Controllers\TestController@index');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

