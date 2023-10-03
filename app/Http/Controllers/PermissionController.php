<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PermissionController extends Controller
{
    public function index()
    {
        $users = User::where('team_id', Auth::user()->team_id)->paginate(20);
        return view('permission.index', compact(['users']));
    }
}
