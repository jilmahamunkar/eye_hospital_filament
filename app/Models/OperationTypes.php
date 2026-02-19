<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class OperationTypes extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'type_en',
        'type_gu',
        'price',
        'is_active',
    ];

    protected $casts = [
        'price' => 'decimal:2',
        'is_active' => 'integer',
    ];

    public $timestamps = true;

    public $softDeletes = true;

    public $connection = 'mysql';
}
