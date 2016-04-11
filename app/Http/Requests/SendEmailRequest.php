<?php

namespace Multiversum\Http\Requests;

use Multiversum\Http\Requests\Request;

class SendEmailRequest extends Request
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
            'name'    => 'required|string',
            'email'   => 'required|email',
            'message' => 'required',
        ];
    }
}
