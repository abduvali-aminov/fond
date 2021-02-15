<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Http\Requests\CauseRequest;
use App\Models\Cause;

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

    public function store(CauseRequest $request)
    {
        Cause::create([
            'name'=>$request->name
        ]);

        return redirect()->route('voyager.causes.index')->with('success', 'Cause created!');
    }

    public function edit($id)
    {
        $cause = Cause::findOrFail($id);

        return view('back.cause.edit', compact('cause'));
    }

    public function update(CauseRequest $request,$id)
    {
        $cause = Cause::findOrFail($id);
        $cause->update([
            'name'=>$request->name,
        ]);

        return redirect()->route('voyager.causes.index')->with('success', 'Cause updated!');
    }
}
