<?php

namespace App\Http\Requests\Job;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class StoreJobsRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return Auth()->check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'jobRole' => 'required',
            'jobArea' => 'required',
            'skillsRequired' => 'required',
            'salary' => 'required|numeric',
            'company' => 'required',
            'location' => 'required',
            'experience' => 'required|integer',
            'discription' => 'required',
            'applyLink' => 'required',
        ];
    }
}
