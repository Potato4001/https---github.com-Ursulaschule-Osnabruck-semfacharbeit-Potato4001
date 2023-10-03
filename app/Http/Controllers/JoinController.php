<?php

namespace App\Http\Controllers;

use App\Models\TeamType;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class JoinController extends Controller
{
    public function create(Request $request)
    {
        return view('team.join', [
            'team_id' => $request->route('team_id')
        ]);
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
                //session()->regenerate();

                return redirect('join/register/'.$team->id);
            }    
        }

        throw ValidationException::withMessages([
            'invitation_link' => 'Your link could not be verified.' 
        ]);
        
    }
}
