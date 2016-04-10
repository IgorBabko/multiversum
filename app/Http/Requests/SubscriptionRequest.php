<?php

namespace Multiversum\Http\Requests;

use Multiversum\Http\Requests\Request;

class SubscriptionRequest extends Request
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
            'email' => 'required|email|unique:subscriptions',
        ];
    }

    public function messages()
    {
        return [
            'email' => 'неверный email',
        ];
    }
}
