<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Photo;

class ImageUploadController extends Controller
{

         /**

     * Display a listing of the resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function imageUpload()

    {

        return view('admin.imageUpload');

    }

    

    /**

     * Display a listing of the resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function imageUploadPost(Request $request)

    {

        $request->validate([

            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

        ]);

        $imageName = time().'.'.$request->image->extension();  


        $name =  $imageName;

        //$request->file('image')->getClientOriginalName();
        
      //  $path = $request->file('image')->store('public/images/');

        $path = 'images/'.$name;     
        $save = new Photo;
        $save->name = $name;
        $save->path = $path;
        $save->save();
        $request->image->move(public_path('images'), $imageName);

  

        /* Store $imageName name in DATABASE from HERE */

    

        return back()

            ->with('success','You have successfully upload image.')

            ->with('image',$imageName); 

    }
}
