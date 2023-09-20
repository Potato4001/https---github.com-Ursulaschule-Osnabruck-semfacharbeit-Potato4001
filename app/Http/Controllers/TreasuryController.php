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
}
