<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Apply;
use Illuminate\Http\Request;

class AppliesController extends Controller
{
    public function index()
    {
        $apply = Apply::all();
    }
}
