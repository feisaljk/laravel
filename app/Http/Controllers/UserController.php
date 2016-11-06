<?php

namespace App\Http\Controllers;

use App\Users;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    
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

    public function getLogout()
    {
        Auth::logout();
        return redirect()->route('home');
    }
    
    public function getAccount()
    {
        return view('account', ['user' => Auth::user()]);
    }

    public function postSaveAccount(Request $request)
    {
        $this->validate($request, [
           'full_name' => 'required|max:120'
        ]);

        $user = Auth::user();
        $old_name = $user->full_name;
        $user->image = $request->file('image');
        $user->full_name = $request['full_name'];
        $user->update();
        return redirect()->route('account');
    }

    public function getUserImage($filename)
    {
        $file = Storage::disk('local')->get($filename);
        return new Response($file, 200);
    }
}