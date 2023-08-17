<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StaffModelPersonalInformation extends Model
{
    protected $table = 'tbl_unifast_staff_personal_information';

    protected $fillable = [
        'staff_id',
        'date_of_birth',
        'place_of_birth',
        'gender',
        'civil_status',
        'height',
        'weight',
        'blood_type',
        'gsis_no',
        'pagibig_no',
        'philhealth_no',
        'sss_no',
        'tin_no',
        'citizenship',
        'residential_address',
        'permanent_address',
        'telephone_no',
        'mobile_no',
        'email_address_personal_information',
        'created_at',
        'updated_at'
    ];

    protected $primaryKey = 'staff_id';
    
    use HasFactory;
}
