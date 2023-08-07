<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StaffModelTPAttended extends Model
{
    protected $table = 'tbl_unifast_staff_tap_attended';

    protected $fillable = [
        'staff_id',
        'training_or_program_title',
        'from',
        'to',
        'no_of_hours',
        'type',
        'conducted_or_sponseored_by',
        'created_at',
        'updated_at'
    ];

    protected $primaryKey = 'staff_id';
    
    use HasFactory;
}
