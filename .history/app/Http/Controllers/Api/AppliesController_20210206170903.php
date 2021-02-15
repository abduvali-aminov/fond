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
        $applies = Apply::where('status',1)->with('causes', 'summ_type')->get()
    }

    public function store(ApplyRequest $request)
    {

    }
}
