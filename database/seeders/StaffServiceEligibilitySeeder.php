<?php

namespace Database\Seeders;

use App\Models\StaffModelServiceEligibility;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StaffServiceEligibilitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        StaffModelServiceEligibility::create([
            'staff_id' => '1',
            'eligibility' => 'Licensure Examination for Teachers',
            'rating' => '76.6',
            'date_of_examination' => 'September 2019',
            'place_of_examination' => 'Letran College',
            'license_no' => '1854837',
            'date_of_validity' => 'March 30, 2023',
        ]);
    }
}
