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
Route::put('/keluar/{id}', 'creat@cread_out');

Route::get('/out','read@out_view');
Route::post('/out_find','read@data_out');


Route::get('/kategori_t/{view}/{table}','read@kategory');
Route::get('/kondisi_t/{view}/{table}','read@kategory');
Route::get('/lokasi_t/{view}/{table}','read@kategory');
Route::get('/key_primary/{view}/{table}','read@kategory');
Route::get('/komponen_t/{view}/{table}','read@kategory');
Route::post('/make_C/{table}','creat@creat_key');

Route::get('/pijam', function () {
return view('find_pinjam');
});
Route::put('/pin_in', 'creat@cread_in');
Route::put('/pin_out', 'creat@cread_out');
