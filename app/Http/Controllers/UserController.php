<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
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
}
