<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\sellerregisters;
use App\Models\addproducts;

class sellerLoginController extends Controller
{
    public function authenticate(Request $request){
        $request->validate([
            'email'=>'required',
            'password'=>'required'
        ]);
        // $email=$request->input('email');
        // $password=$request->input('password');
        // if (Auth::attempt(['email'=>$email,'password'=>$password])) {
        //     $data2=sellerregisters::where('email',$email)->first();
        //     Auth::login($data2);
        //     return redirect('/authenticate');
        // }
        // // $name2="meen@gmail.com";
        // // if($name2===$email){
        // // return redirect('sellerDashboard');}
        // else{
        //     return back()->withErrors(['Invalid Credentials']);
        // }
        $credetials=
        ['email'=> $request->email,
        'password'=> $request->password,];
        //  return $credetials['email'];
        // if(Auth::attempt($credetials)){
            $users=sellerregisters::where('email',$credetials['email'])->first();
            if($users['password']==$credetials['password']){
               $data=  $users['name'].$users['email'];
                // return redirect('/home');
            Auth::login($users);
            
            // return redirect('/sellerDashboard')->with($data);
            // $datas=sellerregisters::get();
        return view("/files/sellerDashboard",compact('users'));
        }
        else{
            return back()->withErrors(['Invalid Credentials']);
        }

    }
    public function sellerStatus($email){
        // $datas=addproducts::find($email);
        // return view('/files/sellerStatus',compact('datas'));
        $datas=addproducts::where('email',$email)->get();
        // return $data;
    
    return view('/files/sellerStatus',compact('datas'));
    }
}
