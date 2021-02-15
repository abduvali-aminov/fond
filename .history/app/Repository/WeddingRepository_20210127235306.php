<?php

namespace App\Repository;

use App\Models\Apply;
use Illuminate\Support\Facades\DB;

class WeddingRepository implements \App\Interfaces\RepositoryInterface
{
    public function getAll()
    {
        $wedding = DB::table('causes')
            ->join('applies', '1', '=', 'applies.cause_id')->get();


        return $wedding;
    }
}

