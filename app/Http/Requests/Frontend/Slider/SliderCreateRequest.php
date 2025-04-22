<?php

namespace App\Http\Requests\Frontend\Slider;

use Illuminate\Foundation\Http\FormRequest;

class SliderCreateRequest extends FormRequest
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
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'title' => 'required|string|max:30',
            'sub_title' => 'required|string|max:30',
            'short_description' => 'required|string|max:1000',
            'redirection_link' => 'required',
//            'sort_order' => 'required|integer|min:1',
        ];
    }
}
