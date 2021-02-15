<?php

namespace App\Http\Controllers;

use App\Models\Apply;
use Illuminate\Http\Request;

class VerifyController extends Controller
{
    public function getVerify()
    {
        return view('frontapply.verify');
    }

    public function postVerify(Request $request)
    {
        if($user = Apply::where('code', $request->code)->first()){
            $user->status = 1;
            $user->code = null;
            $user->save();

            return redirect()->route('apply')->withMessage('Success');
        }else{
            return back()->withMessage('Error');
        }

    }
}
