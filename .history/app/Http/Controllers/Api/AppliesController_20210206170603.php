<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\ApplyRequest;
use App\Models\Apply;
use App\Models\SummType;
use Illuminate\Http\Request;

class AppliesController extends Controller
{
    public function index()
    {
        $summ_type = $request->get('summ_type');
        $cause = $request->get('causes');
        $apply = Apply::all();

        return [
            $summ_type, $cause, $apply
        ];
    }

    public function store(ApplyRequest $request)
    {
        return $request->all();
    }
}
