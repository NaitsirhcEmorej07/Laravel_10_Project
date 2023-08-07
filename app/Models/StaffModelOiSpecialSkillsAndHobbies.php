<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StaffModelOiSpecialSkillsAndHobbies extends Model
{

    protected $table = 'tbl_unifast_staff_oi_special_skills_and_hobbies';

    protected $fillable = [
        'staff_id',
        'special_skills_and_hobbies',
        'created_at',
        'updated_at'
    ];

    protected $primaryKey = 'staff_id';
    use HasFactory;
}
