<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Contracts\Validation\Rule;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
        return view('events.index', [
            'events' => Event::paginate(10),
        ]);
        
    }

    public function create()
    {
        return view('events.create');    
    }

    public function store()
    {
        $attributes = request()->validate([
            'activity' => ['required'],
            'time' => ['required'],
            //'team_id' => array_merge(request()->user()->team_id)
        ]);
        
        Event::create($attributes);

        return redirect('/team/{$user->team_id}/events');
    }
}
