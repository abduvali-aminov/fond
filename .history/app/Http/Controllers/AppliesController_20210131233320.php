<?php

namespace App\Http\Controllers;

use App\Http\Requests\ApplyRequest;
use App\Models\Apply;
use App\SendCode;
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
        $cause = $this->service->causes($request);
        $summ_type = $this->service->summ_type($request);

        return view('apply.index', compact('applies', 'cause', 'summ_type'));
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

        $upload_1 = $photo_1->store('public/applies');
        $upload_2 = $photo_2->store('public/applies');


        $apply = Apply::create([
            'name'=>$request->name,
            'phone'=>$request->phone,
            'cause_id'=>$request->cause_id,
            'description'=>$request->description,
            'photo_1'=>$upload_1,
            'photo_2'=>$upload_2,
            'address'=>$request->address,
            'required_amount'=>$request->required_amount,
            'summa_id'=>$request->summa_id
            
        ]);
        if($apply){
            $apply->code = SendCode::sendCode($apply->phone);
            $apply->save();
        }

        return redirect()->route('verify')->with('success', 'Success');
    }
}
