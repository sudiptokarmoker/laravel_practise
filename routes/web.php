<?php

use App\Http\Controllers\Backened\Auth\ForgotPasswordController;
use App\Http\Controllers\Backened\Auth\LoginController;
use App\Http\Controllers\Backened\Dashboard;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;

use App\Http\Controllers\Backened\RolesController;
use App\Http\Controllers\Backened\UsersController;
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
/*
Route::get('/', function () {
    return view('welcome');
});
*/

//Auth::routes();

/*
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
*/

/*
Route::view('/dashboard/index', [IndexController::class, 'index'])->name('dashboard.view')->middleware('auth');
Route::view('/dashboard/show', [IndexController::class, 'show'])->name('dashboard.show')->middleware('auth');
Route::view('/dashboard/create', [IndexController::class, 'create'])->name('dashboard.create')->middleware('auth');
*/

Route::group(['prefix' => 'admin'], function () {
    Route::get('/', [Dashboard::class, 'index'])->name('admin.dashboard');
    //Route::get('roles', [RolesController::class, 'index']);
    //Route::get('/roles', [RolesController::class, 'index']);
    //Route::resource('roles', RolesController::class);
    Route::resource('roles', RolesController::class, ['name' => 'admin.roles']);
    Route::resource('users', UsersController::class, ['name' => 'admin.users']);
    // Login route
    Route::get('/login', [LoginController::class, 'showLoginForm'])->mame('admin.login');
    Route::post('/login/submit', [LoginController::class, 'login'])->name('admin.login.submit');
    // Logout route
    Route::post('/logout/submit', [LoginController::class, 'logout'])->name('admin.logout.submit');
    // forot password route
    Route::get('/password/reset', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('admin.password.request');
    Route::get('/password/reset/submit', [ForgotPasswordController::class, 'reset'])->name('admin.password.update');
});

Route::get('/test', [TestController::class, 'index']);
