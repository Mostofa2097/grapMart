<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    //__construct
   public function __construct(){
    $this->middleware('auth');
   }

   public function index()
   {
      $students = DB::table('students')->get();
      return view('admin.students.index',compact('students'));
   }
}
