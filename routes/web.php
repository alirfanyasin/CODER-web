<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\DivisionController;
use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\Admin\LearningController;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\Admin\UserController as AdminUserController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\LandingPage;
use App\Http\Controllers\LandingPageController;
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

Route::get('/', [LandingPageController::class, 'index']);

Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::get('/register', [RegisterController::class, 'register'])->name('register');


Route::get('/admin/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
Route::get('/admin/news', [NewsController::class, 'index'])->name('admin.news');
Route::get('/admin/news/create', [NewsController::class, 'create'])->name('admin.news.create');
Route::get('/admin/news/show', [NewsController::class, 'show'])->name('admin.news.show');
Route::post('/admin/news/store', [NewsController::class, 'store'])->name('admin.news.store');
Route::get('/admin/news/{id}/edit', [NewsController::class, 'edit'])->name('admin.news.edit');
Route::get('/admin/news/{id}/destroy', [NewsController::class, 'destroy'])->name('admin.news.destroy');
Route::put('/admin/news/{id}/update', [NewsController::class, 'update'])->name('admin.news.update');

Route::get('/admin/division', [DivisionController::class, 'index'])->name('admin.division');
Route::get('/admin/division/create', [DivisionController::class, 'create'])->name('admin.division.create');
Route::post('/admin/division/store', [DivisionController::class, 'store'])->name('admin.division.store');
Route::get('/admin/division/{id}/edit', [DivisionController::class, 'edit'])->name('admin.division.edit');
Route::put('/admin/division/{id}/update', [DivisionController::class, 'update'])->name('admin.division.update');
Route::delete('/admin/division/{id}/destroy', [DivisionController::class, 'destroy'])->name('admin.division.destroy');
Route::get('/admin/division/member', [DivisionController::class, 'member'])->name('admin.division.member');

Route::get('/admin/users', [AdminUserController::class, 'index'])->name('admin.users');
Route::get('/admin/users/profile', [AdminUserController::class, 'profile'])->name('admin.users.profile');

Route::get('/admin/gallery', [GalleryController::class, 'index'])->name('admin.gallery');
Route::get('/admin/gallery/create', [GalleryController::class, 'create'])->name('admin.gallery.create');
Route::post('/admin/gallery/store', [GalleryController::class, 'store'])->name('admin.gallery.store');
Route::delete('/admin/gallery/{id}/destroy', [GalleryController::class, 'destroy'])->name('admin.gallery.destroy');

Route::get('/admin/e-learning', [LearningController::class, 'index'])->name('admin.learning');
