<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
          "name"=>"required|min:2",
          "email" => "required|email",
          "phone" =>"digits_between:10,11"
          "image" => "image|nullable|max:2048",
          "image.*" =>"mimes:jpeg,jpg,png",
          public function messages()
             {
                 return [
                 'name.required' => 'İsim alanı boş bırakılamaz.',
                 'name.min'=>'İsminiz en az :min olabilir',
                 'email.required' => 'Mail alanı boş bırakılamaz.',
                 'email.email'=> 'Email adresi doğru yazılmalı.'
                 'phone.digits_between' => "Telefon numarası 10-11 haneli olabilir.",
                 'image.*'=> 'Fotoğraf jpeg,jpg,png türünde olmalı',
               ];
             }
         }
