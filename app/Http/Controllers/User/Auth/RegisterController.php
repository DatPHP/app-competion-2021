<?php

namespace App\Http\Controllers\User\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
//use Validator;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Paginator;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;


class RegisterController extends Controller
{
    public function showRegisterForm(){
        //dd("vo form đang ki");
        return view('user.auth.register');
    }

    public function storeUser(Request $request){

       // dd($request);
       // dd("vo store");
        //dd($request);
        
        $messages = [
          'required' => 'Trường :attribute bắt buộc nhập.',
          'email'    => 'Trường :attribute phải có định dạng email'
        ];
          
            $validator = Validator::make($request->all(), [
                    'name' => 'required|max:255',
                    'email' => 'required|string|email|max:255|unique:users',
                    'password' => 'required|min:6'
                ], $messages);

         
          if ($validator->fails()) {

              //dd("vo day vi xac thuc sai");

              return redirect('register')
                      ->withErrors($validator)
                      ->withInput();
          } else {

              $active = $request->has('active')? 1 : 0;
              if($request->id)
              {   
                  //dd("vo if");
                  $users = User::find($request->id);
                 
              }
              else 
              {
                //dd("vo else");

                //dd($request);
                $users = new User;
              }
              $users->name = $request->name;
              $users->email = $request->email;

              if($request->id)
              {
                User::find(auth()->user()->id)->update(['password'=> Hash::make($request->password)]);
              }
              else 
              {
                $users->password =  Hash::make($request->password);
               
              }
              $users->status = $active;
              $users->roles = 'regular';
              $users->save();

            return redirect()->route('home');
          }

        }

}
