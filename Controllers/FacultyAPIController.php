<?php

namespace App\Http\Controllers;

use App\Models\Faculty;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FacultyAPIController extends Controller
{
       /**
         * Display a listing of the resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function index()
        {
            $facultys = DB::table('faculty')
            ->select('faculty.*')
            ->get();
            return $facultys;
        }

        /**
         * Store a newly created resource in storage.
         *
         * @param  \Illuminate\Http\Request  $request
         * @return \Illuminate\Http\Response
         */
        public function store(Request $request)
        {
            return Faculty::create($request->all());
        }

        /**
         * Display the specified resource.
         *
         * @param  int  $id
         * @return \Illuminate\Http\Response
         */
        public function show($id)
        {
            $faculty = DB::table('faculty')
            ->select('faculty.*')
            ->where('faculty.id','=',$id)
            ->get();
            return $faculty;
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
            $faculty = Faculty::find($id);
            $faculty->update($request->all());
            return  $faculty;
        }

        /**
         * Remove the specified resource from storage.
         *
         * @param  int  $id
         * @return \Illuminate\Http\Response
         */
        public function destroy($id)
        {
            return Faculty::destroy($id);
        }
        public function search($name)
        {
            return Faculty::where('faculty_th','like','%'.$name.'%')->orWhere('faculty_en','like','%'.$name.'%')->get();
        }
}
