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
            'team_type_id' => ['required'],
        ]);

        $team = Team::create($attributes);

        $team->invitation_link = 'http://https---github.com-ursulaschule-osnabruck-semfacharbeit-potato4001.test/team/'.  $team->id;
        $team->save();

        return redirect('team/step-user/?team_id='.$team->id);
    }
}
