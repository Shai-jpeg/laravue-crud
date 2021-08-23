<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InternlistsRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            //
                'last_name' => 'required',
                'first_name' => 'required',
                'date_of_birth' => 'required',
                'contact_number' => 'required',
                'email_address' => 'required',
                'address' => 'required',
                'department' => 'required',
                'position' => 'required',
                'intern_start' => 'required',
                'intern_end' => 'required',
                'required_hours' => 'required'

        ];
    }
}
