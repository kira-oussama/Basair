<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    
    public function edit(User $user)
    {
        $user = Auth::user();
        return view('admin.profile',['user'=> $user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(User $user,Request $request)
    {
        $this->validate(request(), [
            'username' => 'required',
            'email' => 'required|email',
            'password' => 'min:8|required_with:password_confirmation|same:password_confirmation',
            'password_confirmation' => 'min:8'
        ]);

        $user->name = $request->username;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);

        $user->save();
        return redirect()->route('land_page');
    }

  
}
