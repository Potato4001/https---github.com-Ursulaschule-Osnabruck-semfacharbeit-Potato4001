<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TeamManagmentController extends Controller
{
    public function create()
    {
        $events = Event::where('team_id', Auth::user()->team_id)->paginate(5);
        return view('team.index', compact(['events']));
    }
}
