<?php

namespace RonasIT\Support\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ExportCalendarRequest extends FormRequest
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
            'address' => 'string|required',
            'from' => 'date_format:Y-m-d H:i:s|required',
            'to' => 'date_format:Y-m-d H:i:s|required',
            'description' => 'string|required',
            'name' => 'string|required',
            'contact_email' => 'string|email|required'
        ];
    }
}
