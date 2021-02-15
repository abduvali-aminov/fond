<?php

namespace App\Http\Controllers;

use App\Models\Cause;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        $causes = Cause::
        return view('main.index');
    }
}
