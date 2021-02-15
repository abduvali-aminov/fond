<?php

namespace App\Repository;

use App\Models\Apply;

class HistoryRepository implements \App\Interfaces\RepositoryInterface
{
     /**
     * @inheritdoc
     */
    public function getAll()
    {
        $items = Apply::where('status', '=', 0)->latest()->get();

        return $items;
    }

}
