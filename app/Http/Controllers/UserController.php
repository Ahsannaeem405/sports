<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Sport;
use App\Models\roaster;
use App\Models\product_option;
use App\Models\place_order;
use App\Models\order_lettering;


use App\Models\roaster_detail;
use Illuminate\Http\Request;
use Auth;
use DB;
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

        return view('user.option',compact('data','id'));
    }
    function add_roaster(Request $request){
    
//    dd($request->all());
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
                'order_id'=>$request->or_id,



            ]);
            foreach ($request->number[$item] as $key => $value) {
                $roaster_data[$item][$key]['roaster_id']=$roaster->id;
                $roaster_data[$item][$key]['number']=$value;
               
              
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
    
    function add_order(Request $request){
       
        if(isset($request->po1))
        {
            $po1 =$request->po1;
            $po1=implode(",",$po1);

        }
        else{
            $po1 =null;

        }
        if(isset($request->po2))
        {
            $po2 =$request->po2;
            $po2=implode(",",$po2);

        }
        else{
            $po2 =null;

        }
        if(isset($request->po3))
        {
            $po3 =$request->po3;
            $po3=implode(",",$po3);

        }
        else{
            $po3 =null;

        }
        if(isset($request->po4))
        {
            $po4 =$request->po4;
            $po4=implode(",",$po4);

        }
        else{
            $po4 =null;

        }
        if(isset($request->co1))
        {
            $co1 =$request->co1;
            $co1=implode(",",$co1);

        }
        else{
            $co1 =null;

        }
        if(isset($request->co2))
        {
            $co2 =$request->co2;
            $co2=implode(",",$co2);

        }
        else{
            $co2 =null;

        }
        if(isset($request->co3))
        {
            $co3 =$request->co3;
            $co3=implode(",",$co3);

        }
        else{
            $co3 =null;

        }
        if(isset($request->co4))
        {
            $co4 =$request->co4;
            $co4=implode(",",$co4);

        }
        else{
            $co4 =null;

        }

//dd($request,$po1,$po3,$po2,$po4);

            
            //$table->text('wo_id')->nullable();
            //$table->text('file')->nullable();
            
            //$table->text('logo1')->nullable();
           
        $use=new place_order();
        $use->team_name=$request->team_name;

        $use->po1=$po1;
        $use->po2=$po2;
        $use->po3=$po3;
        $use->po4=$po4;
        $use->co1=$co1;
        $use->co2=$co2;
        $use->co3=$co3;
        $use->co4=$co4;
        $use->notes=$request->notes;
        $use->prod_id=$request->pro_id;
        
        $use->colo1=$request->colo1;
        $use->colo2=$request->colo2;
        $use->colo3=$request->colo3;
        $use->loc1=$request->loc1;
        $use->loc2=$request->loc2;
        $use->loc3=$request->loc3;
        $use->size1=$request->size1;
        $use->size2=$request->size2;
        $use->size3=$request->size3;
        if ($request->hasFile('logo1')) {
                  

            $file = $request->file('logo1');
            $extension = $request->logo1->extension();
            $fileName1 = time(). "_." .$extension;
            $request->logo1->move('upload/', $fileName1);
            $use->logo1 = $fileName1;
        }
        if ($request->hasFile('file2')) {
                  

            $file = $request->file('file2');
            $extension = $request->file2->extension();
            $fileName12 = time(). "2_." .$extension;
            $request->file2->move('upload/', $fileName12);
            $use->logo2 = $fileName12;
        }
        if ($request->hasFile('file3')) {
                  

            $file = $request->file('file3');
            $extension = $request->file3->extension();
            $fileName13 = time(). "3_." .$extension;
            $request->file3->move('upload/', $fileName13);
            $use->logo3 = $fileName13;
        }
        if ($request->hasFile('file')) {
                  

            $file = $request->file('file');
            $extension = $request->file->extension();
            $fileName2 = time(). "1_." .$extension;
            $request->file->move('upload/', $fileName2);
            $use->file = $fileName2;
        }
        
        $use->user_id=Auth::user()->id;
        $use->save();

         for($i=0; $i< count($request->type); $i++ )

            {
                
                $quite=new order_lettering();

                $quite->type=$request->type[$i];
                if(isset($request->location[$i]))
                {

                    $quite->location=$request->location[$i];
                }
                if(isset($request->font_name[$i]))
                {
                    $quite->font_name=$request->font_name[$i];
                }
                if(isset($request->main_color[$i]))
                {

                    $main_color =$request->main_color[$i];
                    $main_color=implode(",",$main_color);

        
                    $quite->main_color=$main_color;
                }
                if(isset($request->trim_color[$i]))
                {
                    $trim_color =$request->trim_color[$i];
                    $trim_color=implode(",",$trim_color);

        
                    $quite->trim_color=$trim_color;
                    
                } 
                if(isset($request->size[$i]))
                {
                    $size =$request->size[$i];
                    $size=implode(",",$size);

        
                    $quite->size=$size;
                    
                } 
                
                if(isset($request->text[$i]))
                {
                    $quite->text=$request->text[$i];
                }
                $quite->order_id=$use->id;
                
                
                $quite->save();
            }

            
            return redirect()->route('roster', ['id' => $use->id]);

           



    }
    
    function rosters($id)
    {

         return view('user.roasters',compact('id'));

    }
    
    function get_previous(Request $request){
        $id=$request->pro_id;
        $pre_data=place_order::find($request->id);
        $data=product_option::where('product_id',$request->pro_id)->get();

        
        return view('user.get_previous' ,compact('data','pre_data','id'));


    }
    function pre_option($idd){
        
        $pre_data=place_order::find($idd);
        $id=$pre_data->prod_id;

        $data=product_option::where('product_id',$id)->get();

        
        return view('user.pre_option' ,compact('data','pre_data','id'));


    }
    function updat_order(Request $request,$id){

         DB::table('place_orders')
            ->where('id', $id)->delete();
       
        if(isset($request->po1))
        {
            $po1 =$request->po1;
            $po1=implode(",",$po1);

        }
        else{
            $po1 =null;

        }
        if(isset($request->po2))
        {
            $po2 =$request->po2;
            $po2=implode(",",$po2);

        }
        else{
            $po2 =null;

        }
        if(isset($request->po3))
        {
            $po3 =$request->po3;
            $po3=implode(",",$po3);

        }
        else{
            $po3 =null;

        }
        if(isset($request->po4))
        {
            $po4 =$request->po4;
            $po4=implode(",",$po4);

        }
        else{
            $po4 =null;

        }
        if(isset($request->co1))
        {
            $co1 =$request->co1;
            $co1=implode(",",$co1);

        }
        else{
            $co1 =null;

        }
        if(isset($request->co2))
        {
            $co2 =$request->co2;
            $co2=implode(",",$co2);

        }
        else{
            $co2 =null;

        }
        if(isset($request->co3))
        {
            $co3 =$request->co3;
            $co3=implode(",",$co3);

        }
        else{
            $co3 =null;

        }
        if(isset($request->co4))
        {
            $co4 =$request->co4;
            $co4=implode(",",$co4);

        }
        else{
            $co4 =null;

        }

//dd($request,$po1,$po3,$po2,$po4);

            
            //$table->text('wo_id')->nullable();
            //$table->text('file')->nullable();
            
            //$table->text('logo1')->nullable();
           
        $use=new place_order();
        $use->team_name=$request->team_name;

        $use->po1=$po1;
        $use->po2=$po2;
        $use->po3=$po3;
        $use->po4=$po4;
        $use->co1=$co1;
        $use->co2=$co2;
        $use->co3=$co3;
        $use->co4=$co4;
        $use->notes=$request->notes;
        $use->prod_id=$request->pro_id;
        
        $use->colo1=$request->colo1;
        $use->colo2=$request->colo2;
        $use->colo3=$request->colo3;
        $use->loc1=$request->loc1;
        $use->loc2=$request->loc2;
        $use->loc3=$request->loc3;
        $use->size1=$request->size1;
        $use->size2=$request->size2;
        $use->size3=$request->size3;
        if ($request->hasFile('logo1')) {
                  

            $file = $request->file('logo1');
            $extension = $request->logo1->extension();
            $fileName1 = time(). "_." .$extension;
            $request->logo1->move('upload/', $fileName1);
            $use->logo1 = $fileName1;
        }
        if ($request->hasFile('file2')) {
                  

            $file = $request->file('file2');
            $extension = $request->file2->extension();
            $fileName12 = time(). "2_." .$extension;
            $request->file2->move('upload/', $fileName12);
            $use->logo2 = $fileName12;
        }
        if ($request->hasFile('file3')) {
                  

            $file = $request->file('file3');
            $extension = $request->file3->extension();
            $fileName13 = time(). "3_." .$extension;
            $request->file3->move('upload/', $fileName13);
            $use->logo3 = $fileName13;
        }
        if ($request->hasFile('file')) {
                  

            $file = $request->file('file');
            $extension = $request->file->extension();
            $fileName2 = time(). "1_." .$extension;
            $request->file->move('upload/', $fileName2);
            $use->file = $fileName2;
        }
        
        $use->user_id=Auth::user()->id;
        $use->save();

         for($i=0; $i< count($request->type); $i++ )

            {
                
                $quite=new order_lettering();

                $quite->type=$request->type[$i];
                if(isset($request->location[$i]))
                {

                    $quite->location=$request->location[$i];
                }
                if(isset($request->font_name[$i]))
                {
                    $quite->font_name=$request->font_name[$i];
                }
                if(isset($request->main_color[$i]))
                {

                    $main_color =$request->main_color[$i];
                    $main_color=implode(",",$main_color);

        
                    $quite->main_color=$main_color;
                }
                if(isset($request->trim_color[$i]))
                {
                    $trim_color =$request->trim_color[$i];
                    $trim_color=implode(",",$trim_color);

        
                    $quite->trim_color=$trim_color;
                    
                } 
                if(isset($request->size[$i]))
                {
                    $size =$request->size[$i];
                    $size=implode(",",$size);

        
                    $quite->size=$size;
                    
                } 
                
                if(isset($request->text[$i]))
                {
                    $quite->text=$request->text[$i];
                }
                $quite->order_id=$use->id;
                
                
                $quite->save();
            }

            
            return redirect()->route('roster', ['id' => $use->id]);

           



    }
    
}
 