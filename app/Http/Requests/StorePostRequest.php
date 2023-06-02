<?php

namespace App\Http\Requests;

use App\Rules\AlphaSpaces;
use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
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
            // 'title' => 'required|unique:posts,title|alpha:ascii', // Using it if you want [a-zA-Z]
            'title' => ['required', 'unique:posts,title', new AlphaSpaces], // Using it if you want An ASCII with Spaces
            // 'slug' => 'required|unique:posts,slug',
            'content' => 'required|min:20',
            'photo' => 'nullable|image|max:2048|mimes:jpeg,png,jpg,webp',
        ];
    }
}
