<?php

use App\Http\Controllers\Backened\Auth\ForgotPasswordController;
use App\Http\Controllers\Backened\Auth\LoginController;
use App\Http\Controllers\Backened\Dashboard;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;

use App\Http\Controllers\Backened\RolesController;
use App\Http\Controllers\Backened\UsersController;
use App\Http\Controllers\PostsController;
use App\Models\Address;
use App\Models\User;


use Illuminate\Support\Facades\Auth;

use Faker\Factory;
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

Auth::routes();

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
    Route::get('/dashboard', [Dashboard::class, 'index'])->name('admin.dashboard');

    //Route::get('/dashboard', [TestController::class, 'test']);

    //Route::get('roles', [RolesController::class, 'index']);
    //Route::get('/roles', [RolesController::class, 'index']);
    //Route::resource('roles', RolesController::class);
    Route::resource('roles', RolesController::class, ['name' => 'admin.roles']);
    Route::resource('users', UsersController::class, ['name' => 'admin.users']);
    Route::resource('admins', 'Backend\AdminsController', ['names' => 'admin.admins']);

    // Login route
    Route::get('/login', [LoginController::class, 'showLoginForm'])->name('admin.login');

    Route::post('/login/submit', [LoginController::class, 'login'])->name('admin.login.submit');
    // Logout route
    Route::post('/logout/submit', [LoginController::class, 'logout'])->name('admin.logout.submit');
    // forget password route
    Route::get('/password/reset', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('admin.password.request');
    Route::get('/password/reset/submit', [ForgotPasswordController::class, 'reset'])->name('admin.password.update');
});

Route::get('/test', [TestController::class, 'index']);


Route::get('/add-post', [PostsController::class, 'addPost'])->name('add.post');

Route::get('/add-comment/{id}', [PostsController::class, 'addComments'])->name('add.post.comments');


Route::get('/user', function(){
    /*
    Address::create([
        'user_id' => 1,
        'country' => 'Bangladesh'
    ]);
    Address::create([
        'user_id' => 2,
        'country' => 'Sweden'
    ]);
    */
    // $user_list = User::all();


    $address_list = Address::all();


    // foreach($user_list as $row){
    //     if(isset($row->address['country'])){
    //         echo '<br><br>';
    //     echo $row->name;
    //     echo "country : ".$row->address['country'];
    //     echo "</br>";
    //     }
        
    // }

    return view('user.user_lists', compact('address_list'));
});