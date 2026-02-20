<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PatientCase extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'patient_name',
        'gender',
        'age',
        'mobile_no',
        'address',
        'taluka',
        'district',
        'case_fees',
        'remark',
    ];

    protected $casts = [
        'age' => 'integer',
        'case_fees' => 'decimal:2',
    ];

    public $timestamps = true;

    public $softDeletes = true;
}
