<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Image;

class ImagesController extends Controller
{
    public function create(){
   	return view('images.create');
   }

    public function store(Request $request){
	    $image = new Image;
	    $image->name = $request->name;
	


	    $image->save();

	   	return back();
   }

    public function index(){
	   $images = Image::all();

	   return view('images.index', compact('images'));
   }


     public function destroy($id){
	   //$images = image::where('id',$id)->first();
	   $image = image::find($id);

	   $image->delete();

	   return back();
   }


      public function edit($id){
	   //$images = image::where('id',$id)->first();
	   $image = image::find($id);

	   return view ('images.edit',compact('image'));
   }

      public function update($id,Request $request){
	 
	   $image = image::find($id);
	   $image->name = $request->name;

	   
	    $image->save();

	   	return back();
   }

}
