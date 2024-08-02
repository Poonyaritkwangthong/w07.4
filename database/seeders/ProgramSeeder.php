<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProgramSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('program')->insert([
            [
                'program_th' => 'วิทยาการคอมพิวเตอร์',
                'program_en' => 'Computer Science',
                'grad_year' => 2024,
                'prg_fac_id' => 1,
            ],
            [
                'program_th' => 'วิศวกรรมเครื่องกล',
                'program_en' => 'Mechanical Engineering',
                'grad_year' => 2024,
                'prg_fac_id' => 2,
            ],
            [
                'program_th' => 'แพทยศาสตร์',
                'program_en' => 'Medicine',
                'grad_year' => 2025,
                'prg_fac_id' => 3,
            ],
            [
                'program_th' => 'พยาบาลศาสตร์',
                'program_en' => 'Nursing',
                'grad_year' => 2025,
                'prg_fac_id' => 3,
            ],
            [
                'program_th' => 'บริหารธุรกิจ',
                'program_en' => 'Business Administration',
                'grad_year' => 2024,
                'prg_fac_id' => 4,
            ],
            [
                'program_th' => 'นิติศาสตร์',
                'program_en' => 'Law',
                'grad_year' => 2024,
                'prg_fac_id' => 5,
            ],
            [
                'program_th' => 'ภาษาไทย',
                'program_en' => 'Thai Language',
                'grad_year' => 2024,
                'prg_fac_id' => 6,
            ],
            [
                'program_th' => 'ภาษาอังกฤษ',
                'program_en' => 'English',
                'grad_year' => 2024,
                'prg_fac_id' => 6,
            ],
            [
                'program_th' => 'การศึกษา',
                'program_en' => 'Education',
                'grad_year' => 2024,
                'prg_fac_id' => 7,
            ],
            [
                'program_th' => 'เกษตรศาสตร์',
                'program_en' => 'Agriculture',
                'grad_year' => 2024,
                'prg_fac_id' => 8,
            ],
        ]);
    }
}
