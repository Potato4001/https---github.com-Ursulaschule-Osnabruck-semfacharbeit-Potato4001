<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
//use Database\Seeders\PermissionsSeeder;

class TeamUserController extends Controller
{
    public function create(Request $request)
    {
        return view('team.user', [
            'team_id' => $request->route('team_id')
        ]);
    }

    public function store(Request $request)
    {
        $attributes = request()->validate([
            'name' => ['required', Rule::unique('users', 'name')],
            'email' => ['required', Rule::unique('users', 'email')],
            'password' => ['required'],
            
        ]);

        $user = User::create($attributes);
        $user->assignRole('admin');
        $user->givePermissionTo('give permission');
        
        $user->team_id = $request->route('team_id');
        $user->save();

        auth()->login($user);

        return redirect('team/{$user->team_id}')->with('success', 'You are logged in!');
    }
}
