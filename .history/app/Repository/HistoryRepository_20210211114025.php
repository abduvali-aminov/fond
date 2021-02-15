<?php

namespace App\Repository;

class HistoryRepository implements \App\Interfaces\RepositoryInterface
{
     /**
     * @inheritdoc
     */
    public function getAll()
    {
        $items = Apply::where('status', '>', 0)->latest()->get();

        return $items;
    }

}
