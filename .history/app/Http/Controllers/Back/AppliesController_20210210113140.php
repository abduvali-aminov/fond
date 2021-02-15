<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Models\Apply;
use App\Models\Cause;
use App\Models\SummType;
use App\Service\AppliesService;
use Illuminate\Http\Request;
use TCG\Voyager\Facades\Voyager;

class AppliesController extends Controller
{
    /**
     * Service Attribute
     *
     * @var \App\Service\AppliesService
     */
    protected $service;

    /**
     * Constructor
     *
     * @param AppliesService $appliesService
     */
    public function __construct(AppliesService $appliesService)
    {
        $this->service = $appliesService;
    }

    /**
     *List all Apply
     *
     * @param Request $request
     * @return void
     */
    public function index(Request $request)
    {
        $applies = $this->service->filter($request->q);
        $cause = $this->service->causes($request);
        $summ_type = $this->service->summ_type($request);

        return view('back.apply.index', compact('applies', 'cause', 'summ_type'));
    }

    public function show($id)
    {
        $apply = Apply::findOrFail($id);
        $cause = Cause::all();
        $summ_type = SummType::all();

        return view('back.apply.show', compact('apply', 'cause', 'summ_type'));
    }

    public function edit_status($id)
    {
        $status_saw = $this->service->read($id);

        $status_saw->status = 2;
        $status_saw->save()

    }


}
