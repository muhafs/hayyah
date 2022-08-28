<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class GalleryRequest extends FormRequest
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
        // Method 1
        if (request()->routeIs('gallery.store')) {
            $imageRule = 'required';
        } else if (request()->routeIs('gallery.update')) {
            $imageRule = 'sometimes';
        }

        // Method 2
        // if (request()->isMethod('post')) {
        //     $imageRule = 'required';
        // } else if (request()->isMethod('put')) {
        //     $imageRule = 'sometimes';
        // }

        return [
            'travel_package_id' => 'required|integer|exists:travel_packages,id',
            'image' => $imageRule . '|image'
        ];
    }
}
