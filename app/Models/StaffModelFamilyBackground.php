<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StaffModelFamilyBackground extends Model
{
    protected $table = 'tbl_unifast_staff_family_background';

    protected $fillable = [
        'staff_id',
        'spouse_name',
        'spouse_occupation',
        'spouse_employer_or_business',
        'spouse_employer_or_business_address',
        'spouse_contact_number',
        'fathers_name',
        'mothers_maiden_name',
        'created_at',
        'updated_at'
    ];

    protected $primaryKey = 'staff_id';
    
    use HasFactory;
}
