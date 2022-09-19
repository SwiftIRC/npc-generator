<?php

namespace App\Models;

use App\Models\Attribute;
use Illuminate\Database\Eloquent\Model;

class Name extends Model
{
    protected $fillable = [
        'name',
    ];

    public function attributes()
    {
        return $this->belongsToMany(Attribute::class);
    }
}
