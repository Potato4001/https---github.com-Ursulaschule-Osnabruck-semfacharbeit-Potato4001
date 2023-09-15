<?php

use App\Http\Controllers\JoinController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\TeamManagmentController;
use App\Http\Controllers\TeamUserController;
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

Route::get('/', function () {
    return view('index');
});

Route::get('register', [RegisterController::class, 'create'])->middleware('guest');
Route::post('register', [RegisterController::class, 'store'])->middleware('guest');
Route::get('login', [SessionsController::class, 'create'])->middleware('guest');
Route::post('login', [SessionsController::class, 'store'])->middleware('guest');
Route::post('logout', [SessionsController::class, 'destroy'])->middleware('auth');

Route::get('team', [TeamController::class, 'create'])->middleware('guest');
Route::post('team', [TeamController::class, 'store'])->middleware('guest');
Route::get('team/step-user', [TeamUserController::class, 'create'])->middleware('guest');
Route::post('team/step-user', [TeamUserController::class, 'store']);

Route::get('team/{user:team_id}', [TeamManagmentController::class, 'create']);

Route::get('join', [JoinController::class, 'create'])->middleware('guest');
Route::post('join', [JoinController::class, 'store']);
Route::get('join/register', [RegisterController::class, 'create']);
