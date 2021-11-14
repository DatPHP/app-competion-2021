<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;
use Illuminate\Http\Response;

class HomeController extends Controller
{   public $user;

    public function __construct()
    {
        if (Auth::check()) {
            // Đã đăng nhập.
            $user = Auth::user();

            dd($user);

            $username = $user->name;

            $this->user = $username;
           // return view('customer.home', ['users' => $username]);

        } else {
           // return view('customer.home');  
        }

        
    }


    public function index()
    {
        // gán auth 
        if (Auth::check()) {
            // Đã đăng nhập.
            $user = Auth::user();
            //echo 'Xin chào User, '. $user->name;
            $username = $user->name;
            return view('customer.home', ['users' => $username]);

        } else {
            return view('customer.home');  
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

    public function productbyid($id)
    {
        $product = Product::find($id);

        //dd($product);
      
        return view('customer.product_detail', compact('product'));
        //return response()->json($products);

    }

  




}

