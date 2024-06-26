<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AccessLogRequest extends FormRequest
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
            'start_date' => 'sometimes|required|date_format:Y-m-d|before_or_equal:end_date',
            'end_date' => 'sometimes|required|date_format:Y-m-d|after_or_equal:start_date',
        ];
    }
}
