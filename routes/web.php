<?php

use App\Http\Controllers\CourseController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});



Route::prefix('dashboard')->middleware('auth')->group(function () {
    Route::get('/', function () {
        return view('backend.dashboard.index');
    })->name('dashboard');


    Route::resource('course', CourseController::class);

});


require __DIR__.'/auth.php';
