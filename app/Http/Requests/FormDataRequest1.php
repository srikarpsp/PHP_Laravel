<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormDataRequest1 extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'fname' => 'required|min:4',
            'email' => 'required|email',
            'contact' => 'required',
            'rate' => 'required',
            'satisfaction' => 'required',
            'recom' => 'required',
            'info' => 'required',
            //
        ];
    }
}
