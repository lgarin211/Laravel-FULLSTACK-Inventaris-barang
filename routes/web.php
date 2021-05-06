<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\read;
use App\Http\Controllers\update;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use PhpParser\Node\Stmt\Return_;

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
    if (!empty(Auth::user()->id)) {
        return redirect('/das');
    } else {
        return view('wek');
    }
});

Route::get('/das', [HomeController::class, 'dataread']);



Route::get('/try', function () {
    return view('wek');
});

Route::get('/insert', [read::class, 'index']);
Route::post('/insert', 'creat@creat');
Route::get('/read_read', [read::class, 'read']);
Route::put('/ui/{id}', 'update@update');
Route::put('/keluar/{id}', 'creat@cread_out');

Route::get('/out', [read::class, 'out_view']);
Route::post('/out_find', [read::class, 'data_out']);

Route::get('/kategori_t/{view}/{table}', [read::class, 'kategory']);
Route::get('/kondisi_t/{view}/{table}', [read::class, 'kategory']);
Route::get('/lokasi_t/{view}/{table}', [read::class, 'kategory']);
Route::get('/key_primary/{view}/{table}', [read::class, 'kategory']);
Route::get('/komponen_t/{view}/{table}', [read::class, 'kategory']);
Route::post('/make_C/{table}', 'creat@creat_key');

Route::get('/pijam', function () {
    return view('find_pinjam');
});

Route::put('/pin_in', [read::class, 'b']);
Route::put('/pin_out', [read::class, 'a']);
Route::put('send_news/{id}/{pic}', 'update@update_out');
Route::put('send_news2/{id}/{pic}', 'update@update_out');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

// Route::get('/api', 'api@one');

// Route::get('/pin', function () {
//     return view('cari');
// });


//Komputer
Route::get('/komputer', [read::class, 'komputer']);
Route::get('/buatpc', function () {
    return view('komputer.make');
});
Route::post('/kirimpc', 'creat@kirimpc');
