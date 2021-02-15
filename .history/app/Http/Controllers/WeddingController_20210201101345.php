<?php

namespace App\Http\Controllers;

use App\Models\Apply;
use Illuminate\Support\Facades\DB;

class WeddingController extends Controller
{
    public function index()
    {
        $id = 1;

        $wedding = Apply::where('causes', 1)->count();


        return view('wedding.index', compact('wedding'));
        // var_dump($wedding);
    }
}
