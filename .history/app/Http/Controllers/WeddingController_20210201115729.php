<?php

namespace App\Http\Controllers;

use App\Models\Apply;
use Illuminate\Support\Facades\DB;

class WeddingController extends Controller
{
    public function index()
    {
        $id = 1;

        $wedding = Apply::where('cause_id', 1)->get();


        // return view('wedding.index', compact('wedding'));
        var_dump($wedding);
    }
}
