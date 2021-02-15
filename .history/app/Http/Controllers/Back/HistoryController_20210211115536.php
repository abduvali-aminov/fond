<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Models\Apply;
use App\Service\HistoryService;
use Illuminate\Http\Request;

class HistoryController extends Controller
{

    public function index()
    {
        $history = Apply::where('status', '=', 5)->get();
        echo $history;
        // return $history;
    }

}
