<?php

namespace App\Repository;

use App\Models\Apply;

class AppliesRepository implements \App\Interface\RepositoryInterface
{
    /**
     * Undocumented function
     *
     * @return void
     */
    public function getAll()
    {
        $items = Apply::all();

        return $items;
    }

}
