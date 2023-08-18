<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCommentRequest extends FormRequest
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
            'comment' => [
                'required',
                'max:30',
                'string',
            ]
        ];
    }

    public function messages()
    {
        return [
            'comment.required' => 'コメントは必ず指定してください。',
            'comment.max' => 'コメントは30文字以下で指定してください。'
        ];
    }
}
