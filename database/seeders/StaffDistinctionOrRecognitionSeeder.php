<?php

namespace Database\Seeders;


use App\Models\StaffModelDistinctionOrRecognition;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StaffDistinctionOrRecognitionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        StaffModelDistinctionOrRecognition::create([
            'staff_id' => '1',
            'distinction_or_recognition' => 'N/A'
        ]);
    }
}
