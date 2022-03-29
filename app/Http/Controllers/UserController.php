<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Store;
use App\Models\Category;
use App\Http\Requests\StoreRequest;

use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

    public function index(){
      return view('dashboard');
    }

    public function createAdmin()
    {
        return Auth::id();
    }

    public function create(){
      return view('store-create');
    }

    public function store(StoreRequest $request){
      $filename = null;
        if ($request->image) {
            $file= $request->file('image');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('Image'), $filename);
        }
        Store::create([
      'name' =>$request->name,
      'email' =>$request->email,
      'phone' => $request->phone,
      'image'=>$filename,
      'category_id'=>$request->category_id,
      'adress' => $request->adress,
      'aboutus' => $request->aboutus,
      ]);
        return redirect('store-create')->with('message', 'Mağazanız oluşturuldu.');
    }
  }
