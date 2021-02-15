<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Models\Apply;
use App\Models\Cause;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CauseController extends Controller
{
    public function index()
    {
        $causes = Cause::latest()->get();

        return view('back.cause.index', compact('causes'));
    }

    public function show($id)
    {
        $cause = Cause::with('apply')->find($id);
        $cause_name = Cause::findOrFail($id);

        return view('back.cause.show', compact('cause', 'cause_name'));
    }

    public function create()
    {
        return view('back.cause.create');
    }

    public function store(Request $request)
    {
        
    }

}
