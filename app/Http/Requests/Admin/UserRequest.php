<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
        $on_update = $this->method() == "PUT" ? "": "|unique:users,email";
        $on_user_update = $this->method() == "PUT" ? "": "required|";
        $on_avatar_update = $this->method() == "PUT" ? "": "image|";
        return [
            'name' => 'required|max:100',
            'contact' => 'required|min:10',
            'age' => 'required|min:2',
            'gender' => 'required',
            'email' => 'required|email'.$on_update,
            'password' => $on_user_update.'min:6',
            'avatar' => $on_avatar_update. 'between:50,1024',
        ];
    }
}
