<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UpdateController extends Controller
{
    public function edit(User $user){
      return view('update-profile', compact('user'));
    }

    public function update(UpdateRequest $request, User $user)
    {
        $filename = $user->name;
        if ($request->image) {
            $file= $request->file('image');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('Image'), $filename);
        }
        $user->update([
                 'name' =>$request->name,
                 'email'=>$request->email,
                 'image'=>$filename
                 ]);
        return redirect('update-profile')->with('message', 'Kullanıcı bilgileriniz güncellendi.');
    }
}
