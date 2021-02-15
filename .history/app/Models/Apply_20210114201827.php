<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Apply extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function causes()
    {
        $this->belongsTo(Cause::class);
    }

    public function summ_type()
    {
        $this
    }

}
