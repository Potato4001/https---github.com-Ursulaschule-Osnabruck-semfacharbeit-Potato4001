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
                'events' => Event::paginate(5)
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
            'date' => ['required'],
            //'team_id' => array_merge(request()->user()->team_id)
        ]);
        
        Event::create($attributes);

        return redirect('/team/{$user->team_id}/events');
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

        return redirect('/team/{{ $user->team_id }}/events')->with('success', 'Event Updated!');
    }

    public function destroy(Event $event)
    {
        $event->delete();

        return back()->with('success', 'Event Deleted!');
    }
}
