<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StaffModel extends Model
{

    protected $table = 'tbl_unifast_staff_main_information';

    protected $fillable = [
        'staff_id',
        'unifast_office',
        'prefix',
        'first_name',
        'last_name',
        'middle_name',
        'suffix',
        'title',
        'designation',
        'abbreviation',
        'employment_type',
        'unit',
        'status',
        'created_at',
        'updated_at'
    ];

    protected $primaryKey = 'staff_id';

    use HasFactory;
}
