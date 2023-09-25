<?php

use App\Http\Controllers\EventController;
use App\Http\Controllers\JoinController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\TeamManagmentController;
use App\Http\Controllers\TeamUserController;
use App\Http\Controllers\TreasuryController;
use Illuminate\Support\Facades\Route;
use Spatie\Permission\Exceptions\RoleDoesNotExist;

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
Route::post('team/step-user', [TeamUserController::class, 'store'])->middleware('guest');

Route::get('team/{user:team_id}', [TeamManagmentController::class, 'create'])->middleware('auth');

Route::get('team/{user:team_id}/events', [EventController::class, 'index']);
/* Das können nur bestimmte Rollen aufrufen, naemlich Admin, Coach */
Route::get('team/{user:team_id}/events/create', [EventController::class, 'create']);
Route::post('team/{user:team_id}/events', [EventController::class, 'store']);
Route::get('events/{event}/edit', [EventController::class, 'edit']);
Route::patch('events/{event}', [EventController::class, 'update']);
Route::delete('events/{event}', [EventController::class, 'destroy']);

Route::get('team/{user:team_id}/treasury', [TreasuryController::class, 'index']);
/* Das können nur bestimmte Rollen aufrufen, naemlich Admin, Treasurer */
Route::get('team/{user:team_id}/treasury/create', [TreasuryController::class, 'create']);
Route::post('team/{user:team_id}/treasury', [TreasuryController::class, 'store']);
Route::get('treasury/{treasury}/edit', [TreasuryController::class, 'edit']);
Route::patch('treasury/{treasury}', [TreasuryController::class, 'update']);
Route::delete('treasury/{treasury}', [TreasuryController::class, 'destroy']);

Route::get('team/{user:team_id}/permissions', [PermissionController::class, 'index']);

Route::get('join', [JoinController::class, 'create'])->middleware('guest');
Route::post('join', [JoinController::class, 'store']);
Route::get('join/register', [RegisterController::class, 'create']);
