<?php

namespace App\Http\Controllers;

use App\Models\VaccineRecord;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VaccineRecordAPIController extends Controller
{
         /**
         * Display a listing of the resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function index()
        {
            $vaccine_records = DB::table('vaccine_record')
            ->join('student','vaccine_record.std_id', '=', 'student.id')
            ->join('vaccine','vaccine_record.vac_id','=','vaccine.id')
            ->select('vaccine_record.*','vaccine.vaccine_name')
            ->get();
            return $vaccine_records;
        }

        /**
         * Store a newly created resource in storage.
         *
         * @param  \Illuminate\Http\Request  $request
         * @return \Illuminate\Http\Response
         */
        public function store(Request $request)
        {
            return VaccineRecord::create($request->all());
        }

        /**
         * Display the specified resource.
         *
         * @param  int  $id
         * @return \Illuminate\Http\Response
         */
        public function show($id)
        {
            $vaccine_recored = DB::table('vaccine_record')
            ->join('student','vaccine_record.std_id', '=', 'student.id')
            ->join('vaccine','vaccine_record.vac_id','=','vaccine.id')
            ->select('vaccine_record.*','vaccine.vaccine_name')
            ->where('vaccine_record.id','=',$id)
            ->get();
            return $vaccine_recored;
        }

        /**
         * Update the specified resource in storage.
         *
         * @param  \Illuminate\Http\Request  $request
         * @param  int  $id
         * @return \Illuminate\Http\Response
         */
        public function update(Request $request, $id)
        {
            $vaccine_recored = VaccineRecord::find($id);
            $vaccine_recored->update($request->all());
            return $vaccine_recored;
        }

        /**
         * Remove the specified resource from storage.
         *
         * @param  int  $id
         * @return \Illuminate\Http\Response
         */
        public function destroy($id)
        {
            return VaccineRecord::destroy($id);
        }
        public function search($name)
        {
            return VaccineRecord::where('id','like','%'.$name.'%')->get();
        }
}
