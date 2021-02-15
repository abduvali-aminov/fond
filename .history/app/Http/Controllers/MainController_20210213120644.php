<?php

namespace App\Http\Controllers;

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
        $cause = Cause::with('apply')->find($id);
        $cause_name = Cause::findOrFail($id);

        return view('front.cause.all_show', compact('cause', 'cause_name'));
    }
}
