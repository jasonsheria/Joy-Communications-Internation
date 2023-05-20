<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\PostController::class, 'index'])->name('home');
Route::get('/actualite', [App\Http\Controllers\PostController::class, 'activite'])->name('actualite');
Route::get('/apropos', [App\Http\Controllers\PostController::class, 'apropos'])->name('apropos');
Route::get('/aide', [App\Http\Controllers\PostController::class, 'aide'])->name('aide');
Route::get('/contact', [App\Http\Controllers\PostController::class, 'contact'])->name('contact');
Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'dashboard'])->name('dashboard');
Route::get('/get-members', [App\Http\Controllers\HomeController::class, 'members']);
Route::post('/search-members', [App\Http\Controllers\HomeController::class, 'search']);
Route::post('/ajouter-membres', [App\Http\Controllers\HomeController::class, 'ajouter']);
Route::post('/delete-membre', [App\Http\Controllers\HomeController::class, 'supprimer']);
Route::post('/get-membre', [App\Http\Controllers\HomeController::class, 'get_member']);
Route::post('/edit-membre', [App\Http\Controllers\HomeController::class, 'edit_member']);
Route::post('/create-post', [App\Http\Controllers\HomeController::class, 'create_post']);
Route::post('/image-media', [App\Http\Controllers\HomeController::class, 'image_media']);
Route::post('/get-more', [App\Http\Controllers\PostController::class, 'get_more']);

