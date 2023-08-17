<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\StaffModel;

class StaffMainInformationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        StaffModel::create([
            'id_no' => '16-759',
            'unifast_office' => 'UniFAST SECRETARIAT',
            'prefix' => '',
            'first_name' => 'CHRISTIAN JEROME',
            'last_name' => 'ESPENA',
            'middle_name' => 'MARFE',
            'suffix' => '',
            'title' => '',
            'designation' => 'PROJECT TECHNICAL STAFF I',
            'designation_abbreviation' => 'PTS I',
            'employment_type' => 'CONTRACTUAL',
            'unit' => 'INFORMATION AND COMMUNICATION UNIT',
            'status' => 'ACTIVE',

            
            'email_address' => 'naitsirhcemorej@gmail.com',
             // 'email_verified_at' => null, // Option 1: Omit the key or assign null directly
            'password' => 'ADMIN123',
            'remember_token' => '',

            'staff_id' => '1',
            'date_of_birth' => '1996-03-30',
            'place_of_birth' => 'Manila',
            'gender' => 'Male',
            'civil_status' => 'Married',
            'height' => "5'7",
            'weight' => '72',
            'blood_type' => 'N/A',
            'gsis_no' => 'N/A',
            'pagibig_no' => 'N/A',
            'philhealth_no' => '03-026163828-9',
            'sss_no' => '34-4815953-6',
            'tin_no' => '340-596-674',
            'citizenship' => 'Filipino',
            'residential_address' => '690 Dhalia St. Purok II Malaria Caloocan City',
            'permanent_address' => '690 Dhalia St. Purok II Malaria Caloocan City',
            'telephone_no' => '3635255',
            'mobile_no' => '09123112535',
        ]);
    }
}
