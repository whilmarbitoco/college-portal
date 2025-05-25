<?php

namespace App\Http\Requests\Settings;

use App\Enums\UserRole;
use Illuminate\Foundation\Http\FormRequest;

class SiteInfoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        // return $this->user()->role == UserRole::ADMIN;
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
            'name' => 'required|max:255',
            'acronym' => 'required',
            'logo' => 'required|mimes:jpeg,png,jpg',
            'background' => 'required|mimes:jpeg,png,jpg',
            'story' => 'required|string',
            'description' => 'required|string',
            'mission' => 'required|string',
            'vision' => 'required|string',
            'values' => 'required|string'
        ];
    }
}
