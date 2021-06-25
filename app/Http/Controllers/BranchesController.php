<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Meal;
use App\Branch;
use App\Chef;

class BranchesController extends Controller
{
     public function create(){
	    $meals = Meal::all();
	   	$chefs = Chef::all();
	   	return view('branches.create', compact('meals') , compact('chefs'));
   }

    public function store(Request $request){
	    $branch = new Branch;
	    $branch->name         = $request->name;
	    $branch->phone_number = $request->phone_number;
	    $branch->title        = $request->title;
	    $branch->meal_id      = $request->meal_id;
	    $branch->chef_id      = $request->chef_id;

	    $branch->save();
	   	return back();
   }

    public function index(){
	   $branches = Branch::all();

	   return view('branches.index', compact('branches'));
   }


     public function destroy($id){
	   //$branches = branch::where('id',$id)->first();
	   $branch = Branch::find($id);

	   $branch->delete();

	   return back();
   }


      public function edit($id){
	   //$branches = branch::where('id',$id)->first();
	   $branch = Branch::find($id);

	   return view ('branches.edit',compact('branch'));
   }

      public function update($id,Request $request){
	 
	   $branch = Branch::find($id);
	    $branch->name         = $request->name;
	    $branch->phone_number = $request->phone_number;
	    $branch->title        = $request->title;
	    $branch->meal_id      = $request->meal_id;
	    $branch->chef_id      = $request->chef_id;

	    $branch->save();
	   	return back();
   }

}
