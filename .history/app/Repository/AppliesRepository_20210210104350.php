<?php

namespace App\Repository;

use App\Models\Apply;

class AppliesRepository implements \App\Interfaces\RepositoryInterface
{
    /**
     * @inheritdoc
     */
    public function getAll()
    {
        $items = Apply::latest()->where(['status',1])->get();

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

    /**
     * @inheritdoc
     */
    public function findById($id)
    {
        return Apply::find($id);
    }
}
