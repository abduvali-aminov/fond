<?php

namespace App\Http\Controllers;

use App\Models\Apply;
use Illuminate\Http\Request;

class VerifyController extends Controller
{
    public function getVerify()
    {
        return view('verify');
    }

    public function postVerify(Request $request)
    {
        if($user = Apply::where('code', $request->code)->first()){
            $user->active = 1;
            $user->code = null;
            $user->save();

            return redirect()->route('login')->withMessage('Your account is Active');
        }else{
            return back()->withMessage('Error1234556');
        }

    }
}
