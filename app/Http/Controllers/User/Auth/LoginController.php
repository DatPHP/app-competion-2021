<?php

namespace App\Http\Controllers\User\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
    public function login(Request $request)
    {
        if ($request->getMethod() == 'GET') {
            return view('user.auth.login');
        }
        $email = $request->email;
        $password = $request->password;
        //$password = bcrypt($request->password);
        //if (Auth::attempt(['email' => $email, 'password' => $password, 'status' => 1])) {
            
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            // Authentication was successful...
            return redirect()->route('home');
        }else {
            return redirect()->back()->withInput();
        }
    }

    public function logout()
    {
        //auth()->logout();
        Auth::logout();
        return redirect()->route('home');
    }

}
