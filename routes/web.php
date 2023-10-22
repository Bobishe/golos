<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\SaveVoise;

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

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Route::get('/', [PageController::class, "voisePage"]);
Route::post('/voise', [SaveVoise::class, "Save"]);
Route::get('/addvoise', [PageController::class, "AddVoise"]);
Route::post('/savevoise', [SaveVoise::class, "savemusic"]);


Route::get('/admin', [PageController::class, "admin"]);

Route::post('/add', [SaveVoise::class, "add"]);
Route::post('/delete', [SaveVoise::class, "delete"]);
Route::post('/deleteall', [SaveVoise::class, "DestroyAll"]);
Route::post('/AddAdminSong', [SaveVoise::class, "AddAdminSong"]);
