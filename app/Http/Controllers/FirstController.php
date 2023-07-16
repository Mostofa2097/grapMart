<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class FirstController extends Controller
{
    public function index(){
        return view('contact');
    }

    public function about()
    {
        return view('about');
    }
    
    public function store(Request $request)
    {
        dd($request->all());
    }
}

