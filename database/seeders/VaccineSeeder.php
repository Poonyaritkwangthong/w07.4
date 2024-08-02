<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VaccineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('vaccine')->insert([
            [
                'vaccine_name' => 'Sinovac',
            ],
            [
                'vaccine_name' => 'AstraZeneca',
            ],
            [
                'vaccine_name' => 'Pfizer',
            ],
            [
                'vaccine_name' => 'Moderna',
            ],
            [
                'vaccine_name' => 'Johnson & Johnson',
            ],
            [
                'vaccine_name' => 'Sinopharm',
            ],
            [
                'vaccine_name' => 'Covaxin',
            ],
            [
                'vaccine_name' => 'Bharat Biotech',
            ],
            [
                'vaccine_name' => 'Sputnik V',
            ],
            [
                'vaccine_name' => 'CoronaVac',
            ],
        ]);
    }
}
