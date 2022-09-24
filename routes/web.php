<?php

use App\Http\Controllers\CalculateController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OutController;

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

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/',[OutController::class,'index']);
Route::get('/','App\Http\Controllers\OutController@index');
// Route::get('/',function(){
//     return 'sdfghjk';
// });
Route::get('/page', function(){
    $agent = $_SERVER['REQUEST_URI'];
    return "URL this page - localhost$agent";
});

Route::get('/posts', 'App\Http\Controllers\PostController@index');
Route::get('/input','App\Http\Controllers\InputController@index' );