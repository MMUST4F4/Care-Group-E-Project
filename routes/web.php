<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\AdminMiddleware;
use App\Http\Middleware\DoctorMiddleware;
Route::get('/', function () {
    return view('index');
});
Route::get('/news/{slug}', function ($slug) {
    // You can fetch the article from the database here if needed
    return view('news-details', ['slug' => $slug]);
});

//These routes are for the user (patient)
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
      if(Auth::user()->role == 'admin') {
           return view('Admin.index');
        } elseif(Auth::user()->role == 'doctor') {
             return view('Doctor.index');
        } else {
            return view('User.dashboard');
        }
    })->name('dashboard');

    Route::get('/Status', function () {
        return view('User.Status');
    });
});


//Admin Middleware Routes
Route::middleware([AdminMiddleware::class])->group(function(){

Route::get('/widget', function () {
    return view('Admin.widget');
});
Route::get('/homepage', function () {
    return view('Admin.index');
});
Route::get('/forms', function () {
    return view('Admin.form');
});
Route::get('/table',function () {
    return view('Admin.table');

});
Route::get('/signin',function () {
    return view ('Admin.signin');
});
Route::get('/signup',function () {
    return view ('Admin.signup');
});
Route::get('/button', function () {
    return view('Admin.button');
});
Route::get('/typography', function () {
    return view('Admin.typography');
});
Route::get('/element', function () {
    return view('Admin.element');
});
});

//Doctor Middleware Routes
Route::middleware([DoctorMiddleware::class])->group(function(){

});