<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PatientOperation extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'patient_case_id',
        'operation_date',
        'patient_relative_name',
        'patient_relative_relation',
        'eye',
        'operation_type_id',
        'operation_fees',
        'welfare_fund',
        'total_fees',
        'operation_details',
        'surgeon_id',
        'status',
    ];

    protected $casts = [
        'operation_date' => 'date',
        'operation_fees' => 'decimal:2',
        'welfare_fund' => 'decimal:2',
        'total_fees' => 'decimal:2',
    ];

    public $timestamps = true;

    public $softDeletes = true;

    public function patientCase()
    {
        return $this->belongsTo(PatientCase::class);
    }

    public function operationType()
    {
        return $this->belongsTo(OperationTypes::class);
    }

    public function surgeon()
    {
        return $this->belongsTo(Surgeons::class);
    }
}
