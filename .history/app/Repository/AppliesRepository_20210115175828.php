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

    public function findByAttribute($attribute, $value, $type = '=')
    {
        $item
    }
}
