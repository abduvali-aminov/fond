<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HistoryController extends Controller
{
    /**
     * Service
     *
     * @var \App\Service\HistoryService
     */
    public $service;

    public function __construct(HistoryService $h)
    {

    }
}
