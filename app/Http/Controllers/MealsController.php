<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\meal;
use App\Image;


class MealsController extends Controller
{
   public function create(){
   	$images = Image:all();
   	return view('meals.create', compact('images'));
   }

    public function store(Request $request){
	    $meal = new meal;
	    $meal->name = $request->name;
	    $meal->price = $request->price;
	    $meal->description = $request->description;
	    $meal->calories = $request->calories;
	    $meal->is_delivery = $request->is_delivery;
	    $meal->type_id = $request->type_id;
	    $meal->image_id = $request->image_id;


	    $meal->save();

	   	return back();
   }

    public function index(){
	   $meals = meal::all();

	   return view('meals.index', compact('meals'));
   }


     public function destroy($id){
	   //$meals = meal::where('id',$id)->first();
	   $meal = meal::find($id);

	   $meal->delete();

	   return back();
   }


      public function edit($id){
	   //$meals = meal::where('id',$id)->first();
	   $meal = meal::find($id);

	   return view ('meals.edit',compact('meal'));
   }

      public function update($id,Request $request){
	 
	   $meal = meal::find($id);
	   $meal->name = $request->name;

	   
	    $meal->save();

	   	return back();
   }


}
