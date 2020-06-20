<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;
use Toastr;

class LoginRequest extends FormRequest
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
            'email' => 'required|email|string|email:rfc,dns',
            'password' => 'required|string|min:8'
        ];
    }

    public function withValidator($validator)
    {
        $messages = $validator->messages();
        foreach($messages->all() as $message) {
            Toastr::error($message, 'Error' , ['timeOut' => 10000]);
        }

        return $validator->errors()->all();
    }
}
