<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class GeneralSettings extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'key',
        'value',
    ];

    public $timestamps = true;

    public $softDeletes = true;
}
