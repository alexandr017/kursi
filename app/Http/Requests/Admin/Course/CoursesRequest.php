<?php

namespace App\Http\Requests\Admin\Course;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\ValidationRule;
use App\Http\Requests\Admin\AdminRequestTrait;

class CoursesRequest extends FormRequest
{
    use AdminRequestTrait;

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
     * @return array<string, ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'title' => ['required', 'max:255'],
            'company_id' => ['required', 'numeric'], // todo может это поле переименовать в company_id ?
            'external_id' => ['nullable', 'numeric'], // todo это поле вообще используется?
            'statistics_link' => ['nullable', 'string'],
            'affiliate_link' => ['nullable', 'string'],
            'link' => ['required', 'string'],
            'link_type' => ['required', 'in:statistics_link,affiliate_link,link'],
            'direct_link' => ['nullable', 'max:255'],
            'duration' => ['nullable', 'numeric'],
            'duration_type' => ['nullable', 'max:255'],
            'cost' => ['required', 'numeric'],
            'sale_cost' => ['numeric', 'nullable'],
            'sale_value' => ['numeric', 'nullable'],
            'payment_value' => ['nullable', 'numeric'], // todo required?
            'currency' => ['required', 'max:255'],
            'payment_type' => ['max:255'],
            'is_cost_by_query' => ['boolean'],
            'reviews_count' => ['numeric'],
            'installment_period' => ['numeric'],
            'installment_payment' => ['numeric'],
            'duration_in_hours' => ['numeric'],
            'is_popular' => ['required', 'boolean'],
            'is_best' => ['required', 'boolean'],
            'has_promotion' => ['required', 'boolean'],
            'status' => ['required', 'numeric']
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
            'title' => 'Название',
            'company_id' => 'Школа', // todo может это поле переименовать в company_id ?
            'external_id' => 'external_id',
            'statistics_link' => 'Ссылка Keitaro',
            'affiliate_link' => 'Партнерская ссылка',
            'link' => 'Ссылка',
            'direct_link' => 'direct_link',
            'duration' => 'Продолжительность',
            'duration_type' => 'Продолжительность (еденицы измерения)',
            'cost' => 'Стоимость',
            'sale_cost' => 'Скидка',
            'sale_value' => 'Значение со скидки',
            'payment_value' => 'Стоимость платежа',
            'currency' => 'Валюта',
            'payment_type' => 'Тип оплаты',
            'is_cost_by_query' => 'Стоимость по запросу',
            'reviews_count' => 'Количество отзывов',
            'installment_period' => 'Период рассрочки',
            'installment_payment' => 'Платеж по рассрочке',
            'duration_in_hours' => 'Продолжительность в часах',
            'is_popular' => 'Популярный',
            'is_best' => 'Лучший',
            'has_promotion' => 'Имеет продвижение',
            'status' => 'Статус'
        ];
    }
}
