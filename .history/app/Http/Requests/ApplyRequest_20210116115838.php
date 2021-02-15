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
        $photo_1 = 'mimes:pdf,jpg, png';
        if (!request()->isMethod('put')) {
            $file_rule ='required|' . $file_rule;
        }
        return [

        ];
    }
}
