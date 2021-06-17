<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Branch;
use App\Meal;
use App\Chef;

class BranchsController extends Controller
{
     public function create(){
    $meals = Meal::all();
   	$chefs = Chef::all();
   	return view('branchs.create');
   }

    public function store(Request $request){
	    $branch = new Branch;
	    $branch->name = $request->name;
	    $meal->phone_number = $request->phone_number;
	    $meal->title = $request->title;
	     $meal->meal_id = $request->meal_id;
	    $meal->chef_id = $request->chef_id;
	


	    $branch->save();

	   	return back();
   }

    public function index(){
	   $branchs = Branch::all();

	   return view('branchs.index', compact('branchs'));
   }


     public function destroy($id){
	   //$branchs = branch::where('id',$id)->first();
	   $branch = branch::find($id);

	   $branch->delete();

	   return back();
   }


      public function edit($id){
	   //$branchs = branch::where('id',$id)->first();
	   $branch = branch::find($id);

	   return view ('branchs.edit',compact('branch'));
   }

      public function update($id,Request $request){
	 
	   $branch = branch::find($id);
	   $branch->name = $request->name;

	   
	    $branch->save();

	   	return back();
   }

}
