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
        return true;
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
            'file' => ['required', 'mimes:jpg,jpeg,png,heic,gif,', 'max:8500'],
            'type' => ['required', 'string' , 'in:facility,admin,other'],
            'department' => ['required', 'in:ccis,coc,cob,cassed,chtm,con,coe,basiced'],
            'building' => ['required', 'in:itb,rvj'],
            'room' => ['required', 'in:rvj101,rvj102,rvj103,rvj104,rvj105,rvj106,rvj201,rvj202'],
            'status' => ['required', 'string', 'in:pending,completed,ongoing,cancelled'],
        ];
    }
}
