<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClientRequest extends FormRequest
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
            'firstName' => 'required|max:50',
            'lastName' => 'max:50',
            'middleName' => 'max:50',
            'phone' => 'max:50',
            'email' => 'required|email',
            'password' => 'required|confirmed|min:8|max:150',
            'check' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'firstName.required' => 'Введите ваше имя!',
            'firstName.max' => 'Имя не должно содержать более 50 символов!',
            'lastName.max' => 'Фамилия не должна содержать более 50 символов!',
            'middleName.max' => 'Отчество не должно содержать более 50 символов!',
            'email.required' => 'Введите ваш email!',
            'email.email' => 'Введите email корректно!',
            'password.required' => 'Введите пароль!',
            'password.min' => 'Пароль должеть состоять минимум из 8 символов!',
            'password.max' => 'Пароль не должен содержать более 150 символов!',
            'password.confirmed' => 'Пароли должны совпадать!',
            'check.required' => 'Подтвердите согласие на обработку персональных данных!',
        ];
    }
}
