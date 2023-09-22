<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class PermissionController extends Controller
{
    public function index(User $users)
    {
        return view('permission.index', [
            'users' => $users
        ]);
    }
}
