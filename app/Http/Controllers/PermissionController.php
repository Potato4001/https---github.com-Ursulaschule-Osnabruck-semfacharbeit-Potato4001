<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PermissionController extends Controller
{
    public function index()
    {
        $users = User::where('team_id', Auth::user()->team_id)->paginate(20);
        return view('permission.index', compact(['users']));
    }

    public function update(User $user)
    {
        $attributes = request()->validate([
            'role_id' => $user->can('give permission') ? [''] : ['required'],
            'role_id2' => ['required']
        ]);

        $role2 = request()->role_id2;

        if($user->can('give permission'))
        {
            $user->assignRole($role2);
        }else{
            $user->syncRoles($attributes);
        }
        $user->save();

        return redirect('/team/'. auth()->user()->team_id.'/permissions');
        
    }
}
