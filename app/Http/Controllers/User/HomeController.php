<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;
use Illuminate\Http\Response;

class HomeController extends Controller
{
    public function index()
    {
        // gán auth 
        if (Auth::check()) {
            // Đã đăng nhập.
            $user = Auth::user();
            //echo 'Xin chào User, '. $user->name;
            $username = $user->name;
            return view('home', ['users' => $username]);

        } else {
            return view('home');  
        }

    }

    public function productbygender(Request $request)
    {
        $gender = $request->gender;
        // $products= Product::where('gender', $this->kind)->get();
        $products = Product::where('gender',$gender )->get();
        return response()->json($products);
    }

    public function productbykind(Request $request)
    {
        $kind = $request->kind;
        // $products= Product::where('gender', $this->kind)->get();
        $products = Product::where('kind',$kind )->get();
        return response()->json($products);
    }



}

