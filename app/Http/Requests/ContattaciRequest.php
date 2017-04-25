<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContattaciRequest extends FormRequest
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
            'CaptchaCode'=> 'required|valid_captcha',
            'email' => 'required|email',
            'richiesta' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'CaptchaCode.required' => 'CAPTCHA obbligatorio',
            'CaptchaCode.valid_captcha' => 'validazione del CAPTCHA fallita! Non sarai un robot ??',
            'email.required' => 'Lasciaci la tua mail così possiamo risponderti',
            'email.email' => 'La mail deve avere un formato valido',
            'richiesta.required'  => 'Di cosa hai bisogno ?',
        ];
    }
}
