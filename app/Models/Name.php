<?php

namespace App\Models;

use App\Models\Attribute;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class Name extends Model
{
    protected $fillable = [
        'name',
        'species',
        'gender',
    ];
}
