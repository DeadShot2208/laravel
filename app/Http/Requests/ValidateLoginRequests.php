<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidateLoginRequests extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'email' => 'required',
            'password'=>['required', 'min:4']
        ];
    }

    public function messages()
    {
        return [
            'email' => 'Поле <:attribute> обязательно для заполнения',
            'password'=>'Неправильно заполнен <:attribute>',
        ];
    }
    public function attributes()
    {
        return [
            'email'=>"email",
            'password'=>'Пароль'
        ];
    }
}
