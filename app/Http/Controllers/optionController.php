<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product_option;


class optionController extends Controller
{
    function save_product_option(Request $request){
       
        $user=new product_option();

        $user->product_id=$request->product_id;
        
            $user->parent=$request->parent;
       
            $user->chalid=$request->chalid;

        
            $user->property=$request->name;
            $user->save();
            if($user->save()){
                return response()->json(200);
            }
            
       
           

    }
    function get_edit_product(Request $request){
        //dd($request->id,$request->id2);
        $products=product_option::where('parent',$request->id)->where('chalid',$request->id2)->where('product_id',$request->p_id)->get();
        //dd($products);
        $id=$request->id;
        return view('Admin_asstes.get_edit_product' ,compact('id','products'));
    }
}
