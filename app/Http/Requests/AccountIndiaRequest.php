<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AccountIndiaRequest extends FormRequest
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
            'sells_point_name'=>'required|String',
            'product_name'=>'required',
            'quantity'=>'required',
            'rate'=>'required',
            'customer_name'=>'required',
            'amount_paid'=>'required',
            'amount_left'=>'required',
        ];
    }
}
