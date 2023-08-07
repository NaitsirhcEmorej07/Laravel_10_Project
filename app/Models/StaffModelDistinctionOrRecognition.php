<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StaffModelDistinctionOrRecognition extends Model
{
    protected $table = 'tbl_unifast_staff_oi_distinction_or_recognition';

    protected $fillable = [
        'staff_id',
        'distinction_or_recognition',
        'created_at',
        'updated_at'
    ];

    protected $primaryKey = 'staff_id';
    use HasFactory;
}
