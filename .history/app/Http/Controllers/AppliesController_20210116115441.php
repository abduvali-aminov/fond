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

    public function __construct(AppliesService $appliesService)
    {
        $this->service = $appliesService;
    }

    public function index(Request $request)
    {
        $applies = $this->service->repo->getAll();
        $causes = $this->service->
    }
}
