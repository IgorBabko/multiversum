<?php

namespace Multiversum\Http\Requests;

use Auth;
use Multiversum\Http\Requests\Request;

class UpdateProfileRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Auth::user();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name'                  => 'string',
            'email'                 => 'email|unique:users,email,' . Auth::user()->id,
            'password'              => 'string|min:8',
            'password_confirmation' => 'same:password',
        ];
    }
}
