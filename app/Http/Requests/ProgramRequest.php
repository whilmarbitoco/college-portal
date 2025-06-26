<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProgramRequest extends FormRequest
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
            "name" => "required|string|max:255",
            "description" => "required|string",
            "type" => "required|string|in:core,elective,major",
            "duration" => "required|integer|min:1",
            "focus" => "nullable|string|max:255",
            "path" => "nullable|string|max:255",
            "code" => "required|string|max:50|unique:programs,code",
            "active" => "required|boolean",
        ];

    }
}
