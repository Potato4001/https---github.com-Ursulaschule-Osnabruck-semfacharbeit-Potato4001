<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class RegisterController extends Controller
{
    public function create(Request $request)
    {
        return view('register.create', [
            'team_id' => $request->route('team_id')
        ]);
    }

    public function store(Request $request)
    {
        // create the user
        $attributes = request()->validate([
            'name' => ['required', 'max:255', Rule::unique('users', 'name')],
            'email' => ['required', 'email', 'max:255', Rule::unique('users', 'email')],
            'password' => 'required|min:7|max:255' //password => ['required', 'min:7', 'max:255']
        ]);

        $user = User::create($attributes);
        $user->assignRole('player');

        $user->team_id = $request->route('team_id');
        $user->save();

        auth()->login($user);

        return redirect('/team/'. $user->team_id)->with('success', 'Your account has been created.');
    }
}