<?php

use App\Http\Controllers\update;
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
    return redirect('/insert');
});


Route::get('/insert','read@index');
Route::post('/insert','creat@creat');
Route::get('/read_read','read@read');
Route::put('/ui/{id}', 'update@update');


Route::get('/out','read@out_view');
Route::post('/out_find','read@data_out');
