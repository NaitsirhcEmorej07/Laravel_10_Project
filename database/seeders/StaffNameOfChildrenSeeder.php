<?php

namespace Database\Seeders;

use App\Models\StaffModelNameOfChildren;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StaffNameOfChildrenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        StaffModelNameOfChildren::create([
            'staff_id' => '1',
            'full_name' => 'Moriah Quinn L. Espena',
            'date_of_birth' => '2022-04-15'
        ]);

        StaffModelNameOfChildren::create([
            'staff_id' => '1',
            'full_name' => 'Eren Musk L. Espena',
            'date_of_birth' => '2025-05-19'
        ]);
    }
}
