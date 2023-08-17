<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StaffModelEducationalBackground extends Model
{
    protected $table = 'tbl_unifast_staff_educational_background';

    protected $fillable = [
        'staff_id',
        'level',
        'school_name',
        'degree_or_course',
        'highest_level_or_units_earned',
        'year_graduated',
        'scholarship_or_academic_honors',
        'created_at',
        'updated_at'
    ];

    protected $primaryKey = 'staff_id';
    
    use HasFactory;
}
