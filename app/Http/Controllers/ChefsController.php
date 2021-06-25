<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Chef;

class ChefsController extends Controller
{
     public function create(){
   	return view('chefs.create');
   }

    public function store(Request $request){
	    $chef = new Chef;
	    $chef->first_name   = $request->first_name;
	    $chef->last_name    = $request->last_name;
	    $chef->phone_number = $request->phone_number;
	    $chef->email        = $request->email;

	    $chef->save();
	   	return back();
   }

    public function index(){
	   $chefs = Chef::with('branches')->get();

	   return view('chefs.index', compact('chefs'));
   }


     public function destroy($id){
	   //$chefs = chef::where('id',$id)->first();
	   $chef = Chef::find($id);

	   $chef->delete();

	   return back();
   }


      public function edit($id){
	   //$chefs = chef::where('id',$id)->first();
	   $chef = Chef::find($id);

	   return view ('chefs.edit',compact('chef'));
   }

      public function update($id,Request $request){
	 
	   $chef = Chef::find($id);
	    $chef->first_name   = $request->first_name;
	    $chef->last_name    = $request->last_name;
	    $chef->phone_number = $request->phone_number;
	    $chef->email        = $request->email;

	    $chef->save();
	   	return back();
	   }

}
