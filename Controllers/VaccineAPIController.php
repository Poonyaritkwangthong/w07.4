<?php

namespace App\Http\Controllers;

use App\Models\Vaccine;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VaccineAPIController extends Controller
{
     /**
         * Display a listing of the resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function index()
        {
            $vaccines = DB::table('vaccine')
            ->select('vaccine.*')
            ->get();
            return $vaccines;
        }

        /**
         * Store a newly created resource in storage.
         *
         * @param  \Illuminate\Http\Request  $request
         * @return \Illuminate\Http\Response
         */
        public function store(Request $request)
        {
            return Vaccine::create($request->all());
        }

        /**
         * Display the specified resource.
         *
         * @param  int  $id
         * @return \Illuminate\Http\Response
         */
        public function show($id)
        {
            $vaccine = DB::table('vaccine')
            ->select('vaccine.*')
            ->where('vaccine.id','=',$id)
            ->get();
            return $vaccine;
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
            $vaccine = Vaccine::find($id);
            $vaccine->update($request->all());
            return  $vaccine;
        }

        /**
         * Remove the specified resource from storage.
         *
         * @param  int  $id
         * @return \Illuminate\Http\Response
         */
        public function destroy($id)
        {
            return Vaccine::destroy($id);
        }
        public function search($name)
        {
            return Vaccine::where('vaccine_name','like','%'.$name.'%')->get();
        }
}
