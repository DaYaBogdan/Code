<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class MessageRequest extends FormRequest
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
            'sex'=> ['required','in:male,female'],
            'email'=> ['required', 'min:5', 'max:64', 'email'],
            'phone'=>['required', 'regex:/^\+(7|3)\d{9,11}$/'],
            'message'=> 'required',
        ];
    }

    public function messages(): array {
        return [
            ''=> '',
            'fio.required'=> 'Пожалуйста ведите ФИО',
            'sex.required'=> 'Пожалуйста укажите пол',
            'email.required'=> 'Пожалуйста ведите email',
            'phone.required'=> 'Пожалуйста ведите телефон',
            'message.required'=> 'Пожалуйста ведите сообщение',

            'fio.min'=> 'ФИО должно состоять из не менее 2-ух символов',
            'email.min'=> 'email должен состоять из не менее 5-ти символов',
        ];
    }
}
