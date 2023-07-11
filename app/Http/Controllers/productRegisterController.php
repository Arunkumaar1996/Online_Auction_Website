<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\addproducts;
use App\Models\sellerregisters;
use App\Models\bidderregisters;

class productRegisterController extends Controller
{
    public function index($id){
        // $datas=addproduct::get(); ,compact('datas')
       //  echo $datas;
    //    return view('/files/addform');
    $datas=sellerregisters::find($id);
    return view('/files/addform',compact('datas'));
   }
   public function save(Request $request){
    
    $validateData = $request->validate([
        'selectcategory'=> 'required',
            'productname' => 'required',
            'selectunit' => 'required',
            'unitvalue' => 'required',
            // 'email' => 'required',
            'description' => 'required',
            'actualprice' => 'required',
            'startingbidding' => 'required',
            // 'image1' => 'required|image|mimes:jpeg,png,jpg,svg|max:2048',
            // 'image2' => 'required|image|mimes:jpeg,png,jpg,svg|max:2048',
            // 'image3' => 'required|image|mimes:jpeg,png,jpg,svg|max:2048',
            
            'startingdate' => 'required',
            'startingtime' => 'required',
            'gridCheck' => 'required'
            
    ]);
    // return $request;

        $addproducts = new addproducts;
        $addproducts->selectcategory = $request->selectcategory;
        $addproducts->productname = $request->productname;
        $addproducts->selectunit = $request->selectunit;
        $addproducts->unitvalue = $request->unitvalue;
        $addproducts->email = $request->email;
        $addproducts->description = $request->description;
        $addproducts->actualprice = $request->actualprice;
        $addproducts->startingbidding = $request->startingbidding;
        
    
    if($request->hasFile('image1')){
        $validatedData = $request->validate([
            'image1' => 'image|mimes:jpeg,png,jpg,svg|max:2048',
        ]);
        $image=$request->file('image1');
        $new_image_name=date('y-m-d').time().".".$image->extension();
        $destination_path= public_path('/onlineAuction/images');
        $image->move($destination_path,$new_image_name);
        $addproducts->image_url1="onlineAuction/images/".$new_image_name;
    
    // 'image2' => 'required',
    if($request->hasFile('image2')){
        $validatedData = $request->validate([
            'image2' => 'image|mimes:jpeg,png,jpg,svg|max:2048',
        ]);
        $image=$request->file('image2');
        $new_image_name=date('y-md-d').time().".".$image->extension();
        $destination_path= public_path('/onlineAuction/images');
        $image->move($destination_path,$new_image_name);
        $addproducts->image_url2="onlineAuction/images/".$new_image_name;
    
    // 'image3' => 'required',
    if($request->hasFile('image3')){
        $validatedData = $request->validate([
            'image3' => 'image|mimes:jpeg,png,jpg,svg|max:2048',
        ]);
        $image=$request->file('image3');
        $new_image_name=date('y-md-md').time().".".$image->extension();
        $destination_path= public_path('/onlineAuction/images');
        $image->move($destination_path,$new_image_name);
        $addproducts->image_url3="onlineAuction/images/".$new_image_name;
        // return $validatedData;
    }}}

        $addproducts->startingdate = $request->startingdate;
        $addproducts->startingtime = $request->startingtime;
        $addproducts->status = $request->status;
        $addproducts->gridCheck = $request->gridCheck;
        $addproducts->save();
        // return $addproducts;
        return redirect('sellerDashboard');
        // $datas=addproducts::get();
        // return view("/files/mainProduct",compact('datas'));
}
public function mainProducts(){
    $datas=addproducts::get();
    return view('/files/mainProduct',compact('datas'));
}

public function homepage(){
    return view('/files/homepage');
}
public function goldProduct(){
    $datas=addproducts::where('selectcategory','Gold Category')->get();
    
    return view('/files/goldProduct',compact('datas'));
}
public function silverProduct(){
    $datas=addproducts::where('selectcategory','Silver Category')->get();
    
    return view('/files/silverProducts',compact('datas'));
}
public function diamondProduct(){
    $datas=addproducts::where('selectcategory','Diamond Category')->get();
    // return $datas;
    
    return view('/files/diamondProduct',compact('datas'));
}
public function productDetails($id){
    // $datas=addproduct::where('selectcategory','Diamond Category')->get();
    $datas=addproducts::find($id);
    
    return view('/files/productDetails',compact('datas'));
}
}