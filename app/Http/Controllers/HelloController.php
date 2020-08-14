<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

class HelloController extends Controller
{

    // use Illuminate\Support\Facades\DB;　を追加

    public function index(Request $request)
    {
        $items = DB::select('select * from people');
        return view('hello.index', ['items' => $items]);
    }

    public function post(Request $request)
    {
        return view('hello.index', ['msg'=>$request->msg]);
    }

}