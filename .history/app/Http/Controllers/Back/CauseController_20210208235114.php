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
        $cause = DB::table('applies')
            ->join('applies', 'causes.id', '=', 'applies.cause_id')
            ->where('cause_id' = 1)->get();
    }
}
