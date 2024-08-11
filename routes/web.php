<?php

use App\Http\Controllers\NilaiController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;


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
    return view('auth/login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/nilai','App\HTTP\Controllers\NilaiController@index');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile/profil', [ProfileController::class, 'edit'])->name('profile.profil.edit');
//     Route::get('/profile/sandi', [ProfileController::class, 'sandi'])->name('profile.sandi.sandi');
//     Route::get('/profile/profil/success', [ProfileController::class, 'success'])->name('profile.profil.success');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

Route::middleware('auth')->group(function () {
    Route::get('/profile/profil', [ProfileController::class, 'edit'])->name('profile.profil.edit');
    Route::get('/profile/sandi', [ProfileController::class, 'sandi'])->name('profile.sandi.sandi');
    Route::get('/profile/profil/success', [ProfileController::class, 'success'])->name('profile.profil.success');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::patch('/profile/sandi', [ProfileController::class, 'updatePassword'])->name('profile.updatePassword');
    // Route::patch('/profile/sandi', [ProfileController::class, 'updatePassword'])->name('password.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/profile/sandi/success', [ProfileController::class, 'passwordSuccess'])->name('profile.sandi.success');
});


Route::resource('/nilai', NilaiController::class);

Route::get('/nilai/search', [NilaiController::class, 'search']);

Route::get('download/{id}', [NilaiController::class, 'download']);

Route::get('generate/{id}', [NilaiController::class, 'generate']);

Route::delete('/nilai/{id}', [NilaiController::class, 'destroy'])->name('nilai.destroy');

// useless routes
// Just to demo sidebar dropdown links active states.
Route::get('/buttons/text', function () {
    return view('buttons-showcase.text');
})->middleware(['auth'])->name('buttons.text');

Route::get('/buttons/icon', function () {
    return view('buttons-showcase.icon');
})->middleware(['auth'])->name('buttons.icon');

Route::get('/buttons/text-icon', function () {
    return view('buttons-showcase.text-icon');
})->middleware(['auth'])->name('buttons.text-icon');

require __DIR__ . '/auth.php';
