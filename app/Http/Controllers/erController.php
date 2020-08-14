<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class erController extends Controller
{

    public function index(Request $request)
    {
        $tabata = $request->input('tabata');
        return view('er.shindan_input')->with('tabata', $tabata);
    }

    public function post(Request $request)
    {
        return view('er.shindan_result');
    }

}