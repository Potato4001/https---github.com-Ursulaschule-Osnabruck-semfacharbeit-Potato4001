<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
        return view('team.events.index', [
           // 'events' => Event::paginate(10)
        ]);
        
    }
}
