<?php

use App\Http\Controllers\Admin\Absence;
use App\Http\Controllers\Admin\PresenceController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\DivisionController;
use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\Admin\ElearningController;
use App\Http\Controllers\Admin\ModuleController;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\Admin\SubmissionController;
use App\Http\Controllers\Admin\TaskController;
use App\Http\Controllers\Admin\UserController as AdminUserController;
use App\Http\Controllers\Admin\UserPresenceController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;

use App\Http\Controllers\LandingPage;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\PresenceVerifyController;
use App\Http\Controllers\UserProfileController;

use App\Http\Controllers\User\DashboardController as UserDashboardController;
use App\Http\Controllers\User\ElearningController as UserElearningController;
use App\Http\Controllers\User\UserController as UserUserController;
use App\Http\Controllers\User\ModuleController as UserModuleController;
use App\Http\Controllers\User\TaskController as UserTaskController;
use App\Models\UserPresence;
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
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');



Route::middleware('guest')->group(function () {
  Route::get('/login', [LoginController::class, 'index'])->name('login');
  Route::post('/login', [LoginController::class, 'login'])->name('login.post');
  Route::get('/register', [RegisterController::class, 'index'])->name('register');
  Route::post('/register', [RegisterController::class, 'register'])->name('register.post');
});




Route::middleware(['auth', 'role:user'])->group(function () {
  Route::get('/dashboard', [UserDashboardController::class, 'index'])->name('user.dashboard');

  Route::get('/my-profile/{id}/{name}', [UserProfileController::class, 'index'])->name('user.my-profile');
  Route::get('/my-profile/settings/{id}/{name}', [UserProfileController::class, 'settings'])->name('user.my-profile.settings');
  Route::put('/my-profile/settings/update/{id}', [UserProfileController::class, 'update'])->name('user.my-profile.settings.update');

  Route::get('/users', [UserUserController::class, 'index'])->name('user.users');
  Route::get('/e-learning', [UserElearningController::class, 'index'])->name('user.elearning');
  Route::get('/e-learning/module/division-{id}', [UserModuleController::class, 'division']);
  Route::get('/e-learning/task/division-{id}', [UserTaskController::class, 'division'])->name('elearning.task');
  Route::post('/e-learning/task/submission/{id}', [UserTaskController::class, 'submission'])->name('user.elearning.task.submission');
  Route::post('/e-learning/task/submission/{subm_id}/update/{divi_id}', [UserTaskController::class, 'update'])->name('user.elearning.task.submission.update');
});






Route::middleware(['auth', 'role_or_permission:admin|admin-division'])->group(function () {
  Route::prefix('admin')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');

    Route::get('/my-profile/{id}/{name}', [UserProfileController::class, 'index'])->name('admin.my-profile');
    Route::get('/my-profile/settings/{id}/{name}', [UserProfileController::class, 'settings'])->name('admin.my-profile.settings');
    Route::put('/my-profile/settings/update/{id}', [UserProfileController::class, 'update'])->name('admin.my-profile.settings.update');



    Route::get('/news', [NewsController::class, 'index'])->name('admin.news');
    Route::get('/news/create', [NewsController::class, 'create'])->name('admin.news.create');
    Route::get('/news/{id}/show', [NewsController::class, 'show'])->name('admin.news.show');
    Route::post('/news/store', [NewsController::class, 'store'])->name('admin.news.store');
    Route::get('/news/{id}/edit', [NewsController::class, 'edit'])->name('admin.news.edit');
    Route::get('/news/{id}/destroy', [NewsController::class, 'destroy'])->name('admin.news.destroy');
    Route::put('/news/{id}/update', [NewsController::class, 'update'])->name('admin.news.update');

    Route::get('/division', [DivisionController::class, 'index'])->name('admin.division');
    Route::get('/division/create', [DivisionController::class, 'create'])->name('admin.division.create');
    Route::post('/division/store', [DivisionController::class, 'store'])->name('admin.division.store');
    Route::get('/division/{id}/edit', [DivisionController::class, 'edit'])->name('admin.division.edit');
    Route::put('/division/{id}/update', [DivisionController::class, 'update'])->name('admin.division.update');
    Route::delete('/division/{id}/destroy', [DivisionController::class, 'destroy'])->name('admin.division.destroy');
    Route::get('/division/member', [DivisionController::class, 'member'])->name('admin.division.member');

    Route::get('/users', [AdminUserController::class, 'index'])->name('admin.users');
    Route::get('/users/profile/{uuid}/{id}/{name}', [AdminUserController::class, 'profile'])->name('admin.users.profile');
    Route::post('/users/give-permission/{id}', [AdminUserController::class, 'givePermission'])->name('admin.users.give_permission');
    Route::post('/users/revoke-permission/{id}', [AdminUserController::class, 'revokePermission'])->name('admin.users.revoke_permission');

    Route::get('/gallery', [GalleryController::class, 'index'])->name('admin.gallery');
    Route::get('/gallery/create', [GalleryController::class, 'create'])->name('admin.gallery.create');
    Route::post('/gallery/store', [GalleryController::class, 'store'])->name('admin.gallery.store');
    Route::delete('/gallery/{id}/destroy', [GalleryController::class, 'destroy'])->name('admin.gallery.destroy');

    Route::get('/e-learning', [ElearningController::class, 'index'])->name('admin.elearning');

    Route::get('/e-learning/module', [ModuleController::class, 'index'])->name('admin.elearning.module');
    Route::get('/e-learning/module/create', [ModuleController::class, 'create'])->name('admin.elearning.module.create');
    Route::post('/e-learning/module/store', [ModuleController::class, 'store'])->name('admin.elearning.module.store');
    Route::delete('/e-learning/module/{id}/destroy', [ModuleController::class, 'destroy'])->name('admin.elearning.module.destroy');
    Route::get('/e-learning/module/division-{id}', [ModuleController::class, 'division']);

    Route::get('/e-learning/task', [TaskController::class, 'index'])->name('admin.elearning.task');
    Route::get('/e-learning/task/create', [TaskController::class, 'create'])->name('admin.elearning.task.create');
    Route::post('/e-learning/task/store', [TaskController::class, 'store'])->name('admin.elearning.task.store');
    Route::delete('/e-learning/task/{id}/destroy', [TaskController::class, 'destroy'])->name('admin.elearning.task.destroy');
    Route::get('/e-learning/task/{id}/edit', [TaskController::class, 'edit'])->name('admin.elearning.task.edit');
    Route::put('/e-learning/task/{id}/update', [TaskController::class, 'update'])->name('admin.elearning.task.update');
    Route::get('/e-learning/task/division-{id}', [TaskController::class, 'division'])->name('admin.elearning.task.division');
    Route::get('/e-learning/submission/{id}/view', [SubmissionController::class, 'show'])->name('admin.elearning.submission.view');

    Route::get('/presence/division-{id}', [PresenceController::class, 'index'])->name('admin.presence');
    Route::get('/presence/create', [PresenceController::class, 'create'])->name('admin.presence.create');
    Route::post('/presence/store', [PresenceController::class, 'store'])->name('admin.presence.store');
    Route::get('/presence/{pres_id}/show/{div_id}', [PresenceController::class, 'show'])->name('admin.presence.show');
    Route::get('/presence/{id}/edit', [PresenceController::class, 'edit'])->name('admin.presence.edit');
    Route::put('/presence/{id}/update', [PresenceController::class, 'update'])->name('admin.presence.update');
    Route::delete('/presence/{id}/destroy', [PresenceController::class, 'destroy'])->name('admin.presence.destroy');
    Route::post('/presence/user/store', [UserPresenceController::class, 'store'])->name('admin.presence.user.store');
  });
});

Route::get('/presence/verify/{uuid}/{id}/user-presence', [PresenceVerifyController::class, 'user_presence'])->name('admin.presence.user_presence');
Route::post('/presence/verify/submit', [PresenceVerifyController::class, 'user_presence_submit'])->name('presence.verify.submit');
Route::get('/presence/verify/success', [PresenceVerifyController::class, 'user_presence_success'])->name('presence.verify.success');



// Route::middleware(['auth', 'role_or_permission:admin|admin-division'])->group(function () {
//   Route::get('/admin-division/e-learning/module/create', [ModuleController::class, 'create'])->name('admin.elearning.module.create');
//   Route::post('/admin-division/e-learning/module/store', [ModuleController::class, 'store'])->name('admin.elearning.module.store');
//   Route::delete('/admin-division/e-learning/module/{id}/destroy', [ModuleController::class, 'destroy'])->name('admin.elearning.module.destroy');
//   Route::get('/admin-division/e-learning/module/division-{id}', [ModuleController::class, 'division']);

//   Route::get('/admin-division/e-learning/task', [TaskController::class, 'index'])->name('admin.elearning.task');
//   Route::get('/admin-division/e-learning/task/create', [TaskController::class, 'create'])->name('admin.elearning.task.create');
//   Route::post('/admin-division/e-learning/task/store', [TaskController::class, 'store'])->name('admin.elearning.task.store');
//   Route::delete('/admin-division/e-learning/task/{id}/destroy', [TaskController::class, 'destroy'])->name('admin.elearning.task.destroy');
//   Route::get('/admin-division/e-learning/task/{id}/edit', [TaskController::class, 'edit'])->name('admin.elearning.task.edit');
//   Route::put('/admin-division/e-learning/task/{id}/update', [TaskController::class, 'update'])->name('admin.elearning.task.update');
//   Route::get('/admin-division/e-learning/task/division-{id}', [TaskController::class, 'division'])->name('admin.elearning.task.division');
// });
