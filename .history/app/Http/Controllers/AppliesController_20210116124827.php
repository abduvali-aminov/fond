<?php

namespace App\Http\Controllers;

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
     * 
     *
     * @param AppliesService $appliesService
     */
    public function __construct(AppliesService $appliesService)
    {
        $this->service = $appliesService;
    }

    /**
     *List all Applies
     *
     * @param Request $request
     * @return void
     */
    public function index(Request $request)
    {
        $applies = $this->service->repo->getAll();
        $causes = $this->service->causes($request);
        $summ_type = $this->service->summ_type($request);

        return view('apply.index');
    }

    public function create()
    {

    }
}
