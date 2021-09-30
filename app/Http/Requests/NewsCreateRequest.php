<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NewsCreateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'guid' => ['string', 'min:5'],
            'category_id' => 'required',
			'title' => ['required', 'string', 'min:5'],
			'author' => ['required', 'string', 'min:3'],
			'description' => ['required', 'string', 'min:10'],
            'image'  => ['sometimes']
        ];
    }
}
