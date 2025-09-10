<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MemberController;

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
    return view('langingpage');
});
Route::post('/register-member', [MemberController::class, 'store'])->name('member.store');


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