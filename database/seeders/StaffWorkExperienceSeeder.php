<?php

namespace Database\Seeders;

use App\Models\StaffModelWorkExperience;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StaffWorkExperienceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        StaffModelWorkExperience::create([
            'staff_id' => '1',
            'from' => '2017',
            'to' => '2020',
            'position_title' => 'ICT Instructor',
            'company_or_agency' => 'Bestlink College of the Philippines',
            'monthly_salary' => '13,500',
            'status_of_appointment' => 'Contractual',
            'is_government_service' => 'No',
        ]);

        StaffModelWorkExperience::create([
            'staff_id' => '1',
            'from' => '2020',
            'to' => 'As of Now',
            'position_title' => 'Project Technical Staff I',
            'company_or_agency' => 'Commission on Higher Education - UniFASTs',
            'monthly_salary' => '34,992',
            'status_of_appointment' => 'Contractual',
            'is_government_service' => 'Yes',
        ]);
    }
}
