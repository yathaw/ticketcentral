<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\CinemaController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\TypeController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\ActController;

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
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->name('dashboard');

Route::prefix('master')->name('master.')->group(function()
{
    // Cinema
    Route::resource('/cinema', CinemaController::class);
    Route::get('/getlistCinemas',[CinemaController::class, 'getlistData'])->name('getlistCinemas');

    // Movie
    Route::resource('/movie', MovieController::class);
    Route::get('/getNowshowing',[MovieController::class, 'getNowshowing'])->name('getNowshowing');
    Route::get('/getUpcoming',[MovieController::class, 'getUpcoming'])->name('getUpcoming');
    Route::get('/getOndemand',[MovieController::class, 'getOndemand'])->name('getOndemand');

    // Act
    Route::resource('/act', MovieController::class);

    // Genre
    Route::resource('/genre', GenreController::class);
    Route::get('/getlistGenres',[GenreController::class, 'getlistData'])->name('getlistGenres');

    // Category
    Route::resource('/category', CategoryController::class);
    Route::get('/getlistCategories',[CategoryController::class, 'getlistData'])->name('getlistCategories');

    // Type ~ Movie Type
    Route::resource('/type', TypeController::class);
    Route::get('/getlistTypes',[TypeController::class, 'getlistData'])->name('getlistTypes');

    // City
    Route::resource('/city', CityController::class);
    Route::get('/getlistCities',[CityController::class, 'getlistData'])->name('getlistCities');

    // Country
    Route::resource('/country', CountryController::class);
    Route::get('/getlistCountries',[CountryController::class, 'getlistData'])->name('getlistCountries');

});
