<?php

namespace App\Http\Requests\Admin\Companies;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Validation\ValidationException;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Support\Facades\Redirect;

class CompanyRequest extends FormRequest
{
    private array $errors = [];
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    public function failedValidation(Validator $validator)
    {
        $this->errors = (new ValidationException($validator))->errors();
    }

    public function getErrors() : array
    {
        return $this->errors;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'max:255'],
            'title' => ['required', 'max:255'],
            'meta_description' => ['required', 'max:255'],
            'h1' => ['required', 'max:255'],
            'breadcrumbs' => ['required', 'max:255'],
            'lead' => ['nullable'],
            'content' => ['nullable'],
            'logo' => ['required', 'max:255'],
            'email' => ['nullable', 'max:255'],
            'hotline' => ['nullable', 'max:255'],
            'link' => ['required', 'max:255'],
            'status' =>  ['required', 'numeric'],
            'rating_value' => ['nullable'],
            'rating_count' => ['nullable'],

            'url' => ['required', 'max:255']
        ];
    }

    /**
     * Get the validation attributes that apply to the request.
     *
     * @return array
     */
    public function attributes(): array
    {
        return [
            'name' => 'Название',
            'title' => 'Заголовок',
            'meta_description' => 'Мета описание',
            'h1' => 'h1',
            'breadcrumbs' => 'Хлебные крошки',
            'lead' => 'Лид',
            'content' => 'Контент',
            'logo' => 'Логотип',
            'email' => 'Email',
            'hotline' => 'Горячая линия',
            'link' => 'Ссылка',
            'status' => 'Статус',
            'rating_value' => 'Значение рейтинга',
            'rating_count' => 'Количество голосов',

            'url' => 'Url',
        ];
    }

}
