<?php

namespace Multiversum\Http\Requests;

use Multiversum\Http\Requests\Request;

class StoreDiskRequest extends Request
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
            'name'        => 'required',
            'description' => 'required',
            'price'       => 'required|min:1|numeric',
        ];
    }

    public function messages()
    {
        return [
            'name.required'        => 'Название не должно быть пустым',
            'description.required' => 'Описание не должно быть пустым',
            'price.required'       => 'Цена не должна быть пустой',
            'price.min'            => 'Цена должна быть > 0',
            'price.numeric'        => 'Цена должна быть числом',
        ];
    }
}
