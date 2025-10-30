<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\JobRssController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\RegisteredUserController;

Route::get('/', [JobController::class, 'index']);

Route::get('/jobs/create', [JobController::class, 'create'])->middleware('auth');
Route::post('/jobs', [JobController::class, 'store'])->middleware('auth');

Route::get('/search', SearchController::class);


    Route::get('/jobs', [JobController::class, 'index'])->name('jobs');

    Route::get('/careers', function () {
        return view('careers');
    })->name('careers');

    Route::get('/salaries', function () {
        return view('salaries');
    })->name('salaries');

    Route::get('/companies', function () {
        return view('companies');
    })->name('companies');


    // route model binding to  instructs Laravel to automatically fetch a Tag model from your database
    // where the name column matches the value provided in the URL
    Route::get('/tags/{tag:name}', [TagController::class, 'show'])->name('tags.show');


    Route::middleware('guest')->group(function () {
    Route::get('/register', [RegisteredUserController::class, 'create']);
    Route::post('/register', [RegisteredUserController::class, 'store']);

    Route::get('/login', [SessionController::class, 'create']);
    Route::post('/login', [SessionController::class, 'store']);
    });

    Route::post('/logout', [SessionController::class, 'destroy'])->middleware('auth');

    Route::get('/rss', [JobRssController::class, 'index']);


