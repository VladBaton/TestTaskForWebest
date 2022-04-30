<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArticlesRequest extends FormRequest
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
        return 
        [
            "subject" => "required|min:3|max:50",
            "text" => "required|min:3"  
        ];
    }

    public function messages()
    {
        return
        [
            'subject.required' => 'Тема статьи обязательна',
            'text.required' => 'Текст статьи обязателен',
            'subject.min' => 'Тема статьи должна быть не короче 3х символов',
            'subject.max' => 'Тема статьи должна быть не длиннее 50ти символов',
            'text.min' => 'Текст статьи должен быть не короче 3х символов'
        ];
    }

}