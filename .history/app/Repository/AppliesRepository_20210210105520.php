<?php

namespace App\Repository;

use App\Models\Apply;
use Illuminate\Support\Facades\DB;

class AppliesRepository implements \App\Interfaces\RepositoryInterface
{
    /**
     * @inheritdoc
     */
    public function getAll()
    {
        $items = DB::table('applies')
        ->where('status', '=', 0);

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
