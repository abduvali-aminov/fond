<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WeddingController extends Controller
{
    public function index()
    {
        $id = 3;

        $wedding = DB::table('causes')
        ->join('applies', 'causes.id', '=', 'applies.cause_id')
        ->where('causes.id', '=', $id)
        ->first();

        var_dump($wedding);
    }
}
