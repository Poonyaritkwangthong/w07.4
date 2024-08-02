<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('student')->insert([
            [
                'sid' => 1,
                'fname' => 'John',
                'lname' => 'Doe',
                'std_prg_id' => 1,
            ],
            [
                'sid' => 2,
                'fname' => 'Jane',
                'lname' => 'Smith',
                'std_prg_id' => 2,
            ],
            [
                'sid' => 3,
                'fname' => 'Peter',
                'lname' => 'Jones',
                'std_prg_id' => 3,
            ],
            [
                'sid' => 4,
                'fname' => 'Mary',
                'lname' => 'Brown',
                'std_prg_id' => 4,
            ],
            [
                'sid' => 5,
                'fname' => 'David',
                'lname' => 'Williams',
                'std_prg_id' => 5,
            ],
            [
                'sid' => 6,
                'fname' => 'Sarah',
                'lname' => 'Taylor',
                'std_prg_id' => 1,
            ],
            [
                'sid' => 7,
                'fname' => 'Michael',
                'lname' => 'Thompson',
                'std_prg_id' => 2,
            ],
            [
                'sid' => 8,
                'fname' => 'Jessica',
                'lname' => 'Miller',
                'std_prg_id' => 3,
            ],
            [
                'sid' => 9,
                'fname' => 'Robert',
                'lname' => 'Lee',
                'std_prg_id' => 4,
            ],
            [
                'sid' => 10,
                'fname' => 'Jennifer',
                'lname' => 'Walker',
                'std_prg_id' => 5,
            ],
        ]);
    }
}
