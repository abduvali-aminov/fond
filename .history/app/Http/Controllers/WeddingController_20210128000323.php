<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WeddingController extends Controller
{
    public function index()
    {
        $wedding = DB::table('causes')
        ->join('applies', '1', '=', 'applies.cause_id')->get();

        echo $wedding;
    }
}
