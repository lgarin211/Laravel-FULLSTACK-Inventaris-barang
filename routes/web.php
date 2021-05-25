<?php

use App\Http\Controllers\creat;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\read;
use App\Http\Controllers\update;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use PhpParser\Node\Stmt\Return_;
use PHPUnit\TextUI\XmlConfiguration\Groups;

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
Route::post('/insert', [creat::class,'creat']);
Route::get('/read_read', [read::class, 'read']);
Route::put('/ui/{id}', [update::class,'update']);
Route::get('/di/{id}/{tebel}', [update::class,'up_delet']);
Route::put('/keluar/{id}', [creat::class,'cread_out']);

Route::get('/out', [read::class, 'out_view']);
Route::post('/out_find', [read::class, 'data_out']);

Route::get('/kategori_t/{view}/{table}', [read::class, 'kategory']);
Route::get('/kondisi_t/{view}/{table}', [read::class, 'kategory']);
Route::get('/lokasi_t/{view}/{table}', [read::class, 'kategory']);
Route::get('/key_primary/{view}/{table}', [read::class, 'kategory']);
Route::get('/komponen_t/{view}/{table}', [read::class, 'kategory']);
Route::post('/make_C/{table}', [creat::class,'creat_key']);

Route::get('/pijam',[read::class, 'pinjam']);

Route::put('/pin_in', [read::class, 'b']);
Route::put('/pin_out', [read::class, 'a']);
Route::put('send_news/{id}/{pic}', [update::class,'update_out']);
Route::put('send_news2/{id}/{pic}', [update::class,'update_out']);

Auth::routes();

Route::get('/home', function () {return redirect('/');})->name('home');

Route::get('/edit/{id}',[read::class,'read_up_item']);
Route::put('/edit{id}',[update::class,'put']);


// Route::get('/home', 'HomeController@index')->name('home');


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
Route::post('/kirimpc', [creat::class,'kirimpc']);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    // return view('dashboard');
    return redirect('/das');
})->name('dashboard');

Route::get('/importItem',[creat::class,'importcase']);
Route::post('/importItem',[creat::class,'importcase']);


Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});



