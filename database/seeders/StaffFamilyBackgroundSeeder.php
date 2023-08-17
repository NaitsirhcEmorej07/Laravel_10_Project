<?php

namespace Database\Seeders;

use App\Models\StaffModelFamilyBackground;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StaffFamilyBackgroundSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        StaffModelFamilyBackground::create([
            'staff_id' => '1',
            'spouse_name' => 'Myra Lorica',
            'spouse_occupation' => 'Freelancer',
            'spouse_employer_or_business' => 'N/A',
            'spouse_employer_or_business_address' => 'N/A',
            'spouse_contact_number' => '09915952331',
            'fathers_name' => 'Norberto Fulay Espena',
            'mothers_maiden_name' => 'Teresa Jaictin Marfe'
        ]);
    }
}
