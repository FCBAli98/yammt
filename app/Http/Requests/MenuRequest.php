<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MenuRequest extends FormRequest
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
        return [
            'title' => 'required|string|max:255',
            'lang' => 'required|string|max:255',
            'parent_id' => 'nullable|string|min:1|max:255'
        ];
    }


    public function messages()
    {
       return[
         'title.required' => 'To\'ldirilishi majburiy bo\'lgan maydon'
       ];
    }
}
