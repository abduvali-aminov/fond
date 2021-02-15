<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Apply;
use App\Models\SummType;
use Illuminate\Http\Request;

class AppliesController extends Controller
{
    public function index()
    {

        $apply = Apply::all();
        $summ_type = SummType::
    }
}
