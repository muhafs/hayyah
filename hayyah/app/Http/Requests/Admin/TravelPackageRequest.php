<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class TravelPackageRequest extends FormRequest
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
            'title' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'description' => 'required|string',
            'featured_event' => 'required|string',
            'language' => 'required|string',
            'foods' => 'required|string',
            'departure_date' => 'required|date',
            'duration' => 'required|string',
            'type' => 'required|string',
            'price' => 'required|integer'
        ];
    }
}
