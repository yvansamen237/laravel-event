<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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

/*Users Manager*/
/*Route::get('/register', [\App\Http\Controllers\UserController::class, 'showRegister']);
Route::get('/', [\App\Http\Controllers\UserController::class, 'showlogin']);*/

Route::post('/register-store', [\App\Http\Controllers\UserController::class, 'register']);
Route::post('/login', [\App\Http\Controllers\UserController::class, 'login']);
Route::get('/', [\App\Http\Controllers\UserController::class, 'showLogin'])->name('login');
Route::get('/logout', [\App\Http\Controllers\UserController::class, 'logout']);
Route::get('/client-create', [\App\Http\Controllers\ClientController::class, 'create'])->name("client.create");

/*Products Manager*/
Route::prefix('admin')/*->middleware('auth')*/
    ->group(
        function () {
            Route::get('/', [\App\Http\Controllers\HomeController::class, 'index'])->name("home");


            /*Formation*/
            Route::get('/formation-index', [\App\Http\Controllers\FormationController::class, 'index'])->name("formation.index");
            Route::get('/formation-create', [\App\Http\Controllers\FormationController::class, 'create'])->name("formation.create");
            Route::get('/edit/{id}', [\App\Http\Controllers\FormationController::class, 'edit'])->name("formation.edit");
            Route::get('/delete/{id}', [\App\Http\Controllers\FormationController::class, 'delete'])->name("formation.delete");
            Route::post('/formation-store', [\App\Http\Controllers\FormationController::class, 'store'])->name("formation.store");
            Route::post('/formation-update', [\App\Http\Controllers\FormationController::class, 'update'])->name("formation.update");
            /*End Formations*/


            /*Start Tranches*/

            /*Formation*/
            Route::get('/tranche-index', [\App\Http\Controllers\TrancheController::class, 'index'])->name("tranche.index");
            Route::get('/tranche-create', [\App\Http\Controllers\TrancheController::class, 'create'])->name("tranche.create");
            Route::get('/edit/{id}', [\App\Http\Controllers\TrancheController::class, 'edit'])->name("tranche.edit");
            Route::get('/delete/{id}', [\App\Http\Controllers\TrancheController::class, 'delete'])->name("tranche.delete");
            Route::post('/tranche-store', [\App\Http\Controllers\TrancheController::class, 'store'])->name("tranche.store");
            Route::post('/tranche-update', [\App\Http\Controllers\TrancheController::class, 'update'])->name("tranche.update");
            /*End Formations*/


            /*ENd Tranches */
            //Route::get('/', [ProductController::class, 'index']);
            Route::get('/create', [ProductController::class, 'create']);
            Route::get('/edit/{id}', [ProductController::class, 'edit']);
            Route::get('/delete/{id}', [ProductController::class, 'delete']);
            Route::post('/store', [ProductController::class, 'store']);
            Route::post('/update', [ProductController::class, 'update']);
        }
    );