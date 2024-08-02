<?php

namespace App\Http\Controllers;

use App\Models\Vaccine;
use Illuminate\Http\Request;

class VaccineController extends Controller
{ /**
    * Display a listing of the resource.
    */
   public function index()
   {
       $vaccines = Vaccine::orderBy('id')->paginate(100);
       return view('vaccine.index', ['vaccines' => $vaccines]);
   }

   /**
    * Show the form for creating a new resource.
    */
   public function create()
   {
       return view('vaccine.create');
   }

   /**
    * Store a newly created resource in storage.
    */
   public function store(Request $request)
   {
       $request->validate([
           'vaccine_name' => 'required',
       ]);
       Vaccine::create($request->post());

       return redirect()->route('vaccine.index')->with('success','vaccine Type has been added');
   }

   /**
    * Display the specified resource.
    */
   public function show(Vaccine $vaccine)
   {
       return view('vaccine.show',compact('vaccine'));
   }

   /**
    * Show the form for editing the specified resource.
    */
   public function edit(Vaccine $vaccine)
   {
       return view('vaccine.edit',compact('vaccine'));
   }

   /**
    * Update the specified resource in storage.
    */
   public function update(Request $request, Vaccine $vaccine)
   {
       $request->validate([
        'vaccine_name' => 'required',
       ]);
       $vaccine->fill($request->post())->save();

       return redirect()->route('vaccine.index')->with('success','vaccine has been updated');
   }

   /**
    * Remove the specified resource from storage.
    */
   public function destroy(Vaccine $vaccine)
   {
       $vaccine->delete();
       return redirect()->route('vaccine.index')->with('success','vaccine has been deleted');
   }
}
