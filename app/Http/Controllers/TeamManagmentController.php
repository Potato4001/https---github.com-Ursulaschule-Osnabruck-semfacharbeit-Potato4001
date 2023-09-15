<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeamManagmentController extends Controller
{
    public function create()
    {
        return view('team.index');
    }
}
