<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StepFormRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
            $rules = [
                'order' => 'required',
                'recipe_id' => 'required',
                'instruction' => 'required',
            ];
            return $rules;
    }
}
