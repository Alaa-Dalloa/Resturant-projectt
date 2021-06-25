<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Type;

class TypesController extends Controller
{
    public function create(){
   	return view('types.create');
   }

    public function store(Request $request){
	    $type = new Type;
	    $type->name = $request->name;

	    $type->save();
	   	return back();
   }

    public function index(){
	   $types = Type::with('meals')->get();


	   return view('types.index', compact('types'));
   }


     public function destroy($id){
	   //$types = type::where('id',$id)->first();
	   $type = Type::find($id);

	   $type->delete();

	   return back();
   }


      public function edit($id){
	   //$types = type::where('id',$id)->first();
	   $type = Type::find($id);

	   return view ('types.edit',compact('type'));
   }

      public function update($id,Request $request){
	 
	   $type = Type::find($id);
	   $type->name = $request->name;

	    $type->save();
	   	return back();
   }

}

