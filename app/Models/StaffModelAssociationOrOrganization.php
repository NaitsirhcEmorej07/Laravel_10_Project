<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StaffModelAssociationOrOrganization extends Model
{
    protected $table = 'tbl_unifast_staff_oi_association_or_organization';

    protected $fillable = [
        'staff_id',
        'asscociation_or_organization',
        'created_at',
        'updated_at'
    ];

    protected $primaryKey = 'staff_id';

    use HasFactory;
}
