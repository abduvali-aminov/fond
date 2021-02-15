<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class WeddingController extends Controller
{
    public function index()
    {
        $id = 1;

        $wedding = DB::table('applies')


        return view('wedding.index', compact('wedding'));
        // var_dump($wedding);
    }
}
