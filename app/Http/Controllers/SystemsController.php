<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SystemsController extends Controller
{
      public function create(){
   	return view('systems.create');
   }

    public function store(Request $request){
	    $system = new System;
	    $system->about_us = $request->about_us;
	    $meal->participation = $request->participation;
	    $meal->email = $request->email;
	    $meal->services = $request->services;
	    $meal->phone_number = $request->phone_number;
	    $meal->location = $request->location;

	    $system->save();

	   	return back();
   }

    public function index(){
	   $systems = System::all();

	   return view('systems.index', compact('systems'));
   }


     public function destroy($id){
	   //$systems = system::where('id',$id)->first();
	   $system = system::find($id);

	   $system->delete();

	   return back();
   }


      public function edit($id){
	   //$systems = system::where('id',$id)->first();
	   $system = system::find($id);

	   return view ('systems.edit',compact('system'));
   }

      public function update($id,Request $request){
	 
	   $system = system::find($id);
	   $system->name = $request->name;

	   
	    $system->save();

	   	return back();
   }
}
