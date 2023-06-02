<?php

namespace App\Http\Requests;

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
            // 'title' => 'required|unique:posts,title|alpha:ascii',
            'title' => 'required|unique:posts,title|alpha',
            'slug' => 'required|unique:posts,slug',
            'content' => 'required|min:20',
            'image' => 'nullable|image|max:2048|mimes:jpeg,png,jpg,webp',
        ];
    }
}

// Paste this Code in Validator.php

// public function validateAlphaSpaces($attribute, $value, $params)
//     {
//         return preg_match('/^[\pL\s]+$/u', $value);
//     }
    
//     Create Custom Message some where at bottom in Validation.php
    
//     /*
//     |--------------------------------------------------------------------------
//     | Custom Validation Attributes
//     |--------------------------------------------------------------------------
//     |
//     | The following language lines are used to swap attribute place-holders
//     | with something more reader friendly such as E-Mail Address instead
//     | of "email". This simply helps us make messages a little cleaner.
//     |
//     */
//     "alpha_spaces"     => "The :attribute may only contain letters and spaces.",
    
//     and call it as usual
    
//     /**
//      * Get the validation rules that apply to the request.
//      *
//      * @return array
//      */
//     public function rules()
//     {
//         return [
//             'applicantName' => 'required|alpha_spaces',
//         ];
//     }
    
//     Its Done. :)
