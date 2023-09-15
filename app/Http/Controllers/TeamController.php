<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class TeamController extends Controller
{
    public function create()
    {
        return view('team.create');
    }

    public function store()
    {
        // validate request
        
        $attributes = request()->validate([
            'team_name' => ['required', Rule::unique('teams', 'team_name')],
            'sport_type' => ['required'],
            'team_type' => ['required']
        ]);
        

        Team::create($attributes);

        return redirect('team/step-user');
    }
}
