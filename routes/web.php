<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LandingpageController;

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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', [LandingpageController::class, 'landingpage'])->name('landingpage');

Route::get('/login', [AuthController::class, 'login'])->name('login');

Route::post('/proses_login', [AuthController::class, 'proses_login'])->name('proses_login');



//admin


// Route::get('/admin', [AdminController::class, 'admin'])->name('admin');


Route::middleware(['auth', 'admin'])->group(function () {
   Route::get('/admin', [AdminController::class, 'admin'])->name('admin');
   
   Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
});
