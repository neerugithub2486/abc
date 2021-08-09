<?php

use App\Http\Controllers\RestoController;
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

// Route::get('/', function () {
//     return view('welcome');
// });



Route::group(['middleware'=>'web'],function(){
    Route::get('/',[RestoController::class,'index']);
    Route::get('/home',[RestoController::class,'index']);
    Route::get('/list',[RestoController::class,'list']);
    Route::view('add','add');
    Route::post('/add',[RestoController::class,'add']);
    Route::get('/delete/{id}',[RestoController::class,'delete']);
    Route::get('/edit/{id}',[RestoController::class,'edit']);
    Route::post('/edit',[RestoController::class,'update']);
    Route::view('register','register');
    Route::post('/register',[RestoController::class,'register']);
    Route::view('login','login');
    Route::post('/login',[RestoController::class,'login']);
    Route::get('/logout',[RestoController::class,'logout']);
});

// Route::get('/','RestoController@index');
// Route::get('/list','RestoController@list');
// Route::view('add','add');
// Route::post('/add','RestoController@add');