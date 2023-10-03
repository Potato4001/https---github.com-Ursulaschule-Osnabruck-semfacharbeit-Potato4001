<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SettingController extends Controller
{
    public function index()
    {
        $team = Team::where('id', Auth::user()->team_id)->first();
        return view('setting.index', compact(['team']));
    }

}
