<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class PostCheckoutRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // determina se l'utente corrente è autenticato
        return Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nome_spedizione' => 'required',
            'indirizzo_spedizione' => 'required',
            'citta_spedizione' => 'required',
            'provincia_spedizione' => 'required',
            'cap_spedizione' => 'required',
            'email' => 'required|email',
        ];
    }
}
