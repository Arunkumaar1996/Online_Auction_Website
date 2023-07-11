<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\bidderregisters;
use App\Models\addproducts;

class bidderLoginController extends Controller
{
    public function authenticate(Request $request){
        $request->validate([
            'email'=>'required',
            'password'=>'required'
        ]);
        // $email=$request->input('email');
        // $password=$request->input('password');
        // if (Auth::attempt(['email'=>$email,'password'=>$password])) {
        //     $data2=bidderregisters::where('email',$email)->first();
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
            $users=bidderregisters::where('email',$credetials['email'])->first();
            if($users['password']==$credetials['password']){
               $data=  $users['name'].$users['email'];
                // return redirect('/home');
            Auth::login($users);
            // return  $users;
            
            // return redirect('homepage')->with($data);
            // $datas=bidderregisters::get();
        return view("/files/bidder/bidderhomepage",compact('users'));
        }
        else{
            return back()->withErrors(['Invalid Credentials']);
        }

    }
    // public function goldProduct($id){
        
    // }
    // public function sellerStatus($email){
    //     // $datas=addproducts::find($email);
    //     // return view('/files/sellerStatus',compact('datas'));
    //     $datas=addproducts::where('email',$email)->get();
    //     // return $data;
    
    // return view('/files/sellerStatus',compact('datas'));
    // }
}
