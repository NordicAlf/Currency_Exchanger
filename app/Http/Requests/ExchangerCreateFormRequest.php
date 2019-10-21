<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ExchangerCreateFormRequest extends FormRequest
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
            'currency_in'   => 'required',
            'money_in'      => 'required',
            'currency_out'  => 'required',
        ];
    }

    public function messages()
    {
        return [
          'required' => 'Введите данные'
        ];
    }
}
