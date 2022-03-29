<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            "name"=>"required|max:50",
            "email" => "required|email",
            "phone" => "required|integer|digits_between:10,11",
            "image" => "image|nullable|max:2048",
            "image.*" =>"mimes:jpeg,jpg,png",
            "store_id" => "required|exists:categories,id",
            "adress" => "required",
            "aboutus" => "required"
          ];
      }
      public function messages()
      {
          return [
          'name.required' => "Mağaza adı boş bırakılamaz.",
          'name.max'=>'Mağaza adı en fazla :max olabilir',
          'email.email' => "Emaili doğru giriniz.",
          'email.required' => "Email alanı boş bırakılamaz.",
          'phone.required' => "Telefon numarası boş bırakılamaz.",
          'image.*'=> 'Fotoğraf jpeg,jpg,png türünde olmalı',
          'store_id.required' => "Yazar ismi boş bırakılamaz.",
          'store_id.exists' => "Böyle bir kategori yok..",
          'adress.required' => "Mağaza adresi girilmesi zorunludur.",
          'aboutus.required' => "Hakkımızda alanı boş bırakılamaz.",

        ];
      }
  }
