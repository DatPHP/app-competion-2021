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
       // $products = Product::latest()->paginate(2);
        //dd($products);
        $products = Product::paginate(10);
        return view('admin.product.index', compact('products'))
            ->with('i', (request()->input('page', 1) - 1) * 4);
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
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

       // dd($request);

        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
            'image' => 'mimes:jpeg,bmp,png',
            
        ]);

      //  Product::create($request->all());

        $product = new Product;
        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->gender = $request->gender;

       // dd($request);
       if ($request->hasFile('image')) {

        $imageName = 'product_'.$request->id.'.'.$request->image->extension();  
     
        $request->image->move(public_path('images/products'), $imageName);

        $product->file_path = $imageName;

       }

	    $product->save();


        return redirect()->route('admin.product.list')
            ->with('success', 'Product created successfully.');
           
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::find($id);
        return view('admin.product.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //dd($product);

        $product = Product::find($id);

        return view('admin.product.edit', compact('product'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //dd($request);

        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
            'image' => 'mimes:jpeg,bmp,png',
        ]);

       // $product->id = $request->id;
        $product = Product::find($request->id);
        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->gender = $request->gender;
        
       // dd($request);
       if ($request->hasFile('image')) {

        $imageName = 'product_'.$request->id.'.'.$request->image->extension();  
     
        $request->image->move(public_path('images/products'), $imageName);

        $product->file_path = $imageName;
       }

	    $product->save();

       // $product->update($request->all());

        return redirect()->route('admin.product.list')
            ->with('success', 'Product updated successfully');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $id= $request->id;
        $product = Product::find($id);

       // dd($id);

        $product->delete();

        return redirect()->route('admin.product.list')
            ->with('success', 'Product deleted successfully');
    }
}
