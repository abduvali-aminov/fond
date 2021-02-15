<?php

namespace App\Http\Controllers;

use App\Http\Requests\ApplyRequest;
use App\Service\AppliesService;
use Illuminate\Http\Request;

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
        $applies = $this->service->repo->getAll();
        $causes = $this->service->causes($request);
        $summ_type = $this->service->summ_type($request);

        return view('apply.index', compact('applies', 'causes', 'summ_type'));
    }


    public function store(ApplyRequest $request)
    {
        $photo_1 = $request->file('photo_1');
        $photo_2 = $request->file('photo_2')
    }
}
