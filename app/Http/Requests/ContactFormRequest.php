<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactFormRequest extends FormRequest
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
            'txtTitle' => 'required|max:255',
            'txtEmail' => 'required|email',
            'txtContent' => 'required'
        ];
    }

    public function messages2()
    {
        return [
            'image.mimes' => trans('admin/operator.validation.image.mimes'),
            'image.dimensions' => trans('admin/operator.validation.image.dimensions'),
            'image.max' => trans('admin/operator.validation.image.max'),
        ];
    }

    public function messages()
    {
        return [
            'txtTitle.required' => 'Nhap title',
            'txtEmail.required' => 'Nhap Email',
            'txtContent.required' => 'Nhap Content'
        ];
    }
}
