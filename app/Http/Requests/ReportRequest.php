<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ReportRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Prepare the data for validation.
     *
     * @return void
     */
    protected function prepareForValidation(): void
    {
        $this->merge([
            'status' => strtolower($this->status),
        ]);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {

        return [
            'user_id' => ['required', 'integer'],
            'title' => ['required', 'string'],
            'description' => ['required', 'string'],
            'file' => ['required', 'file', 'mimes:jpg,jpeg,png,heic,gif,', 'max:8500'],
            'type' => ['required', 'string'],
            'status' => ['required', 'string', 'in:pending,completed,ongoing,cancelled'],
            'department_id' => ['required', 'integer'],
            'building_id' => ['required', 'integer'],
            'room_id' => ['required', 'integer'],
        ];
    }
}
