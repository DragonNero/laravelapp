<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryFormRequest extends FormRequest
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
            'name' => 'required|max:255|unique:categories,name,' . $this->id,
            'order' => 'required',
            'image' => [ 'mimes:jpg, png, jpeg', 'max:5048'],
            ];
            if (in_array($this->method(), ['POST'])) {
                $rules['image'] = [ 'required', 'mimes:jpg, png, jpeg', 'max:5048'];
            }
            return $rules;
    }
}
