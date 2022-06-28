<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use App\Models\User;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use League\CommonMark\Normalizer\SlugNormalizer;
use Str;

class UserController extends Controller
{
    public function signin()
    {
        if (Auth::check()) {
            return redirect()->back();
        } else {
            return view('signin');
        }
    }

    public function signinAction(Request $request)
    {

        $request->validate([
            'email' => 'required|email|min:8|max:50',
            'password' => 'required|min:8|max:50'
        ]);

        $remember_me = $request->has('remember_me') ? true : false;

        $check = $request->only('email', 'password');

        if (Auth::attempt($check, $remember_me)) {
            return redirect('admin/dashboard');
        } else {
            session()->put('error-msg', "Please enter the valid username and password");
            return redirect()->back();
        }
    }

    public function signup()
    {
        if (Auth::check()) {
            return redirect()->back();
        } else {
            return view('signup');
        }
    }

    public function signupAction(Request $request)
    {
        $request->validate([
            'fullname' => 'required|min:8|max:50',
            'email' => 'required|email|unique:users,email|min:8|max:50',
            'password' => 'required|min:8|max:50'
        ]);

        $user = new User();
        $user->username =  Str::slug($request->fullname).rand(00000,99999);
        $user->email =  $request->email;
        $user->password = Hash::make($request->password);
        $user->save();

        $profile = new Profile();
        $profile->fullname = $request->fullname;
        $profile->user_id = $user->id;
        $profile->save();
        return redirect()->back()->with('success', 'user created');
    }

    public function logout()
    {
        Auth::logout();

        return Redirect('signin');
    }
}
