<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WeddingController extends Controller
{
    public function index()
    {
        $wedding = DB::table('causes')
        ->join('applies', 'causes.id', '=', 'applies.cause_id')->get();

        return $wedding;
    }
}
