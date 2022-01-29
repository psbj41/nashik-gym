<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class HomeRequest extends FormRequest
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
            'slide1_img' => 'image|between:50,1024',
            'slide2_img' => 'image|between:50,1024',
            'slide3_img' => 'image|between:50,1024',
            'welcome1_img' => 'image|between:50,1024',
            'welcome2_img' => 'image|between:50,1024',
            'welcome3_img' => 'image|between:50,1024',
            'bgprogram_img' => 'image|between:50,1024',
            'bgtestimonial_img' => 'image|between:50,1024',
            'bgloginreg_img' => 'image|between:50,1024',
        ];
    }
}
