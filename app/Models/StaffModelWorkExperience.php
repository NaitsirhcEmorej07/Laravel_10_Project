<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StaffModelWorkExperience extends Model
{
    protected $table = 'tbl_unifast_staff_work_experience';

    protected $fillable = [
        'staff_id',
        'from',
        'to',
        'position_title',
        'company_or_agency',
        'monthly_salary',
        'status_of_appointment',
        'is_government_service',
        'created_at',
        'updated_at'
    ];

    protected $primaryKey = 'staff_id';

    use HasFactory;
}
