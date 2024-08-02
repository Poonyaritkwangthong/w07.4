<?php

namespace App\Http\Controllers;

use App\Models\Faculty;
use Illuminate\Http\Request;

class FacultyController extends Controller
{
   /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $facultys = Faculty::orderBy('id')->paginate(100);
        return view('faculty.index', ['facultys' => $facultys]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('faculty.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'faculty_th' => 'required',
            'faculty_en' => 'required',
        ]);
        Faculty::create($request->post());

        return redirect()->route('faculty.index')->with('success','faculty Type has been added');
    }

    /**
     * Display the specified resource.
     */
    public function show(Faculty $faculty)
    {
        return view('faculty.show',compact('faculty'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Faculty $faculty)
    {
        return view('faculty.edit',compact('faculty'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Faculty $faculty)
    {
        $request->validate([
            'faculty_th' => 'required',
            'faculty_en' => 'required',
        ]);
        $faculty->fill($request->post())->save();

        return redirect()->route('faculty.index')->with('success','faculty has been updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Faculty $faculty)
    {
        $faculty->delete();
        return redirect()->route('faculty.index')->with('success','faculty has been deleted');
    }
}
