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

//landingpage
Route::get('/', [LandingpageController::class, 'landingpage'])->name('landingpage');
Route::get('/detail_jasa{id}', [LandingpageController::class, 'detail_jasa'])->name('detail_jasa');

// Route::get('/jasa', [LandingpageController::class, 'jasa'])->name('jasa');



Route::get('/login', [AuthController::class, 'login'])->name('login');

Route::post('/proses_login', [AuthController::class, 'proses_login'])->name('proses_login');



//admin


// Route::get('/admin', [AdminController::class, 'admin'])->name('admin');


Route::middleware(['auth', 'admin'])->group(function () {
	Route::get('/admin', [AdminController::class, 'index'])->name('index');

	Route::get('/jasa', [AdminController::class, 'jasa'])->name('jasa');
	Route::post('/jasa_add', [AdminController::class, 'jasa_add'])->name('jasa_add');
	Route::get('/jasa_edit{id}', [AdminController::class, 'jasa_edit'])->name('jasa_edit');
	Route::post('/jasa_update/{id}', [AdminController::class, 'jasa_update'])->name('jasa_update');
	Route::post('/jasa_delete/{id}', [AdminController::class, 'jasa_delete'])->name('jasa_delete');


	Route::post('/foto_jasa_update/{id}', [AdminController::class, 'foto_jasa_update'])->name('foto_jasa_update');
	Route::post('/foto_jasa_delete_1/{id}', [AdminController::class, 'foto_jasa_delete_1'])->name('foto_jasa_delete_1');
	Route::post('/foto_jasa_delete_2/{id}', [AdminController::class, 'foto_jasa_delete_2'])->name('foto_jasa_delete_2');
	Route::post('/foto_jasa_delete_3/{id}', [AdminController::class, 'foto_jasa_delete_3'])->name('foto_jasa_delete_3');
	Route::post('/foto_jasa_delete_4/{id}', [AdminController::class, 'foto_jasa_delete_4'])->name('foto_jasa_delete_4');
	Route::post('/foto_jasa_delete_5/{id}', [AdminController::class, 'foto_jasa_delete_5'])->name('foto_jasa_delete_5');


	Route::get('/visi_misi', [AdminController::class, 'visi_misi'])->name('visi_misi');
	Route::post('/visi_misi_add', [AdminController::class, 'visi_misi_add'])->name('visi_misi_add');
	Route::post('/visi_misi_update/{id}', [AdminController::class, 'visi_misi_update'])->name('visi_misi_update');
	Route::post('/visi_misi_delete/{id}', [AdminController::class, 'visi_misi_delete'])->name('visi_misi_delete');

	Route::get('/kontak', [AdminController::class, 'kontak'])->name('kontak');
	Route::post('/kontak_add', [AdminController::class, 'kontak_add'])->name('kontak_add');
	Route::post('/kontak_update/{id}', [AdminController::class, 'kontak_update'])->name('kontak_update');
	Route::post('/kontak_delete/{id}', [AdminController::class, 'kontak_delete'])->name('kontak_delete');

	Route::get('/carousel', [AdminController::class, 'carousel'])->name('carousel');
	Route::post('/carousel_add', [AdminController::class, 'carousel_add'])->name('carousel_add');
	Route::post('/carousel_update/{id}', [AdminController::class, 'carousel_update'])->name('carousel_update');
	Route::post('/carousel_delete/{id}', [AdminController::class, 'carousel_delete'])->name('carousel_delete');


	Route::get('/kerjasama', [AdminController::class, 'kerjasama'])->name('kerjasama');
	Route::post('/kerjasama_add', [AdminController::class, 'kerjasama_add'])->name('kerjasama_add');
	Route::post('/kerjasama_update/{id}', [AdminController::class, 'kerjasama_update'])->name('kerjasama_update');
	Route::post('/kerjasama_delete/{id}', [AdminController::class, 'kerjasama_delete'])->name('kerjasama_delete');


	Route::get('/portofolio', [AdminController::class, 'portofolio'])->name('portofolio');
	Route::post('/portofolio_add', [AdminController::class, 'portofolio_add'])->name('portofolio_add');
	Route::post('/portofolio_update/{id}', [AdminController::class, 'portofolio_update'])->name('portofolio_update');
	Route::post('/portofolio_delete/{id}', [AdminController::class, 'portofolio_delete'])->name('portofolio_delete');

	Route::get('/team', [AdminController::class, 'team'])->name('team');
	Route::post('/team_add', [AdminController::class, 'team_add'])->name('team_add');
	Route::post('/team_update/{id}', [AdminController::class, 'team_update'])->name('team_update');
	Route::post('/team_delete/{id}', [AdminController::class, 'team_delete'])->name('team_delete');

	Route::get('/beranda', [AdminController::class, 'beranda'])->name('beranda');
	Route::post('/beranda_add', [AdminController::class, 'beranda_add'])->name('beranda_add');
	Route::post('/beranda_update/{id}', [AdminController::class, 'beranda_update'])->name('beranda_update');
	Route::post('/beranda_delete/{id}', [AdminController::class, 'beranda_delete'])->name('beranda_delete');

	Route::get('/about', [AdminController::class, 'about'])->name('about');
	Route::post('/about_add', [AdminController::class, 'about_add'])->name('about_add');
	Route::post('/about_update/{id}', [AdminController::class, 'about_update'])->name('about_update');
	Route::post('/about_delete/{id}', [AdminController::class, 'about_delete'])->name('about_delete');

	// Route::post('/detail_jasa_add', [AdminController::class, 'detail_jasa_add'])->name('detail_jasa_add');


	Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
});
