<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Models\Apply;
use App\Models\Cause;
use App\Service\HistoryService;
use Illuminate\Http\Request;

class HistoryController extends Controller
{

    public function index()
    {
        $history = Apply::where('status', '=', 5)->get();
        $cause = Cause::all();
        $summ_type = SummType::all();
        // echo $history;
        return view('back.apply.history', compact('history'));
    }

}
