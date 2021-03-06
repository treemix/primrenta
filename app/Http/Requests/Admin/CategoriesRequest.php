<?php

namespace App\Http\Requests\Admin;


use Carbon\Carbon;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Str;

class CategoriesRequest extends FormRequest
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
     * Prepare the data for validation.
     */
    protected function prepareForValidation(): void
    {

    }

    public function messages()
    {
        //return parent::messages(); // TODO: Change the autogenerated stub

        return [
            'name.required' => 'The name field is required',
            'slug.required'  => 'The slug field is required.',
        ];
    }

    /**
     * Get the validation rules that apply to the request.
     */
    public function rules(): array
    {
        return [
            'parent_id' => 'nullable|integer',
            'parent_name' => 'nullable|exists:categories,name|string',
            'name' => 'required|string',
            'slug' => 'required|string',
            'description' => 'nullable|string'
        ];
    }
}
