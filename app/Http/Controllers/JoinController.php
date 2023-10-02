<?php

namespace App\Http\Controllers;

use App\Models\TeamType;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class JoinController extends Controller
{
    public function create()
    {
        return view('team.join');
    }

    public function store()
    {
        $teams = \App\Models\Team::all();

        $url = request()->validate([
            'invitation_link' => ['required']
        ]);
    
        foreach($teams as $team)
        {
            /**Problem liegt an der uebergebenen URL höchstwahrscheinlich kein String? */
            if (implode($url) === $team->invitation_link)
            {
                // session()->regenerate();

                return redirect('/join/register/?team_id='.$team->id);
            }    
        }

        throw ValidationException::withMessages([
            'invitation_link' => 'Your link could not be verified.' 
        ]);
        
    }
}
