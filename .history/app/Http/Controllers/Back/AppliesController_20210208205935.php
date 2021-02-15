<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Models\Apply;
use App\Models\Cause;
use App\Models\SummType;
use Illuminate\Http\Request;
use TCG\Voyager\Facades\Voyager;

class AppliesController extends Controller
{
    public function index()
    {
        $applies = Apply::latest()->get();
        $cause = Cause::all();
        $summ_type = SummType::all();

        return view('back.apply.index', compact('applies', 'cause', 'summ_type'));
    }

    public function show($id)
    {
        $apply = Apply::findOrfail($id);

        return view('back.apply.show')
    }

}
