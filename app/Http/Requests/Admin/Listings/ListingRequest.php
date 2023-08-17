<?php

namespace App\Http\Requests\Admin\Listings;

use Illuminate\Foundation\Http\FormRequest;

class ListingRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        // todo помоему тут много лишних полей? title description slug rating_sum
        return [
            'parent_id' => [],
            'name' => [],
            'title' => [],
            'description' => [],
            'slug' => [],
            'meta_description' => [],
            'meta_title' => [],
            'h1' => [],
            'breadcrumbs' => [],
            'lead' => [],
            'content' => [],
            'author_id' => [],
            'rating_value' => [],
            'rating_count' => [],
            'rating_sum' => [],
            'status' => [],

            'url' => []
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
            'parent_id' => 'Родительский листинг',
            'name' => 'Название',
            'title' => 'Заголовок',
            'meta_description' => 'Мета описание',

            'description' => '?',
            'slug' => '?',
            'meta_title' => '?',

            'h1' => 'h1',
            'breadcrumbs' => 'Хлебные крошки',
            'lead' => 'Лид',
            'content' => 'Контент',
            'author_id' => 'Автор',
            'status' => 'Статус',
            'rating_value' => 'Значение рейтинга',
            'rating_count' => 'Количество голосов',
            'rating_sum' => '?',

            'url' => 'Url',
        ];
    }
}
