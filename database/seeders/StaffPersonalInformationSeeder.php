<?php

namespace Database\Seeders;

use App\Models\StaffModelPersonalInformation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StaffPersonalInformation extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        StaffModelPersonalInformation::create([
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
            'email_address_personal_information' => 'naitsirhcemorej@gmail.com'
        ]);
    }
}
