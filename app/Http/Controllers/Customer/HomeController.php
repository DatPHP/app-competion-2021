<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;
use Illuminate\Http\Response;

use App\Repositories\Product\ProductRepositoryInterface;


class HomeController extends Controller
{   public $user;


     /**
     * @var PostRepositoryInterface|\App\Repositories\Repository
     */
    protected $productRepo;

    public function __construct(ProductRepositoryInterface $productRepo)
    {

        $this->productRepo = $productRepo;
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

    public function check()
    {
        $products = $this->productRepo->find(7);

        dd($products);

        return view('home.products', ['products' => $products]);

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
        //$product = Product::find($id);

        //dd($product);
        $product = $this->productRepo->find($id);
      
        return view('customer.product_detail', compact('product'));
        //return response()->json($products);

    }



  




}

