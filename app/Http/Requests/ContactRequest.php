<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            'first_name' => 'required|max:10',
            'last_name' => 'required|max:255',
            'email' => 'required|unique:contacts|max:255',
            'phone' => 'required|unique:contacts|max:255',
            'company'=> 'max:255',
            'website' => 'max:255',
            'service'=> 'required|max:255',
            'message'=> 'required'
        ];
    }
}
