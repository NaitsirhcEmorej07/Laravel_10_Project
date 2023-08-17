<?php

namespace Database\Seeders;

use App\Models\StaffModelOiSpecialSkillsAndHobbies;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StaffSpecialSkillsAndHobbiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        StaffModelOiSpecialSkillsAndHobbies::create([
            'staff_id' => '1',
            'special_skills_and_hobbies' => 'Teaching',
        ]);

        StaffModelOiSpecialSkillsAndHobbies::create([
            'staff_id' => '1',
            'special_skills_and_hobbies' => 'SYSTEM DEVELOPMENT AND DESIGN',
        ]);

        StaffModelOiSpecialSkillsAndHobbies::create([
            'staff_id' => '1',
            'special_skills_and_hobbies' => 'DATABASE MANAGEMENT SYSTEM',
        ]);

        StaffModelOiSpecialSkillsAndHobbies::create([
            'staff_id' => '1',
            'special_skills_and_hobbies' => 'COMPUTGER TROUBLESHOOTING',
        ]);
    }
}
