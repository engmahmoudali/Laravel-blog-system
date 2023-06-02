<?php

namespace App\Http\Requests;

use App\Rules\AlphaSpaces;
use Illuminate\Foundation\Http\FormRequest;

class UpdatePostRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            // 'title' => 'nullable|unique:posts,title,'.$this->title.',title|alpha:ascii',
            'title' => ['required', 'unique:posts,title,'.$this->title.',title', new AlphaSpaces], // Using it if you want An ASCII with Spaces
            // 'slug' => 'nullable|unique:posts,slug,'.$this->id.',id',
            'content' => 'nullable|min:20',
            'photo' => 'nullable|image|max:2048|mimes:jpeg,png,jpg,webp',
        ];
    }
}
