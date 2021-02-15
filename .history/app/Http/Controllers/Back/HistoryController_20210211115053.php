<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Service\HistoryService;
use Illuminate\Http\Request;

class HistoryController extends Controller
{

    public function index()
    {
        $history = $this->service->repo->getAll();
        echo $history;
        // return $history;
    }

}
