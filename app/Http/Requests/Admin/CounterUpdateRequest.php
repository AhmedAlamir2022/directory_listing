<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class CounterUpdateRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'background' => ['nullable', 'image'],
            'counter_one' => ['nullable', 'integer'],
            'counter_title_one' => ['nullable', 'string'],
            'counter_two' => ['nullable', 'integer'],
            'counter_title_two' => ['nullable', 'string'],
            'counter_three' => ['nullable', 'integer'],
            'counter_title_three' => ['nullable', 'string'],
            'counter_four' => ['nullable', 'integer'],
            'counter_title_four' => ['nullable', 'string'],
        ];
    }
}
