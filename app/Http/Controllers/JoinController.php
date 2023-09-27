<?php

namespace App\Http\Controllers;

use Illuminate\Validation\ValidationException;

class JoinController extends Controller
{
    public function create()
    {
        return view('team.join');
    }

    public function store($url)
    {
        if ($url === $team->invitation_link)
        {
            return redirect('join/register/?team_id='. $team->id);
        }else{
            throw ValidationException::withMessages([
                'invitation_link' => 'Your link could not be verified.' 
            ]);
        }
    }
}
