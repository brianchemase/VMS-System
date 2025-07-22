<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', function () {
    return view('selfregister');
});


Route::get('/dashboard', function () {
    return view('dashboard.home');
});

Route::get('/Register', function () {
    return view('registrationform');
});




Route::get('/dashboard', function () {
    return view('dashboard.home');
});



Route::get('/MembersTable', function () {
    return view('dashboard.table');
});