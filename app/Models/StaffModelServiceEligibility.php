<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StaffModelServiceEligibility extends Model
{
    protected $table = 'tbl_unifast_staff_service_eligibility';

    protected $fillable = [
        'staff_id',
        'eligibility',
        'rating',
        'date_of_examination',
        'place_of_examination',
        'license_no',
        'date_of_validity',
        'created_at',
        'updated_at'
    ];

    protected $primaryKey = 'staff_id';
    
    use HasFactory;
}
