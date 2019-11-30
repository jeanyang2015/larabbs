<?php

namespace App\Http\Requests\Api;

use Illuminate\Foundation\Http\FormRequest;

class WeappinfoAuthorizationRequest extends FormRequest
{


    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'avatarUrl' => 'required|string',
            'city' => 'required|string',
            'country' => 'required|string',
            'gender' => 'required',
            'language' => 'required|string',
            'nickName' => 'required|string',
            'province' => 'required|string',
            'code'      => 'required|string',
        ];
    }
}
