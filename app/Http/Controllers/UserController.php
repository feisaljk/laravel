<?php

namespace App\Http\Controllers;

use App\Users;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    
    public function getDashboard()
    {
        return view('dashboard');
    }

    public function getLogout()
    {
        Auth::logout();
        return redirect()->route('home');
    }
    
    public function postSignUp(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email|unique:users',
            'full_name' => 'required|max:120',
            'password' => 'required|min:4'
        ]);

        $email = $request['email'];
        $full_name = $request['full_name'];
        $password = bcrypt($request['password']);

        $user = new Users();
        $user->email = $email;
        $user->full_name = $full_name;
        $user->password = $password;

        $user->save();
        
        Auth::login($user);

        return redirect()->route('dashboard');
    }

    public function postSignIn(Request $request)
    {
        $this->validate($request, [
            'email_login' => 'required',
            'password_login' => 'required'
        ]);

        if (Auth::attempt(['email' => $request['email_login'], 'password' => $request['password_login']])) {
            return redirect()->route('dashboard');
        }
        return redirect()->back();
    }
}