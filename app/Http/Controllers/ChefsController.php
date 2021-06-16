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
	    $meal->first_name = $request->first_name;
	    $meal->last_name = $request->last_name;
	    $meal->phone_number = $request->phone_number;
	    $meal->email = $request->email;

	    $chef->save();

	   	return back();
   }

    public function index(){
	   $chefs = Chef::all();

	   return view('chefs.index', compact('chefs'));
   }


     public function destroy($id){
	   //$chefs = chef::where('id',$id)->first();
	   $chef = chef::find($id);

	   $chef->delete();

	   return back();
   }


      public function edit($id){
	   //$chefs = chef::where('id',$id)->first();
	   $chef = chef::find($id);

	   return view ('chefs.edit',compact('chef'));
   }

      public function update($id,Request $request){
	 
	   $chef = chef::find($id);
	   $chef->name = $request->name;

	   
	    $chef->save();

	   	return back();
   }

}
