<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjetsController;
use App\Http\Controllers\ExigencesController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Backend\ProfileController;
use App\Http\Controllers\Backend\UserController;
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
    return view('auth/register');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('admin.index');
})->name('dashboard');
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard/{id}', function () {
    return view('admin.index');
})->name('dashboardUser');
Route::get('/logout', [AdminController::class, 'Logout'])->name('admin.logout');

//Route::get('redirects','App\Http\Controllers\HomeController@index');
Route::group(['middleware' => 'auth'],function(){
Route::prefix('user')->group(function(){
    Route::get('/view', [UserController::class, 'UserView'])->name('user.view');
    Route::get('/add', [UserController::class, 'UserAdd'])->name('users.add');
    Route::post('/store', [UserController::class, 'UserStore'])->name('users.store');
    Route::get('/edit/{id}', [UserController::class, 'UserEdit'])->name('users.edit');
    Route::post('/update/{id}', [UserController::class, 'UserUpdate'])->name('users.update');
    Route::get('/delete/{id}', [UserController::class, 'UserDelete'])->name('users.delete');
    //Route Projet
    Route::get('/projet',  [ProjetsController::class, 'index'])->name('index');
    Route::get('/projet/new', [ProjetsController::class, 'nouveauProjet'])->name('nouveauProjet');
    Route::post('/projet/new', [ProjetsController::class, 'createProjet'])->name('createProjet');
});

//Exigences Route
Route::prefix('exigence')->group(function(){
    Route::get('/view', [ExigencesController::class, 'index'])->name('exigence.view');
});

// User Profile and Change Password
Route::prefix('profile')->group(function(){
    Route::get('/view', [ProfileController::class, 'ProfileView'])->name('profile.view');
    Route::get('/edit', [ProfileController::class, 'ProfileEdit'])->name('profile.edit');
    Route::post('/store', [ProfileController::class, 'ProfileStore'])->name('profile.store');
    Route::get('/password/view', [ProfileController::class, 'PasswordView'])->name('password.view');
    Route::post('/password/update', [ProfileController::class, 'PasswordUpdate'])->name('password.update');
    });
});
