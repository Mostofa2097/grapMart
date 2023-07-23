<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = DB::table('students')->get();
      return view('admin.students.index',compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $classes = DB::table('classes')->get();
        return view('Admin.students.create',compact('classes'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //  $request->validate([
        //     'class_id' => 'required',
        //     'name' => 'required',
        //     'phone' => 'required',
        //     'roll' => 'required',
        //  ]);
   
         $data = array(
            // 'class_id' => $request->class_id,
            'name' => $request->name,
            'roll' => $request->roll,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
         );
   
         DB::table('students')->insert($data);
         return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
      $students = DB::table('students')->where('id',$id)->first();
      return view('admin.students.edit',compact('students'));  
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = array(
            // 'class_id' => $request->class_id,
            'name' => $request->name,
            'roll' => $request->roll,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
         );
   
         DB::table('students')->where('id',$id)->update($data);
         return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
       DB::table('students')->where('id',$id)->delete();
       return redirect()->back();
    }
}
