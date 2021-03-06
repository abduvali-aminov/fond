<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ApplyRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $photo_1 = 'mimes:pdf,jpg,png, jpeg|max:5128';
        $photo_2 = 'mimes:pdf,jpg,png, jpeg';
        if (!request()->isMethod('put')) {
            $photo_1 ='required|' . $photo_1;
            $photo_2 ='required|' . $photo_2;

        }
        return [
            'name'=>'required',
            'phone'=>'required',
            'cause_id'=>'required',
            'description'=>'required',
            'photo_1'=>$photo_1,
            'photo_2'=>$photo_2,
            'address'=>'required',
            'required_amount'=>'required',
            'summa_id'=>'required',
        ];
    }
}
