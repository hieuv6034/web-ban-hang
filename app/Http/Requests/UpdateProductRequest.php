<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateProductRequest extends FormRequest
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
            'p_name' => [
                'required',
                Rule::unique('products', 'p_name')->ignore($this->p_id, 'p_id')
            ],
            'p_price' => 'required',
            'p_description' => 'required',
            'p_image' => 'img',
            'p_accessories' => 'required'
        ];

    }
    public function messages(){
        return [
            'p_name.required' => 'Trường này không được để trống',
            'p_name.unique' => 'Tên sản phẩm đã tồn tại',
            'p_price.required' => 'Trường này không được để trống',
            'p_description.required' => 'Trường này không được để trống',
            'p_accessories.required' => 'Trường này không được để trống'
        ];
    }
}
