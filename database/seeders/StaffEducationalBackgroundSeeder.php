<?php

namespace Database\Seeders;

use App\Models\StaffModelEducationalBackground;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StaffEducationalBackgroundSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        StaffModelEducationalBackground::create([
            'staff_id' => '1',
            'level' => 'Primary',
            'school_name' => 'Grace Park Unit I Elementary School',
            'degree_or_course' => 'N/A',
            'highest_level_or_units_earned' => 'N/A',
            'year_graduated' => '2008',
            'scholarship_or_academic_honors' => 'N/A'
        ]);

        StaffModelEducationalBackground::create([
            'staff_id' => '1',
            'level' => 'Secondary',
            'school_name' => 'Manuel Luiz Quezon High School',
            'degree_or_course' => 'N/A',
            'highest_level_or_units_earned' => 'N/A',
            'year_graduated' => '2012',
            'scholarship_or_academic_honors' => 'N/A'
        ]);

        StaffModelEducationalBackground::create([
            'staff_id' => '1',
            'level' => 'Vocational',
            'school_name' => 'TESDA',
            'degree_or_course' => 'Computer Systems Servicing',
            'highest_level_or_units_earned' => 'N/A',
            'year_graduated' => '2020',
            'scholarship_or_academic_honors' => 'N/A'
        ]);

        StaffModelEducationalBackground::create([
            'staff_id' => '1',
            'level' => 'College',
            'school_name' => 'Bestlink College of the Philippines',
            'degree_or_course' => 'Bachelor of Science in Information Technology',
            'highest_level_or_units_earned' => 'N/A',
            'year_graduated' => '2017',
            'scholarship_or_academic_honors' => 'N/A'
        ]);
    }
}
