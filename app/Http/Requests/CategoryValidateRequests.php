<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryValidateRequests extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title'=>['required','string', 'min:3'],
            'slug'=>['required','string'],
            'image'=>['required','image:jpg, jpeg, png']
        ];
    }

    public function messages()
    {
        return [
            'title.min' => 'Минимальное имя 5 смвола',
            'image.image' => 'Не подходящий формат',
        ];
    }
}
