<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cause extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function apply()
    {
        return $this->hasMany(Apply::class);
    }
}
