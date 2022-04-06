<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Sport;
use Illuminate\Http\Request;

class UserController extends Controller
{
    function index(){
        $sports=Sport::all();
        return view('user.home',compact('sports'));
    }
    function product($id){
        $products=Product::where('sports_id',$id)->get();
        return view('user.product',compact('products'));

    }
    function option(){
        return view('user.option');
    }
}
