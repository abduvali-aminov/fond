<?php

namespace App\Repository;

use App\Models\Apply;

class WeddingRepository implements \App\Interfaces\RepositoryInterface
{
    public function getAll()
    {
        $wedding = DB::table('ca')

        return $wedding;
    }
}

