<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\addproducts;
use App\Models\sellerregisters;
use App\Models\bidderregisters;

class bidderProcessController extends Controller
{
    public function goldProduct1($id){
        $bidder=bidderregisters::find($id);
        $datas=addproducts::where('selectcategory','Gold Category')->get();
    // return  $bidder;
        return view('/files/bidder/bidderGold',compact('bidder','datas'));
    }
    public function silverProduct1($id){
        $bidder=bidderregisters::find($id);
        $datas=addproducts::where('selectcategory','Silver Category')->get();
    // return  $bidder;
        return view('/files/bidder/bidderGold',compact('bidder','datas'));
    }
    public function diamondProduct1($id){
        $bidder=bidderregisters::find($id);
        $datas=addproducts::where('selectcategory','Diamond Category')->get();
    // return  $bidder;
        return view('/files/bidder/bidderGold',compact('bidder','datas'));
    }
    public function productDetails1($id,$email){
        $bidder=bidderregisters::find($id);
        // $datas=addproduct::where('selectcategory','Diamond Category')->get();
        $datas=addproducts::find($id);
        
        return view('/files/productDetails',compact('datas'));
    }
}
