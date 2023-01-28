<?php

use App\Http\Controllers\AdminController;
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

Route::get('/',[AdminController::class,"index"]);
Route::get('/register',[AdminController::class,"showRegister"])->name("register");
Route::post('/store',[AdminController::class,"store"])->name("save");
Route::get("/login",[AdminController::class,"loginViewAction"])->name("loginView");
Route::post("/userlogin",[AdminController::class,"login"])->name("login");
Route::post("/logout",[AdminController::class,"logout"])->name("logout");

Route::group([
         'middleware' => 'auth',
        'prefix' => 'admin',
],function () {
    Route::get('/dashboard', [AdminController::class, "view"])->name("home");
});
