<?php

namespace App\Http\Controllers;

use App\Models\Program;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProgramAPIController extends Controller
{
     /**
         * Display a listing of the resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function index()
        {
            $programs = DB::table('program')
            ->join('faculty','program.prg_fac_id','=','faculty.id')
            ->select('program.*','faculty.faculty_th')
            ->get();
            return $programs;
        }

        /**
         * Store a newly created resource in storage.
         *
         * @param  \Illuminate\Http\Request  $request
         * @return \Illuminate\Http\Response
         */
        public function store(Request $request)
        {
            return Program::create($request->all());
        }

        /**
         * Display the specified resource.
         *
         * @param  int  $id
         * @return \Illuminate\Http\Response
         */
        public function show($id)
        {
            $program = DB::table('program')
            ->join('faculty','program.prg_fac_id','=','faculty.id')
            ->select('program.*','faculty.faculty_th')
            ->where('program.id','=',$id)
            ->get();
            return $program;
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
            $program = Program::find($id);
            $program->update($request->all());
            return $program;
        }

        /**
         * Remove the specified resource from storage.
         *
         * @param  int  $id
         * @return \Illuminate\Http\Response
         */
        public function destroy($id)
        {
            return Program::destroy($id);
        }
        public function search($name)
        {
            return Program::where('program_th','like','%'.$name.'%')->orWhere('program_en','like','%'.$name.'%')->get();
        }

}
