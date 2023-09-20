<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TreasuryController extends Controller
{
    public function index()
    {
        return view('treasury.index');
    }
}
