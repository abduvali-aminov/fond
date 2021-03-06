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
        $applies = Apply::where('status',1)->with('causes', 'summ_type')->get();

        return $applies;
    }

    public function store(Request $request)
    {
        $photo_1 = $request->file('photo_1');
        $photo_2 = $request->file('photo_2');

        $upload_1 = $photo_1->store('public/applies');
        $upload_2 = $photo_2->store('public/applies');
        $array_data = $request->all();
        $array_data['']

        $apply = Apply::create($request->all());

        return response()->json($apply, 201);
    }
}
