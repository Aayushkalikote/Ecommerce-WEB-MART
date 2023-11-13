<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateSubCategoryRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'subcategory_name'=>'required|unique:sub_categories,name,' .$this->id,
            'subcategory_slug'=>'nullable',
            'category_id'=>'required',
            'status'=>'boolean|nullable',
        ];
    }
}
