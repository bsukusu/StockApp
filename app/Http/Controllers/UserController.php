<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

    function index(){
      return view('dashboards.users.index');
    }

    public function Admin()
    {
        return Auth::id();
    }
}
