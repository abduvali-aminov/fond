<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Models\Apply;
use App\Models\Cause;
use Illuminate\Http\Request;
use TCG\Voyager\Facades\Voyager;

class AppliesController extends Controller
{
    public function index()
    {
        $applies = Apply::latest()->get();
        $cause = Cause::all();
        $summ_type = S
        return view('back.apply.index', compact('applies'));
    }
}
