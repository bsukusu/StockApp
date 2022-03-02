<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Http\Request\ContactRequest;
class ContactController extends Controller
{

  public function create()
{
  $contact = Contact::all();
  return view('contact', compact('contacts'));
}
public function store(ContactRequest $request)
   {
      Contact::create([
     'client_name' =>$request->client_name,
     'client_mail'=>$request->client_mail,
     'client_phone'=>$request->client_phone,
     'message' => $request->message
     ]);
       return redirect('contact')->with('message', 'Mesajınız iletildi');
   }

}
