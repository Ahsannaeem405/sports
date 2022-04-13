<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Sport;
use App\Models\roaster;
use App\Models\product_option;

use App\Models\roaster_detail;
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
    function option($id){
        $data=product_option::where('product_id',$id)->get();

        return view('user.option',compact('data'));
    }
    function add_roaster(Request $request){
    // dd($request->all());
//    dd($request->file);
        $data2 = [];
        $roaster_data=[];
        $fileName=[];

foreach ($request->name as $item => $v) {
  
      
    foreach ($request->file[$item] as $file => $g) {
      
        $extension = $g->extension();
        $fileName= rand(11111, 99999) . "_." . $extension;
        $g->move('upload/roaster/', $fileName);
    }
    
        //  $opt=[
        //         'name' => $v,
            
        //  ];
     
         
    
            $roaster=roaster::create([
'name'=>$request->name[$item][0],
'image'=>$fileName,


            ]);
            foreach ($request->number[$item] as $key => $value) {
                $roaster_data[$item][$key]['roaster_id']=$roaster->id;
                $roaster_data[$item][$key]['name']=$request->sname[$item];
                // $roaster_data[$item][$key]['top_size']=$request->top_size[$item];
                // $roaster_data[$item][$key]['bottom_size']=$request->bottom_size[$item];
                // $roaster_data[$item][$key]['notes']=$request->notes[$item];
              
            }

            foreach ($request->sname[$item] as $key => $value) {
                $roaster_data[$item][$key]['name']=$value;
            }

            foreach ($request->top_size[$item] as $key => $value) {
                $roaster_data[$item][$key]['top_size']=$value;
            }
            foreach ($request->bottom_size[$item] as $key => $value) {
                $roaster_data[$item][$key]['bottom_size']=$value;
            }
            foreach ($request->notes[$item] as $key => $value) {
                $roaster_data[$item][$key]['notes']=$value;
            }
            
        
}

foreach ($roaster_data as $key => $value) {
    roaster_detail::insert($value);
}
return back();
    }
}
