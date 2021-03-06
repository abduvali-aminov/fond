<?php

namespace App\Repository;

use App\Models\Apply;

class AppliesRepository implements \App\Interface\RepositoryInterface
{
    /**
     * @inheritdoc
     */
    public function getAll()
    {
        $items = Apply::all();

        return $items;
    }

    /**
     * @inheritdoc
     */
    public function findByAttribute($attribute, $value, $type = '=')
    {
        $item = Apply::where($attribute, $type, $value)->get();

        return $item;
    }

    public function findById($id)
    {
        
    }
}
