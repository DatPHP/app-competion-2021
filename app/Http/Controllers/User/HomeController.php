<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        // gán auth 

        /*
        $user = Auth::user();

        //echo 'Xin chào User, '. $user->name;
        $username = $user->name;

        */ 


        //code sau gỡ bỏ auth khi hiện homepae 

        if (Auth::check()) {
            // Đã đăng nhập.
            $user = Auth::user();
            //echo 'Xin chào User, '. $user->name;
            $username = $user->name;
            return view('home', ['users' => $username]);

        } else {
            //chưa đăng nhập.
            return view('home');  
        }

        //return view('home', ['users' => $username]);
    }
}
