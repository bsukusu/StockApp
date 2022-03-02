<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            "client_name" => "required|min:10",
            "client_mail" => "required|email",
            "client_phone" =>"required|numeric|min:11",
            "message" => "required"
        ];
    }
    public function messages()
    {
        return [
        'client_name.required' => "Müşteri ismi boş bırakılamaz.",
        'client_name.min'=>'Müşteri ismi minimum :min olabilir',
        'client_mail.required' => "E mail adresi boş bırakılamaz.",
        'client_mail.email' => "E mail adresi doğru girilmelidir.",
        'client_phone.required' => "Müşteri telefon numarası boş bırakılamaz.",
        'client_phone.numeric'=> "Müşteri telefon numarası doğru girilmelidir.",
        'client_phone.min'=> "Telefon numarası :min haneli olmalıdır",
        'message.required'=> "Mesaj kısmı boş bırakılamaz."
      ];
    }
}
