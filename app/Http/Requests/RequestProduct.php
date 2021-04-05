<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RequestProduct extends FormRequest
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
            'name' => 'required|unique:products,name,'.$this->id,
            'images' => 'required',
            'desc' => 'required',
            'images_phu' => 'required'
        ];
    }
    public function messages()
    {
        return [
            'images.required' => 'Vui long them anh',
            'images_phu.required' => 'Vui long them anh hi',
            'desc.required' => 'Khong duoc de trong',
            'name.unique' => 'Da ton tai'


        ];
    }
}
