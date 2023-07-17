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
        $validated = $request->validate([
            'name' => 'required|max:55',
            'email' => 'required|max:80',
            'password' => 'required|min:6|max:12',
        ]);
        dd($request->all());
    }
}

