<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Paginator;


class ProductController extends Controller
{
         /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $username = session('users');
        $products = Product::paginate(3);
       // dd($products);
        return view('admin.product.list', ['products' => $products,'username' => $username]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.product.create');
    }

        /**
     * Show the form for editing a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function edit(Request $request)
    {
         //var_dump($request->id);
         $id= $request->id;
         $product = Product::findorFail($id);
         return view('admin.product.create', ['product' => $product, 'id'=>$id]);
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    
        $messages = [
            'required' => 'Trường :attribute bắt buộc nhập.',
            'numeric'    => 'Trường :số tiền nhập phải là số '
        ];
        $validator = Validator::make($request->all(), [
                'name'     => 'required',
                'price'    => 'required',
                'content'  => 'required'

            ], $messages);

            if ($validator->fails()) {
                dd("Vo day");
                return redirect('admin/product/create')
                        ->withErrors($validator)
                        ->withInput();
            } else {
                $active = $request->has('active')? 1 : 0;
                if($request->id)
                {   
                    //dd('vo if');
                    $Product = Product::find($request->id);
                }
                else 
                {
                //dd("vo else");
                $Product = new Product;
                }
                $Product->name = $request->name;
                $Product->price = $request->price;
                $Product->content = $request->content;
                $Product->active = $active;
                $Product->save();

            //return view('admin.product.list');

            return redirect('admin/product/list')
              ->with('message', 'Đăng ký thành công.');

            }

         
    }

    public function delete(Request $request){
        $id= $request->id;
        $user = Product::find($id);
        $user->delete();
        return redirect('admin/product/list');
    }
}
