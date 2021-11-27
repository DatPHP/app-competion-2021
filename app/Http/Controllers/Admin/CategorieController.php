<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Categorie;
use App\Models\Product;

  
class CategorieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Categorie::all();
    
        return view('admin.categories.index',compact('categories'));
    }
     
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.categories.create');
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'categories_name' => 'required',
        ]);
    
        Categorie::create($request->all());
     
        return redirect()->route('categories.index')
                        ->with('success','Product created successfully.');
    }
     
    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Categorie $category)
    {
        //dd($category);
        return view('admin.categories.show',compact('category'));
    } 
     
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Categorie  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Categorie $category)
    {
       // dd($category);
        return view('admin.categories.edit',compact('category'));
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Categorie  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Categorie $category)
    {
        $request->validate([
            'categories_name' => 'required',
        ]);
    
        $category->update($request->all());

        return redirect()->route('categories.index')
                        ->with('success','Product created successfully.');

    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Categorie  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Categorie $category)
    {
        $category->delete();
    
        return redirect()->route('categories.index')
        ->with('success','Product deleted successfully.');
    }
}