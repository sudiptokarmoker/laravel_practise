<?php

use App\Http\Controllers\Dashboard\IndexController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

Route::get('/', function () {
    return view('welcome');
});

/*
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
*/
Route::view('/dashboard/index', [IndexController::class, 'index'])->name('dashboard.view')->middleware('auth');
Route::view('/dashboard/show', [IndexController::class, 'show'])->name('dashboard.show')->middleware('auth');
Route::view('/dashboard/create', [IndexController::class, 'create'])->name('dashboard.create')->middleware('auth');
