<?php

namespace App\Http\Requests;

use App\Models\Link;
use Illuminate\Foundation\Http\FormRequest;

class ContracRequest extends FormRequest
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

            'contract_number'           => 'required',
            'our_organization'          => 'required',
            'our_ogrn'                  => 'required|digits:13|integer',
            'our_inn'                   => 'required|digits:12|integer',
            'our_kpp'                   => 'required|digits:9|integer',
            'our_adress'                => 'required',
            'our_director'              => 'required',
            'our_phone'                 => 'required',
            'counterparty_organization' => 'required',
            'counterparty_ogrn'         => 'required|digits:13|integer',
            'counterparty_inn'          => 'required|digits:12|integer',
            'counterparty_kpp'          => 'required|digits:9|integer',
            'counterparty_director'     => 'required',
            'counterparty_phone'        => 'required',
            'counterparty_adress'       => 'required',

        ];

    }
    public function messages()
    {
        return[
            'contract_number.required'           => 'Поле номер договора обязательно для заполнения',
            'our_organization.required'          => 'Поле наименование организации обязательно для заполнения',
            'our_ogrn.required'                  => 'Поле ОГРН обязательно для заполнения и должно содержать 13 цифр',
            'our_inn.required'                   => 'Поле ИНН обязательно для заполнения и должно содержать 12 цифр',
            'our_kpp.required'                   => 'Поле КПП обязательно для заполнения и должно содержать 9 цифр',
            'our_adress.required'                => 'Поле адрес организации обязательно для заполнения',
            'our_director.required'              => 'Поле ФИО руководителя обязательно для заполнения',
            'our_phone.required'                 => 'Поле номер телефона обязательно для заполнения',
            'counterparty_organization.required' => 'Поле наименование организации обязательно для заполнения',
            'counterparty_ogrn.required'         => 'Поле ОГРН обязательно для заполнения и должно содержать 13 цифр',
            'counterparty_inn.required'          => 'Поле ИНН обязательно для заполнения и должно содержать 12 цифр',
            'counterparty_kpp.required'          => 'Поле КПП обязательно для заполнения и должно содержать 9 цифр',
            'counterparty_adress.required'       => 'Поле адрес организации обязательно для заполнения',
            'counterparty_director.required'     => 'Поле ФИО руководителя обязательно для заполнения',
            'counterparty_phone.required'        => 'Поле номер телефона обязательно для заполнения',
            ];
    }
}
