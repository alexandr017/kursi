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
            'title' => [],
            'company_id' => [],
            'external_id' => [],
            'statistics_link' => [],
            'affiliate_link' => [],
            'direct_link' => [],
            'duration' => [],
            'duration_type' => [],
            'cost' => [],
            'sale_cost' => [],
            'sale_value' => [],
            'payment_value' => [],
            'currency' => [],
            'payment_type' => [],
            'is_cost_by_query' => [],
            'reviews_count' => [],
            'installment_period' => [],
            'installment_payment' => [],
            'duration_in_hours' => [],
            'status' => []
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

            'title',
            'company_id',
            'external_id',
            'statistics_link',
            'affiliate_link',
            'direct_link',
            'duration',
            'duration_type',
            'cost',
            'sale_cost',
            'sale_value',
            'payment_value',
            'currency',
            'payment_type',
            'is_cost_by_query',
            'reviews_count',
            'installment_period',
            'installment_payment',
            'duration_in_hours',
            'status'
        ];
    }
}
