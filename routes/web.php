<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function() {
    return view('articles.dashboard');
});

Route::get('/home', function() {
    return view('articles.dashboard');
});

Auth::routes();

// Route::get('/home', [ProjectController::class, 'index'])->name('home');


Route::get('/dashboard', function() {
    return view('articles.dashboard');
});

Route::get('/clients', [ClientController::class, "index"]);
Route::get('/clients/detail/{id}', [ClientController::class, "detail"]);
Route::get('/clients/create', [ClientController::class, "add"]);
Route::post('/clients/create', [ClientController::class, "create"]);
Route::get('/clients/edit/{id}', [ClientController::class, "edit"]);
Route::post('/clients/edit/{id}', [ClientController::class, "update"]);
Route::get('/clients/delete/{id}', [ClientController::class, "delete"]);

Route::get('/projects', [ProjectController::class, "index"]);
Route::get('/projects/create',[ProjectController::class, "add"]);
Route::post('/projects/create',[ProjectController::class, "create"]);
Route::get('/projects/edit/{id}',[ProjectController::class, "edit"]);
Route::post('/projects/edit/{id}',[ProjectController::class, "update"]);
Route::get('/projects/delete/{id}',[ProjectController::class, "delete"]);

Route::get('/projects/detail/{id}', [ProjectController::class, "detail"]);

Route::get('/users', [UserController::class, "index"]);

Route::get('/articles/tasks', function() {
    return view('articles.tasks');
});

Route::get('/articles/users', function() {
    return view('articles.users');
});

