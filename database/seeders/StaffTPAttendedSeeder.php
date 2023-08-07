<?php

namespace Database\Seeders;

use App\Models\StaffModelTPAttended;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StaffTPAttendedSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        StaffModelTPAttended::create([
            'staff_id' => '1',
            'training_or_program_title' => 'PROGRAMMING FOR INTERMEDIATE USERS USING PHYTON',
            'from' => '2022',
            'to' => '2022	',
            'no_of_hours' => '4 HOURS',
            'type' => 'TECHNICAL',
            'conducted_or_sponseored_by' => 'DEPARTMENT OF INFORMATION AND COMMUNICATIONS TECHNOLOGY',
        ]);

        StaffModelTPAttended::create([
            'staff_id' => '1',
            'training_or_program_title' => 'PROGRAMMING FOR BEGINNERS USING PYTHON',
            'from' => '2022',
            'to' => '2022	',
            'no_of_hours' => '4 HOURS',
            'type' => 'TECHNICAL',
            'conducted_or_sponseored_by' => 'DEPARTMENT OF INFORMATION AND COMMUNICATIONS TECHNOLOGY',
        ]);

        StaffModelTPAttended::create([
            'staff_id' => '1',
            'training_or_program_title' => 'USING HTML AND CSS TO DESIGN A WEBSITEN',
            'from' => '2022',
            'to' => '2022	',
            'no_of_hours' => 'CERTIFICATE',
            'type' => 'TECHNICAL',
            'conducted_or_sponseored_by' => 'DEPARTMENT OF INFORMATION AND COMMUNICATIONS TECHNOLOGY',
        ]);

        StaffModelTPAttended::create([
            'staff_id' => '1',
            'training_or_program_title' => 'PRINCIPLES OF WEB',
            'from' => '2022',
            'to' => '2022	',
            'no_of_hours' => 'CERTIFICATE',
            'type' => 'TECHNICAL',
            'conducted_or_sponseored_by' => 'DEPARTMENT OF INFORMATION AND COMMUNICATIONS TECHNOLOGY',
        ]);
    }
}
