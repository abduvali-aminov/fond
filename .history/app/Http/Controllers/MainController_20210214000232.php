<?php

namespace App\Http\Controllers;

use App\Models\Apply;
use App\Models\Cause;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        $causes = Cause::all();
        return view('main.index', compact('causes'));
    }

    public function show($id)
    {
        $cause = Apply::where('cause_id', '=', $id)
            ->where('status', '>', 0)->where('status','<', 5)->get();
        $cause_name = Cause::findOrFail($id);


        return view('front.cause.all_show', compact('cause', 'cause_name'));
    }
}
