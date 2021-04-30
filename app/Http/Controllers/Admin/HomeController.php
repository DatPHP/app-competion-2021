<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        $user = Auth::guard('admin')->user();
       // dd($user);
       // echo 'Xin chào Admin, '. $user->name;

        //$admin = Auth::guard('admin')->user();
        //dd($admin);
        if ($user) {
            return view('admin.dashboard');
        }
        else
        {
            return redirect()->route('admin.login');
        }
    }
}
