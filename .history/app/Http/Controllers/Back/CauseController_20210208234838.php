<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Models\Cause;
use Illuminate\Http\Request;

class CauseController extends Controller
{
    public function index()
    {
        $causes = Cause::latest()->get();

        return view('back.cause.index', compact('causes'));
    }
    
}
