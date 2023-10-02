<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class TeamManagmentController extends Controller
{
    public function create()
    {
        return view('team.index', [
            'events' => Event::paginate(5)
        ]);
    }
}
