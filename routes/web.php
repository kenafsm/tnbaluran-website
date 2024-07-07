<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\DashboardPostController;

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
    return view('landing', [
        "title" => "Landing Page"
    ]);
})->name('landing');

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard.index');
    })->name('dashboard');
    Route::resource('/dashboard/posts', DashboardPostController::class);
});

Route::get('/flora', [PostController::class, 'index'])->name('flora')->defaults('post', 'flora');
Route::get('/situs', [PostController::class, 'index'])->name('situs')->defaults('post', 'situs');
Route::get('/flora-detail/{slug}', [PostController::class, 'show'])->name('flora-detail')->defaults('post', 'flora-detail');
Route::get('/situs-detail/{slug}', [PostController::class, 'show'])->name('situs-detail')->defaults('post', 'situs-detail');