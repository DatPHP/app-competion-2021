<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Paginator;

class UserController extends Controller
{

      public function showRegisterForm(){

        //dd("vo day kho ta");

        return view('user.create');

      }
  
      public function storeUser(Request $request){
       
        $messages = [
          'required' => 'Trường :attribute bắt buộc nhập.',
          'email'    => 'Trường :attribute phải có định dạng email'
      ];
      $validator = Validator::make($request->all(), [
              'name'     => 'required|max:255',
              'email'    => 'required|email',
              'password' => 'required',
  
          ], $messages);
  
          if ($validator->fails()) {
              return redirect('register')
                      ->withErrors($validator)
                      ->withInput();
          } else {

              $active = $request->has('active')? 1 : 0;
              if($request->id)
              {   
                  //dd('vo if');
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
              $users->password = bcrypt($request->password);
              $users->gender = $request->gender;
              $users->level = $request->level;
              $users->phone = $request->phone;
              $users->address = $request->address;
              $users->gender = $request->gender;
              $users->status = $active;
              $users->roles = 'regular';
              $users->save();

            
            
             // dd($users);
          
            return redirect('admin/user/list')
                ->with('message', 'Đăng ký thành công.');
          }
      }

      public function getlist(){
        /*
        $user =  new User;
        $users = $user->simplePaginate(1);
        */

        $users =  User::paginate(3);

        
        return view('user.users-list', ['users' => $users]);
      }


      public function edit(Request $request){
        //var_dump($request->id);
        $id= $request->id;
        $user = User::findorFail($id);
        return view('user.create', ['user' => $user, 'id'=>$id]);
      }


      public function delete(Request $request){
          $id= $request->id;
          $user = User::find($id);
          $user->delete();
          return redirect('admin/user/list');
      }

}