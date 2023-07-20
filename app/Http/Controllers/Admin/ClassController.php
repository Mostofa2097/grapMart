<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ClassController extends Controller
{
   //__construct
   public function __construct()
   {
      $this->middleware('auth');
   }


   public function index()
   {
      $class = DB::table('classes')->get();
      return view('admin.classes.index', compact('class'));
   }

   //__create_class
   public function create()
   {
      return view('admin.classes.create');
   }

   //__store_class
   public function store(Request $request)
   {
      $validated = $request->validate([
         'class_name' => 'required|unique:classes',
      ]);

      $data = array(
         'class_name' => $request->class_name,
      );

      DB::table('classes')->insert($data);
      return redirect('/class');
   }

   //__delete_class
   public function delete($id)
   {
      DB::table('classes')->where('id', $id)->delete();
      return redirect('/class');
   }

   //__edit_class
   public function edit($id)
   {
      $data = DB::table('classes')->where('id', $id)->first();
      return view('admin.classes.edit', compact('data'));
   }


   //__update_class
   public function update(Request $request, $id)
   {
      $validated = $request->validate([
         'class_name' => 'required',
      ]);

      $data = array(
         'class_name' => $request->class_name,
      );
      DB::table('classes')->where('id', $id)->update($data);
      return redirect('/class');
   }
}
