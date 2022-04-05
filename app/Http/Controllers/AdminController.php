<?php

namespace App\Http\Controllers;

use App\Models\Option;
use App\Models\Product;
use App\Models\Sport;
use App\Models\User;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    function index(){
        return view('Admin_asstes.index');
    }
    function users(){
        $users=User::where('role','user')->get();
        return view('Admin_asstes.users',compact('users'));

    }
    function sports(){
        $sports=Sport::all();
        return view('Admin_asstes.sports',compact('sports'));

    }
    function Products(){
        $products=Product::all();
        $sports=Sport::all();
        return view('Admin_asstes.Products',compact('products','sports'));

    }

    function edit_product($id){
        $product=Product::find($id);
        $sports=Sport::all();
        return view('Admin_asstes.edit_product',compact('product','sports'));

    }


    function edit_sports($id){
        $sport=Sport::find($id);
        return view('Admin_asstes.edit_sports',compact('sport'));

    }

    function edit_user($id){
        $user=User::find($id);
        return view('Admin_asstes.edit_user',compact('user'));

    }
    function options(){
        $sports=Sport::all();
        $options=Option::all();
        return view('Admin_asstes.options',compact('sports','options'));
    }

    function adduser(Request $request){
        $user=new User();
        $user->name=$request->name;
        $user->number=$request->number;
        $user->email=$request->email;
        $user->address=$request->address;

        $user->password=Hash::make($request->password);
        $user->Bio=$request->bio;
        $user->save();
        return back()->with("success","Successfully Added");

    }
    function delete_user($id){
        $user=User::find($id);
        $user->delete();
        return back()->with("success","Successfully Deleted");

    }
    function update_user(Request $request){
        $user=User::find($request->id);
        $user->name=$request->name;
        $user->number=$request->number;
        $user->email=$request->email;
        $user->address=$request->address;

        if (isset($request->password)) {

                  $user->password=Hash::make($request->password);

        }

        $user->Bio=$request->bio;
        $user->save();
        // dd($user);
        return back()->with("success","Successfully Added");
    }
    function add_sports(Request $request){
        $sport=new Sport();
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $extension = $request->file->extension();
            $fileName = rand(11111, 99999) . "_." . $extension;
            $request->file->move('upload/sports/', $fileName);
            $sport->image = $fileName;
        }
        $sport->name=$request->name;
        $sport->save();
        return back()->with("success","Successfully Added");

    }
    function delete_sports($id){
        $sports=Sport::find($id);
        $destination='upload/sports/'.$sports->image;
        if (File::exists($destination)) {
            File::delete($destination);
        }
        $sports->delete();
        return back()->with("success","Successfully Deleted");

    }
    function update_sports(Request $request){
        $sport=Sport::find($request->id);
        if ($request->hasFile('file')) {
            $destination='upload/sports/'.$sport->image;
            if (File::exists($destination)) {
                File::delete($destination);
            }
            $file = $request->file('file');
            $extension = $request->file->extension();
            $fileName = rand(11111, 99999) . "_." . $extension;
            $request->file->move('upload/sports/', $fileName);
            $sport->image = $fileName;
        }
        $sport->name=$request->name;
        $sport->save();
        return back()->with("success","Successfully Updated");
    }
    function add_product(Request $request){
        $product=new Product();
        $product->name=$request->name;
        $product->description=$request->description;
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $extension = $request->file->extension();
            $fileName = rand(11111, 99999) . "_." . $extension;
            $request->file->move('upload/product/', $fileName);
            $product->image = $fileName;
        }
        $product->sports_id=$request->sports_id;
        $product->save();
        return back()->with("success","Successfully Added");


    }
    function update_product(Request $request){
        $product=Product::find($request->id);
        $product->name=$request->name;
        $product->description=$request->description;
        if ($request->hasFile('file')) {
            $destination='upload/product/'.$product->image;
            if (File::exists($destination)) {
                File::delete($destination);
            }
            $file = $request->file('file');
            $extension = $request->file->extension();
            $fileName = rand(11111, 99999) . "_." . $extension;
            $request->file->move('upload/product/', $fileName);
            $product->image = $fileName;
        }
        $product->sports_id=$request->sports_id;
        $product->save();
        return back()->with("success","Successfully Updated");
    }
    function delete_product($id){
        $product=Product::find($id);
        $destination='upload/product/'.$product->image;
        if (File::exists($destination)) {
            File::delete($destination);
        }
        $product->delete();
        return back()->with("success","Successfully Deleted");


    }
    function get_product(Request $request){
        $products=Product::where('sports_id',$request->id)->get();
        return view('Admin_asstes.get_product',compact('products'));
        // return response()->json($products);
    }
    function add_option(Request $request){
        $validated = $request->validate([

            'product_id' => 'required',
        ]);
        $option=new Option();
        $option->product_id=$request->product_id;
        $option->option=$request->option;
        $option->save();
        return back()->with("success","Successfully Added");

    }
    function delete_option($id){
        $option=Option::find($id);
        $option->delete();
        return back()->with("success","Successfully Deleted");

    }
    function edit_option($id){
        $option=Option::find($id);
        $sports=Sport::all();
        return view('Admin_asstes.edit_option',compact('option','sports'));
    }
    function update_option(Request $request){
        $validated = $request->validate([

            'product_id' => 'required',
        ]);
        $option=Option::find($request->id);
        $option->product_id=$request->product_id;
        $option->option=$request->option;
        $option->update();
        return back()->with("success","Successfully Updated");
    }

}
