<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class ResultsRequest extends FormRequest
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
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'fio'=> ['required', 'min:2', 'max:64'],
            'question1'=>'required',
            'question2'=>'required',
            'question3'=>'required',
        ];
    }

    public function messages(): array 
    {
        return [
            'fio.required'=> 'Пожалуйста введите ФИО',
            'question1.required'=> 'Пожалуйста дайте ответ на первый вопрос',
            'question2.required'=> 'Пожалуйста дайте ответ на второй вопрос',
            'question3.required'=> 'Пожалуйста дайте ответ на третий вопрос',
        ];
    }
}
