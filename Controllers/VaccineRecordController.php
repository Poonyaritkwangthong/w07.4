<?php

namespace App\Http\Controllers;
use App\Models\VaccineRecord;
use App\Models\Student;
use App\Models\Vaccine;


use Illuminate\Http\Request;

class VaccineRecordController extends Controller
{
    /**
    * Display a listing of the resource.
    */
   public function index()
   {
       $vaccine_records = VaccineRecord::orderBy('id')->paginate(100);
       return view('vaccine_record.index',compact('vaccine_records'));
   }

   /**
    * Show the form for creating a new resource.
    */
   public function create()
   {
    $students = Student::all();
    $vaccines = Vaccine::all();
       return view('vaccine_record.create',compact('students','vaccines'));
   }

   /**
    * Store a newly created resource in storage.
    */
   public function store(Request $request)
   {
       $request->validate([
           'std_id' => 'required',
           'vac_id' => 'required',
           'vaccinated_date' => 'required',
       ]);
       VaccineRecord::create($request->post());

       return redirect()->route('vaccine_record.index')->with('success','vaccine record Type has been added');
   }

   /**
    * Display the specified resource.
    */
   public function show(VaccineRecord $vaccine_record)
   {
       return view('vaccine_record.show',compact('vaccine_record'));
   }

   /**
    * Show the form for editing the specified resource.
    */
   public function edit(VaccineRecord $vaccine_record)
   {
       $students = Student::all();
       $vaccines = Vaccine::all();
       return view('vaccine_record.edit',compact('vaccine_record','students','vaccines'));
   }

   /**
    * Update the specified resource in storage.
    */
   public function update(Request $request, VaccineRecord $vaccine_record)
   {
       $request->validate([
        'std_id' => 'required',
        'vac_id' => 'required',
        'vaccinated_date' => 'required',
       ]);
       $vaccine_record->fill($request->post())->save();

       return redirect()->route('vaccine_record.index')->with('success','vaccine record has been updated');
   }

   /**
    * Remove the specified resource from storage.
    */
   public function destroy(VaccineRecord $vaccine_record)
   {
       $vaccine_record->delete();
       return redirect()->route('vaccine_record.index')->with('success','vaccine record has been deleted');
   }
}


