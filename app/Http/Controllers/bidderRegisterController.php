<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\bidderregisters;

class bidderRegisterController extends Controller
{
    public function index(){
        // $datas=addproduct::get();
       //  echo $datas;
       return view('/files/bidderRegister');
   }

   public function save(Request $request){
    
    $validateData = $request->validate([
        'email'=> 'required',
        'password' => 'required|confirmed',
        // 'password_confirmation' => 'required',
        'name' => 'required',
        'date_of_birth' => 'required',
        'district' => 'required',
        'address' => 'required',
        'mobile_no' => 'required',
        'pan_card' => 'required',
        'bank_book' => 'required',
        'photo' => 'required',
        'aadhar_front' => 'required',
        'aadhar_back' => 'required'
    ]);
    // $addproduct = addproduct::create([
    //     'selectcategory'=>$request->selectcategory,
    //     'productname'=>$request->productname,
    //     'weight'=>$request->weight,
    //     'description'=>$request->description,
    //     'startingbidding'=>$request->startingbidding,
    //     'image1'=>$request->image1,
    //     'gridCheck'=>$request->gridCheck,
        // $addproduct->save()
    // ]);
    $bidderregisters = new bidderregisters;
    $bidderregisters->email = $request->email;
    $bidderregisters->password = $request->password;
    $bidderregisters->name = $request->name;
    $bidderregisters->date_of_birth = $request->date_of_birth;
    $bidderregisters->district = $request->district;
    $bidderregisters->address = $request->address;
    $bidderregisters->mobile_no = $request->mobile_no;
    $bidderregisters->update = $request->update;
    // $bidderregisters->pan_card = $request->pan_card;
    // $bidderregisters->bank_book = $request->bank_book;
    // $bidderregisters->photo = $request->photo;
    // $bidderregisters->aadhar_front = $request->aadhar_front;
    // $bidderregisters->aadhar_back = $request->aadhar_back;
    
    if($request->hasFile('pan_card')){
        $validatedData = $request->validate([
            'pan_card' => 'image|mimes:jpeg,png,jpg,svg|max:2048',
        ]);
        $image=$request->file('pan_card');
        $new_image_name=date('y-m-d').time().".".$image->extension();
        $destination_path= public_path('/onlineAuction/bidderimage');
        $image->move($destination_path,$new_image_name);
        $bidderregisters->pan_card1="onlineAuction/bidderimage/".$new_image_name;
    
        if($request->hasFile('bank_book')){
            $validatedData = $request->validate([
                'bank_book' => 'image|mimes:jpeg,png,jpg,svg|max:2048',
            ]);
            $image=$request->file('bank_book');
            $new_image_name=date('y-md-d').time().".".$image->extension();
            $destination_path= public_path('/onlineAuction/bidderimage');
            $image->move($destination_path,$new_image_name);
            $bidderregisters->bank_book1="onlineAuction/bidderimage/".$new_image_name;
    
    if($request->hasFile('photo')){
        $validatedData = $request->validate([
            'photo' => 'image|mimes:jpeg,png,jpg,svg|max:2048',
        ]);
        $image=$request->file('photo');
        $new_image_name=date('y-dm-d').time().".".$image->extension();
        $destination_path= public_path('/onlineAuction/bidderimage');
        $image->move($destination_path,$new_image_name);
        $bidderregisters->photo1="onlineAuction/bidderimage/".$new_image_name;
    
    if($request->hasFile('aadhar_front')){
        $validatedData = $request->validate([
            'aadhar_front' => 'image|mimes:jpeg,png,jpg,svg|max:2048',
        ]);
        $image=$request->file('aadhar_front');
        $new_image_name=date('d-md-y').time().".".$image->extension();
        $destination_path= public_path('/onlineAuction/bidderimage');
        $image->move($destination_path,$new_image_name);
        $bidderregisters->aadhar_front1="onlineAuction/bidderimage/".$new_image_name;
    
    if($request->hasFile('aadhar_back')){
        $validatedData = $request->validate([
            'aadhar_back' => 'image|mimes:jpeg,png,jpg,svg|max:2048',
        ]);
        $image=$request->file('aadhar_back');
        $new_image_name=date('y-md-y').time().".".$image->extension();
        $destination_path= public_path('/onlineAuction/bidderimage');
        $image->move($destination_path,$new_image_name);
        $bidderregisters->aadhar_back1="onlineAuction/bidderimage/".$new_image_name;
    }}}}}
        
        $bidderregisters->save();
      

    
    
    // return $addproduct;
    return $bidderregisters;

// $datas=addproduct::get();
//     return view("/files/mainProduct",compact('datas'));
}
}
