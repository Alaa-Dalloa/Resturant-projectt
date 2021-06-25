<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Meal;
use App\Image;
use App\Type;


class MealsController extends Controller
{
   public function create(){
	   	$images = Image::all();
	   	$types = Type::all();
	   	return view('meals.create', compact('images') , compact('types'));
   }

    public function store(Request $request){
	    $meal = new Meal;
	    $meal->name        = $request->name;
	    $meal->price       = $request->price;
	    $meal->description = $request->description;
	    $meal->calories    = $request->calories;
	    $meal->is_delivery = $request->is_delivery;
	    $meal->type_id     = $request->type_id;
	    $meal->image_id    = $request->image_id;


	    $meal->save();
	   	return back();
   }

    public function index(){
	   $meals = Meal::with('branches')->get();


	   return view('meals.index', compact('meals'));
   }


     public function destroy($id){
	   //$meals = meal::where('id',$id)->first();
	   $meal = Meal::find($id);

	   $meal->delete();

	   return back();
   }


      public function edit($id){
	   //$meals = meal::where('id',$id)->first();
	   $meal = Meal::find($id);

	   return view ('meals.edit',compact('meal'));
   }

      public function update($id,Request $request){
	 
	    $meal = Meal::find($id);
	    $meal->name        = $request->name;
	    $meal->price       = $request->price;
	    $meal->description = $request->description;
	    $meal->calories    = $request->calories;
	    $meal->is_delivery = $request->is_delivery;
	    $meal->type_id     = $request->type_id;
	    $meal->image_id    = $request->image_id;


	    $meal->save();
	   	return back();
   }


}
