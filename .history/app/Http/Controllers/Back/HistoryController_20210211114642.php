<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Service\HistoryService;
use Illuminate\Http\Request;

class HistoryController extends Controller
{
    /**
     * Service
     *
     * @var \App\Service\HistoryService
     */
    public $service;

    /**
     * Constructor
     *
     * @param HistoryService $historyService
     */
    public function __construct(HistoryService $historyService)
    {
        $this->service = $historyService;
    }

    public function index()
    {

    }

}
