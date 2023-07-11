<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class addproducts extends Model
{
    use HasFactory;
    protected $table="addproducts";
    protected $fillable=['selectcategory','productname','selectunit','unitvalue','email','description','actualprice','startingbidding','image_url1','image_url2','image_url3','startingdate','startingtime','gridCheck','status'];
}
