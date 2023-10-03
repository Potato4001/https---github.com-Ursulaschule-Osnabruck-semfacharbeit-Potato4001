<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Support\Facades\Auth;

class EventController extends Controller
{
    public function index()
    {
        $events = Event::where('team_id', Auth::user()->team_id)->paginate(5);
        return view('events.index', compact(['events']));
        
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
            'date' => ['required'],
        ]);
        
        $event = Event::create($attributes);
        $event->team_id = auth()->user()->team_id;
        $event->save();

        return redirect('/team/'. auth()->user()->team_id .'/events')->with('success', 'Event created!');
    }

    public function edit(Event $event)
    {
        return view('events.edit', ['event' => $event]);
    }

    public function update(Event $event)
    {
        $attributes = request()->validate([
            'activity' => ['required'],
            'time' => ['required'],
            'date' => ['required'],
            //'team_id' => array_merge(request()->user()->team_id)
        ]);

        $event->update($attributes);

        return redirect('/team/'. auth()->user()->team_id .'/events')->with('success', 'Event Updated!');
    }

    public function destroy(Event $event)
    {
        $event->delete();

        return back()->with('success', 'Event Deleted!');
    }
}
