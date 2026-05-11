<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class GuestBookRequest extends FormRequest
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
            'surname' =>['required', 'min:2', 'max:32'],
            'name' => ['required', 'min:2', 'max:32'],
            'fathername' => ['required', 'min:2', 'max:32'],
            'message' => ['required', 'min:5', 'max:255']
        ];
    }
    public function messages(): array {
        return [
            ''=> '',
            'surname.required'=> 'Пожалуйста введите фамилию',
            'name.required'=> 'Пожалуйста укажите имя',
            'fathername.required'=> 'Пожалуйста введите отчество',
            'message.required'=> 'Пожалуйста введите сообщение',

            'surname.min'=> 'Фамилия должна состоять из не менее 2-ух символов',
            'name.min'=> 'Имя должно состоять из не менее 2-ух символов',
            'fathername.min'=> 'Отчество должно состоять из не менее 2-ух символов',
            'message.min'=> 'Сообщение должен состоять из не менее 5-ти символов',

            'surname.max'=> 'Фамилия не должна состоять из более чем 32-ух символов',
            'name.max'=> 'Имя должно состоять из более чем 32-ух символов',
            'fathername.max'=> 'Отчество должно состоять из более чем 32-ух символов',
            'message.max'=> 'Сообщение должно состоять из более чем 255-ти символов',
        ];
    }
}
