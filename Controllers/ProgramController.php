<?php

namespace App\Http\Controllers;

use App\Models\Program;
use App\Models\Faculty;
use Illuminate\Http\Request;

class ProgramController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $programs = Program::orderBy('id')->paginate(100);
        return view('program.index', ['programs' => $programs]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $facultys = Faculty::all();
        return view('program.create',compact('facultys'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'program_th' => 'required',
            'program_en' => 'required',
            'grad_year' => 'required',
            'prg_fac_id' => 'required',
        ]);
        Program::create($request->post());

        return redirect()->route('program.index')->with('success','program Type has been added');
    }

    /**
     * Display the specified resource.
     */
    public function show(Program $program)
    {
        return view('program.show',compact('program'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Program $program)
    {
        $facultys = Faculty::all();
        return view('program.edit',compact('program','facultys'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Program $program)
    {
        $request->validate([
            'program_th' => 'required',
            'program_en' => 'required',
            'grad_year' => 'required',
            'prg_fac_id' => 'required',
        ]);
        $program->fill($request->post())->save();

        return redirect()->route('program.index')->with('success','program has been updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Program $program)
    {
        $program->delete();
        return redirect()->route('program.index')->with('success','program has been deleted');
    }
}
