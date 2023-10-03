<?php

namespace App\Http\Controllers;

use App\Models\Treasury;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TreasuryController extends Controller
{
    public function index()
    {
        $treasuries = Treasury::where('team_id', Auth::user()->team_id)->paginate(50);
        return view('treasury.index', compact(['treasuries']));
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
        ]);

        $treasury = Treasury::create($attributes);
        $treasury->team_id = auth()->user()->team_id;
        $treasury->save();

        return redirect('/team/'. auth()->user()->team_id .'/treasury')->with('success', 'Entry created!');
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

        return redirect('/team/'. auth()->user()->team_id .'/treasury')->with('success', 'Entry Updated!');
    }

    public function destroy(Treasury $treasury)
    {
        $treasury->delete();

        return back()->with('success', 'Entry Deleted!');
    }
}
