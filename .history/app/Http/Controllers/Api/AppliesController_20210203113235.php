<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Apply;
use App\Models\SummType;
use Illuminate\Http\Request;

class AppliesController extends Controller
{
    public function index(Request $request)
    {
        $summ_type = $request->get('summ_type');
        $cause = $request->get('causes');
        $apply = Apply::all();

        return [
            $summ_type, $cause, app
        ];

    }
}
