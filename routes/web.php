<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers; 

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These 
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
// */

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('hello', [HelloController::class, 'index']);
Route::get('hello','App\Http\Controllers\HelloController@index');
Route::post('hello','App\Http\Controllers\HelloController@post');

    // Route::get('hello',function () use ($html) {
    //     return $html;
    // });



//     Route::get('hello',function (){
//         return '<html.<body><h1>Hello</h1><p>This is sample page.</p></body></html>';
//    });
