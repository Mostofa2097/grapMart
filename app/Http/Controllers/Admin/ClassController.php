<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ClassController extends Controller
{
      //__construct
   public function __construct(){
    $this->middleware('auth');
   }

   
   public function index()
   {
      $class = DB::table('classes')->get();
      return view('admin.classes.index',compact('class'));
   }
}
