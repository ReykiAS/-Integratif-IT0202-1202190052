<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\newsController;
use App\Http\Controllers\KbsController;
use App\Http\Controllers\CulController;


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

Route::get('/aggregrate/1', [newsController::class, 'aggregrate']);

Route::get('/aggregrate/{rss_id}', [newsController::class, 'aggregrat']);
Route::get('/', [App\Http\Controllers\PostsController::class, 'index']);
//Route::get('/', [App\Http\Controllers\PostsController::class, 'Post']);
Route::get('post/{id}', function () {
    return view('post_berita');
});
Route::get('/news', function () {
    return view('news');
});
Route::get('/news', [App\Http\Controllers\NwController::class, 'index']);

Route::get('/climate', function () {
    return view('climate');
});
Route::get('/health', function () {
    return view('health');
});
Route::get('/climate', [App\Http\Controllers\ClController::class, 'index']);
Route::get('/health', [App\Http\Controllers\HeController::class, 'index']);
Route::get('/post/{id}', [App\Http\Controllers\PostController::class, 'detail']);
