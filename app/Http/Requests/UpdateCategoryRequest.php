<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateCategoryRequest extends FormRequest
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
            'name' => [
                'required',
                Rule::unique('categories', 'c_name')->ignore($this->c_id, 'c_id')
            ],
            'icon' => 'required'
        ];

    }
    public function messages(){
        return [
            'name.required' => 'Trường này không được để trống',
            'name.unique' => 'Tên danh mục đã tồn tại',
            'icon.required' => 'Trường này không được để trống',
        ];
    }
}
