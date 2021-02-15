<?php

namespace App\Repository;

use App\Models\Apply;

class WeddingRepository implements \App\Interfaces\RepositoryInterface
{
    public function getAll()
    {
        $wedding = DB::table('causes')
            ->join('applies', 'causes.id', '=', 'applies.cause_id')


        return $wedding;
    }
}

