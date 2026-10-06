<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            //
            'name' => ['required', 'string', 'max:10', 'unique:categories'],
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'カテゴリー名を入力してください',
            'name.string' => '文字列で入力してください',
            'name.max' => '10文字以下で入力してください',
            'name.unique' => '既に登録されているカテゴリー名です',
        ];
    }

}
