<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Http\Requests\ApplyRequest;
use App\Models\Apply;
use App\Models\Cause;
use App\Models\SummType;
use App\Service\AppliesService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
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


    public function edit_status_check($id)
    {
        $this->service->edit_status_check($id);

        return redirect()->route('voyager.applies.index');
    }

    public function edit_status_recheck($id)
    {
        $this->service->edit_status_recheck($id);

        return redirect()->route('voyager.applies.index');
    }

    public function create(Request $request)
    {
        $cause = $this->service->causes($request);
        $summ_type = $this->service->summ_type($request);

        return view('back.apply.create', compact('cause', 'summ_type'));
    }

    public function store(ApplyRequest $request)
    {
        $photo_1 = $request->file('photo_1');
        $photo_2 = $request->file('photo_2');

        $upload_1 = $photo_1->store('public/applies');
        $upload_2 = $photo_2->store('public/applies');

        $this->service->create([
            'name'=>$request->name,
            'phone'=>$request->phone,
            'cause_id'=>$request->cause_id,
            'description'=>$request->description,
            'photo_1'=>$upload_1,
            'photo_2'=>$upload_2,
            'address'=>$request->address,
            'required_amount'=>$request->required_amount,
            'summa_id'=>$request->summa_id,
            'status'=>1,
        ]);

        return redirect()->route('voyager.applies.index')->with('success', 'Created Success');
    }


    public function history($id)
    {
        $this->service->added_history($id);

        return redirect()->route('voyager.applies.index');
    }

    public function edit(Request $request, $id)
    {
        $apply =  $this->service->read($id);
        $cause = $this->service->causes($request);
        $summ_type = $this->service->summ_type($request);

        return view('back.apply.edit', compact('apply', 'cause', 'summ_type' ))->with('success', 'Update Success');
    }

    public function update(ApplyRequest $request,$id)
    {
        $file = $this->service->read($id);

        $photo_1 = $file->photo_1;
        $photo_2 = $file->photo_2;

        if($request->photo_1){
            Storage::delete($photo_1);
            $photo_1 = $request->photo_1->store('public/applies');
        }

        if($request->photo_2){
            Storage::delete($photo_2);
            $photo_2 = $request->photo_2->store('public/applies');
        }

        $this->service->update($id, [
            'name'=>$request->name,
            'phone'=>$request->phone,
            'cause_id'=>$request->cause_id,
            'description'=>$request->description,
            'photo_1'=>$photo_1,
            'photo_2'=>$photo_2,
            'address'=>$request->address,
            'required_amount'=>$request->required_amount,
            'summa_id'=>$request->summa_id,
            'status'=>1,
        ]);

        return redire
    }

}
