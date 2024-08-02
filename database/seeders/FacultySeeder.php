<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FacultySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('faculty')->insert([
            [
                'faculty_th' => 'วิทยาศาสตร์',
                'faculty_en' => 'Science',
            ],
            [
                'faculty_th' => 'วิศวกรรมศาสตร์',
                'faculty_en' => 'Engineering',
            ],
            [
                'faculty_th' => 'แพทยศาสตร์',
                'faculty_en' => 'Medicine',
            ],
            [
                'faculty_th' => 'พยาบาลศาสตร์',
                'faculty_en' => 'Nursing',
            ],
            [
                'faculty_th' => 'บริหารธุรกิจ',
                'faculty_en' => 'Business Administration',
            ],
            [
                'faculty_th' => 'นิติศาสตร์',
                'faculty_en' => 'Law',
            ],
            [
                'faculty_th' => 'ศิลปศาสตร์และวิทยาศาสตร์มนุษย์',
                'faculty_en' => 'Arts and Humanities',
            ],
            [
                'faculty_th' => 'ศึกษาศาสตร์',
                'faculty_en' => 'Education',
            ],
            [
                'faculty_th' => 'เกษตรศาสตร์',
                'faculty_en' => 'Agriculture',
            ],
            [
                'faculty_th' => 'สถาปัตยกรรมศาสตร์',
                'faculty_en' => 'Architecture',
            ],
        ]);
    }
}
