<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use Session;
use DB;

class UserController extends Controller
{
    public function login(){
       
        return view('login');
    }

    public function registration(){
       
        return view('register');
    }
  
    public function adminlogin(Request $request){

        $user_data = array(
            'email' => $request->get('email'),
            'password' => $request->get('password')
        );

        if(Auth::guard()->attempt($user_data))
        {   
            $user=Auth::guard()->user();
            if($user->designation=='admin')
            {
                return redirect('userlist');
            }else{
             
                return redirect('login');
            }
    
        } else{
      
            return redirect()->back()->with('message', 'Wrong Login Details');
         
        }
    }
    public function userregistration(Request $request){
    // return $request;
        $profile_img = $request->profile_image;
        $filename = $profile_img->getClientOriginalName();
        $profile_img->move('ProfileImage',$filename);
        

        $User=new User;
        $User->name=$request->name;
        $User->phone=$request->phone;
        $User->city=$request->city;
        $User->address=$request->address;
        $User->designation=$request->designation;
        $User->email=$request->email;
        $User->profile_img=$filename;
        $User->password=Hash::make(request('password'));
        $User->save();
        return redirect('login');
    }

    public function manageuser(){
        $users=User::all();
        return view('userlist',compact('users'));
    }

    public function userdelete($id){
        $users=User::find($id)->delete();
        return redirect()->back();
    }
 
    public function useredit(Request $request ,$id)
    {
       $user=User::find($id);
       $user->update($request->all());
       return view('edit',compact('user'));
    }

    public function updateuser(Request $request, $id){

        if( $request->profile_image)
        {
        $profile_img = $request->profile_image;
        $filename = $profile_img->getClientOriginalName();
        $profile_img->move('ProfileImage',$filename);

        $updateuser=DB::table('users')->where('id',$id)->update(
            [
            'name'=>$request->name,
            'phone'=>$request->phone,
            'city'=>$request->city,
            'address'=>$request->address,
            'designation'=>$request->designation,
            'email'=>$request->email,
            'profile_img'=>$filename,
            'password'=>Hash::make(request('password'))
            ]);
           
        }else{
            $updateuser=DB::table('users')->where('id',$id)->update(
                [
                'name'=>$request->name,
                'phone'=>$request->phone,
                'city'=>$request->city,
                'address'=>$request->address,
                'designation'=>$request->designation,
                'email'=>$request->email,
               
                'password'=>Hash::make(request('password'))
                ]);
        }
        return redirect('userlist');
    }

    public function logout(Request $request){
        Auth::logout();
        return redirect('login');
    }
}