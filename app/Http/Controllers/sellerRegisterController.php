<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\sellerregisters;
use Illuminate\Support\Facades\Auth;

class sellerRegisterController extends Controller
{
    public function index(){
        // $datas=addproduct::get();
       //  echo $datas;
       return view('/files/sellerRegister');
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
    $sellerregisters = new sellerregisters;
    $sellerregisters->email = $request->email;
    $sellerregisters->password = $request->password;
    $sellerregisters->name = $request->name;
    $sellerregisters->date_of_birth = $request->date_of_birth;
    $sellerregisters->district = $request->district;
    $sellerregisters->address = $request->address;
    $sellerregisters->mobile_no = $request->mobile_no;
    // $sellerregister->pan_card = $request->pan_card;
    // $sellerregister->bank_book = $request->bank_book;
    // $sellerregister->photo = $request->photo;
    // $sellerregister->aadhar_front = $request->aadhar_front;
    // $sellerregister->aadhar_back = $request->aadhar_back;
    
    if($request->hasFile('pan_card')){
        $validatedData = $request->validate([
            'pan_card' => 'image|mimes:jpeg,png,jpg,svg|max:2048',
        ]);
        $image=$request->file('pan_card');
        $new_image_name=date('y-m-d').time().".".$image->extension();
        $destination_path= public_path('/onlineAuction/sellerimage');
        $image->move($destination_path,$new_image_name);
        $sellerregisters->pan_card1="onlineAuction/sellerimage/".$new_image_name;
    
        if($request->hasFile('bank_book')){
            $validatedData = $request->validate([
                'bank_book' => 'image|mimes:jpeg,png,jpg,svg|max:2048',
            ]);
            $image=$request->file('bank_book');
            $new_image_name=date('y-md-d').time().".".$image->extension();
            $destination_path= public_path('/onlineAuction/sellerimage');
            $image->move($destination_path,$new_image_name);
            $sellerregisters->bank_book1="onlineAuction/sellerimage/".$new_image_name;
    
    if($request->hasFile('photo')){
        $validatedData = $request->validate([
            'photo' => 'image|mimes:jpeg,png,jpg,svg|max:2048',
        ]);
        $image=$request->file('photo');
        $new_image_name=date('y-dm-d').time().".".$image->extension();
        $destination_path= public_path('/onlineAuction/sellerimage');
        $image->move($destination_path,$new_image_name);
        $sellerregisters->photo1="onlineAuction/sellerimage/".$new_image_name;
    
    if($request->hasFile('aadhar_front')){
        $validatedData = $request->validate([
            'aadhar_front' => 'image|mimes:jpeg,png,jpg,svg|max:2048',
        ]);
        $image=$request->file('aadhar_front');
        $new_image_name=date('d-md-y').time().".".$image->extension();
        $destination_path= public_path('/onlineAuction/sellerimage');
        $image->move($destination_path,$new_image_name);
        $sellerregisters->aadhar_front1="onlineAuction/sellerimage/".$new_image_name;
    
    if($request->hasFile('aadhar_back')){
        $validatedData = $request->validate([
            'aadhar_back' => 'image|mimes:jpeg,png,jpg,svg|max:2048',
        ]);
        $image=$request->file('aadhar_back');
        $new_image_name=date('y-md-y').time().".".$image->extension();
        $destination_path= public_path('/onlineAuction/sellerimage');
        $image->move($destination_path,$new_image_name);
        $sellerregisters->aadhar_back1="onlineAuction/sellerimage/".$new_image_name;
    }}}}}
        $sellerregisters->status = $request->status;
        $sellerregisters->save();
      
    Auth::login($sellerregisters);
    return redirect('sellerLogin');    
    
    // return $addproduct;
    return $sellerregisters;

// $datas=addproduct::get();
//     return view("/files/mainProduct",compact('datas'));
}
public function sellerDashboard(){
    // $datas=addproduct::get();
   //  echo $datas;
   return view('/files/sellerDashboard');
}
}
