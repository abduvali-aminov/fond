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
        $summ_type = Su
        return view('back.apply.index', compact('applies'));
    }
}
