<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
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
        $on_img_update = $this->method() == "PUT" ? "": "image|";
        return [
            'title' => 'required|min:3',
            'excerpt' => 'required|max:200',
            'category_id' => 'required',
            'feature_img' => $on_img_update.'between:50,1024',
        ];
    }
}
