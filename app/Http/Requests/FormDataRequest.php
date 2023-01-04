<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormDataRequest extends FormRequest
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
            'firstname' => 'required|min:4',
            'email' => 'required|email',
            'address' => 'required',
            'city' => 'required',
            'state' => 'required',
            'zip' => 'required',
            'cardname' => 'required',
            'cardnumber' => 'required|min:10',
            'expmonth' => 'required|max:2',
            'expyear' => 'required|max:4',
            'cvv' => 'required|max:3',

        ];
    }
    public function messages()
    {
        return [
            'firstname.required' => 'Name is Must',
            'firstname.min' => 'Name Must be 5 Chr.',
            'email.required' => 'Email is Must',
            'email.email' => 'Email must be valid',
            'cardnumber.required' => 'Cardnumber is must',
            'cardnumber.min' => 'Cardnumber must be 10 numbers',
            'expmonth.max'=> 'Choose the correct month',
            'expyear.max'=> 'Choose the correct year',

        ];
    }
}
