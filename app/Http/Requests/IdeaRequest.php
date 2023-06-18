<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class IdeaRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        if ($this->method() === 'POST') {
            return $this->path() === 'ideas';
        }

        if ($this->method() === 'PUT') {
            return preg_match('#^ideas/\d+$#', $this->path());
        }

        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            // 'user_id' => 'required|integer',
            'main_category' => 'required|string|max:10',
            'style' => 'required|string|max:10',
            'keywords' => 'string|max:10',
        ];
    }

    /**
     * Get custom messages for validator errors.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'main_category.required' => 'メインカテゴリーは必須です。',
            'style.required' => 'スタイルは必須です。',
            'main_category.string' => 'メインカテゴリーに正しい値を入力してください。',
            'style.string' => 'スタイルに正しい値を入力してください。',
            'keywords.string' => 'キーワードに正しい値を入力してください。',
            'main_category.max' => 'メインカテゴリは10文字以内で入力してください。',
            'style.max' => 'スタイルは10文字以内で入力してください。',
            'keywords.max' => 'キーワードは10文字以内で入力してください。',
        ];
    }
}
