<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StaffModelNameOfChildren extends Model
{
    protected $table = 'tbl_unifast_staff_name_of_children';

    protected $fillable = [
        'staff_id',
        'full_name',
        'date_of_birth',
        'created_at',
        'updated_at'
    ];

    protected $primaryKey = 'staff_id';

    use HasFactory;
}
