<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Program;
use Illuminate\Http\Request;

class StudentController extends Controller
{
   /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = Student::orderBy('id')->paginate(100);
        return view('student.index', ['students' => $students]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $programs = Program::all();
        return view('student.create',compact('programs'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'sid' => 'required',
            'fname' => 'required',
            'lname' => 'required',
            'std_prg_id' => 'required',
        ]);
        Student::create($request->post());

        return redirect()->route('student.index')->with('success','student Type has been added');
    }

    /**
     * Display the specified resource.
     */
    public function show(Student $student)
    {
        return view('student.show',compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Student $student)
    {
        $programs = Program::all();
        return view('student.edit',compact('student','programs'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Student $student)
    {
        $request->validate([
           'sid' => 'required',
            'fname' => 'required',
            'lname' => 'required',
            'std_prg_id' => 'required',
        ]);
        $student->fill($request->post())->save();

        return redirect()->route('student.index')->with('success','student has been updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student)
    {
        $student->delete();
        return redirect()->route('student.index')->with('success','student has been deleted');
    }
}
