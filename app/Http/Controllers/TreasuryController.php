<?php

namespace App\Http\Controllers;

use App\Models\Treasury;
use Illuminate\Http\Request;

class TreasuryController extends Controller
{
    public function index()
    {
        return view('treasury.index', [
            'treasuries' => Treasury::paginate(50)
        ]);
    }

    public function create()
    {
        return view('treasury.create');
    }

    public function store()
    {
        $attributes = request()->validate([
            'name' => ['required'],
            'betrag' => ['required'],
            //'team_id' => array_merge(request()->user()->team_id)
        ]);

        Treasury::create($attributes);

        return redirect('/team/{$user->team_id}/treasury')->with('success', 'Entry created!');
    }

    public function edit(Treasury $treasury)
    {
        return view('treasury.edit', ['treasury' => $treasury]);
    }

    public function update(Treasury $treasury)
    {
        $attributes = request()->validate([
            'name' => ['required'],
            'betrag' => ['required'],
            //'team_id' => array_merge(request()->user()->team_id)
        ]);

        $treasury->update($attributes);

        return redirect('/team/{{ $user->team_id }}/treasury')->with('success', 'Entry Updated!');
    }

    public function destroy(Treasury $treasury)
    {
        $treasury->delete();

        return back()->with('success', 'Entry Deleted!');
    }
}
