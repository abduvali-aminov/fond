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
        $photo_1 = 'mimes:pdf,jpg,png, jpeg';
        $photo_2 = 'mimes:pdf,jpg,png, jpeg';
        $photo_3 = 'mimes:pdf,jpg,png, jpeg';
        if (!request()->isMethod('put')) {
            $photo_1 ='required|' . $photo_1;
            $photo_2 ='required|' . $photo_2;
            $photo_3 ='required|' . $photo_3;

        }
        return [
            'id'
            'name'
            'phone'
            cause_id'
            $table->text('description'
            $table->text('photo_1');
            $table->text('photo_2');
            $table->text('photo_3');
            $table->string('address');
            $table->unsignedDouble('required_amount');
            $table->unsignedBigInteger('summa_id');
        ];
    }
}
