<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
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
            'title' => [
                'required',
                'max:30',
                'string'
            ],
            'content' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'お知らせを入力してください。',
            'title.max' => 'お知らせは30文字以内で入力してください。',
            'content.required' => '内容を入力してください。',
        ];
    }
}
