<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Apply extends Model
{
    use HasFactory;

    protected $guarded = [];

    /**
     * Relationship
     *
     * @return void
     */
    public function causes()
    {
        return  $this->belongsTo(Cause::class);
    }

    /**
     * Relationship
     *
     * @return void
     */
    public function summ_type()
    {
        return $this->belongsTo(SummType::class);
    }

}
