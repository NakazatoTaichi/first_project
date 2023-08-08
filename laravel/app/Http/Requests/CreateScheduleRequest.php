<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateScheduleRequest extends FormRequest
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
            'going_out' => 'required',
            'dinner' => 'required',
            'departure_time' => 'required',
            'arrival_time' => 'required',
            'memo' => 'required',
            // 'departure_time' => [
            //     'nullable',
            //     'required_with:arrival_time',
            // ],
            // 'arrival_time' => [
            //     'nullable',
            //     'required_with:departure_time',
            // ],
            // 'memo' => [
            //     'nullable',
            //     'string',
            // ]
        ];
    }

    public function messages()
    {
        return [
            'going_out.required' => '外出予定の有無は必須です。',
            'dinner.required' => '夕飯の有無は必須です。',
            'departure_time.required' => '外出時刻を入力してください。',
            'arrival_time.required' => '帰宅時刻を入力してください。',
            'memo.required' => '詳細を入力してください。',
            // 'departure_time.required_with:arrival_time' => '外出時刻を入力してください。',
            // 'arrival_time.required_with:departure_time' => '帰宅時刻を入力してください。',
            // 'memo.string' => '詳細を入力してください。',
        ];
    }
}
