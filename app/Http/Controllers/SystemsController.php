<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\System;

class SystemsController extends Controller
{
      public function create(){
   	return view('systems.create');
   }

    public function store(Request $request){
	    $system = new System;
	    $system->about_us    = $request->about_us;
	    $system->participation = $request->participation;
	    $system->email         = $request->email;
	    $system->services      = $request->services;
	    $system->phone_number  = $request->phone_number;
	    $system->location      = $request->location;

	    $system->save();
	   	return back();
   }

    public function index(){
	   $systems = System::all();

	   return view('systems.index', compact('systems'));
   }


     public function destroy($id){
	   //$systems = system::where('id',$id)->first();
	   $system = System::find($id);

	   $system->delete();

	   return back();
   }


      public function edit($id){
	   //$systems = system::where('id',$id)->first();
	   $system = System::find($id);

	   return view ('systems.edit',compact('system'));
   }

      public function update($id,Request $request){
	 
	    $system = System::find($id);
	    $system->about_us    = $request->about_us;
	    $system->participation = $request->participation;
	    $system->email         = $request->email;
	    $system->services      = $request->services;
	    $system->phone_number  = $request->phone_number;
	    $system->location      = $request->location;

	    $system->save();
	   	return back();
   }
}
