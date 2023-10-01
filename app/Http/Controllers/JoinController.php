<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Validation\ValidationException;

class JoinController extends Controller
{
    public function create()
    {
        return view('team.join');
    }

    public function store()
    {
        $teams = Team::get();
        foreach($teams as $team)
        {
            if ('invitation_link' === $team->invitation_link)
            {
                return redirect('/join/register/?team_id='. $team->id);
            }    
        }

        throw ValidationException::withMessages([
            'invitation_link' => 'Your link could not be verified.' 
        ]);
    }
}
