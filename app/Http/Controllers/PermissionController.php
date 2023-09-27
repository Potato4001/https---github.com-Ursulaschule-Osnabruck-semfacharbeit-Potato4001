<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class PermissionController extends Controller
{
    public function index()
    {
        return view('permission.index', [
            'users' => User::paginate(20)
        ]);
    }
}
