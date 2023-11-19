<?php

use App\Http\Controllers\EventController;
use App\Http\Controllers\JoinController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\SettingController;
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
    if(Auth::check()){
        return redirect('team/'. auth()->user()->team_id);
    }else{
        return view('index');
    }
});

Route::get('login', [SessionsController::class, 'create'])->middleware('guest');
Route::post('login', [SessionsController::class, 'store'])->middleware('guest');
Route::post('logout', [SessionsController::class, 'destroy'])->middleware('auth');

Route::get('team', [TeamController::class, 'create'])->middleware('guest');
Route::post('team', [TeamController::class, 'store'])->middleware('guest');
Route::get('team/step-user/{team_id}', [TeamUserController::class, 'create'])->middleware('guest');
Route::post('team/step-user/{team_id}', [TeamUserController::class, 'store'])->middleware('guest');

Route::get('team/{user:team_id}', [TeamManagmentController::class, 'create'])->middleware('auth');

Route::get('team/{user:team_id}/events', [EventController::class, 'index'])->middleware('auth');
/* Das können nur bestimmte Rollen aufrufen, naemlich Admin, Coach */
Route::get('team/{user:team_id}/events/create', [EventController::class, 'create'])->middleware('auth');
Route::post('team/{user:team_id}/events', [EventController::class, 'store'])->middleware('auth');
Route::get('events/{event}/edit', [EventController::class, 'edit'])->middleware('auth');
Route::patch('events/{event}', [EventController::class, 'update'])->middleware('auth');
Route::delete('events/{event}', [EventController::class, 'destroy'])->middleware('auth');

Route::get('team/{user:team_id}/treasury', [TreasuryController::class, 'index'])->middleware('auth');
/* Das können nur bestimmte Rollen aufrufen, naemlich Admin, Treasurer */
Route::get('team/{user:team_id}/treasury/create', [TreasuryController::class, 'create'])->middleware('auth');
Route::post('team/{user:team_id}/treasury', [TreasuryController::class, 'store'])->middleware('auth');
Route::get('treasury/{treasury}/edit', [TreasuryController::class, 'edit'])->middleware('auth');
Route::patch('treasury/{treasury}', [TreasuryController::class, 'update'])->middleware('auth');
Route::delete('treasury/{treasury}', [TreasuryController::class, 'destroy'])->middleware('auth');

Route::get('team/{user:team_id}/permissions', [PermissionController::class, 'index'])->middleware('auth');
Route::patch('permissions/{user}', [PermissionController::class, 'update'])->middleware('auth');

Route::get('join', [JoinController::class, 'create'])->middleware('guest');
Route::post('join', [JoinController::class, 'store']);
Route::get('join/register/{team_id}', [RegisterController::class, 'create']);
Route::post('join/register/{team_id}', [RegisterController::class, 'store']);

Route::get('team/{user:team_id}/setting', [SettingController::class, 'index'])->middleware('auth');
