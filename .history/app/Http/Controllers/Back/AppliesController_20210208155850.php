<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Models\Apply;
use Illuminate\Http\Request;
use TCG\Voyager\Facades\Voyager;

class AppliesController extends Controller
{
    public function index()
    {
        $apply = Apply::latest()->paginate(1)->get();
        

        return view('back.apply.index');
    }
}
