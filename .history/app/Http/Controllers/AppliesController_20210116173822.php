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

    public function create(Request $request)
    {
        $causes = $this->service->causes($request);
        $summ_type = $this->service->summ_type($request);

        return view('apply.create', compact('causes', 'summ_type'));
    }


    public function store(ApplyRequest $request)
    {
        $photo_1 = $request->file('photo_1');
        $photo_2 = $request->file('photo_2');
        $photo_3 = $request->file('photo_3');

        $upload_1 = $photo_1->store('public');
        $upload_2 = $photo_2->store('public');
        $upload_3 = $photo_3->store('public');


        $this->service->create([
            'name'=>$request->name,
            'phone'=>$request->phone,
            'cause_id'=>$request->cause_id,
            'description'=>$request->description,
            'photo_1'=>$upload_1,
            'photo_2'=>$upload_2,
            'photo_3'=>$upload_3,
            'address'=>$request->address,
            'required_amount'=>$request->required_amount,
            'summ_id'=>$request->summ_id
        ]);

        return redirect()->route('apply')->with('success', 'Success');
    }
}
