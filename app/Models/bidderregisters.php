<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as winner;

class bidderregisters extends winner
{
    use HasFactory;
    protected $table="bidderegisters";
    protected $fillable=['email','password','name','date_of_birth','district','address','mobile_no','pan_card1','bank_book1','photo1','aadhar_front1','aadhar_back1','update'];
}
