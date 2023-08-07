<?php

namespace Database\Seeders;

use App\Models\StaffModelAssociationOrOrganization;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StaffAssociationOrOrganizationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        StaffModelAssociationOrOrganization::create([
            'staff_id' => '1',
            'association_or_organization' => 'N/A'
        ]);
    }
}
