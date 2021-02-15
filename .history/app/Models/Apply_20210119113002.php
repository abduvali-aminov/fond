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
        return  $this->belongsTo('App\/**
         * Scope a query to only include 
         *
         * @param  \Illuminate\Database\Eloquent\Builder $query
         * @return \Illuminate\Database\Eloquent\Builder
         */
        public function scope($query)
        {
            return $query->where('');
        }', 'cause_id');
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
