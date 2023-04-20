<?php

namespace App\Http\Requests\Prompt;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
        return [
            'user_id' => 'numeric|required|exists:users,id',
            'folder_id' => 'numeric|required|exists:folders,id',
            'description' => 'string|required|max:512'
        ];
    }
}
