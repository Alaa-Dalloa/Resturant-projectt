@extends('layouts.app')

@section('content')
    <div class="container"> 
    	<h1 class="text-center">Add Branch</h1>
    	<div class="box">
    		
				 <form action="{{ route('branchs.store') }}" method="POST">
				 	@csrf
				  <div class="form-group">
				    <label for="name">Name:</label>
				    <input type="string"
				     class="form-control" 
				     placeholder="Enter name"
				      id="name"
				      name="name">
				  </div>

				
				  <div class="form-group">
				    <label for="phone_number">Phone_number:</label>
				    <input type="int"
				     class="form-control" 
				     placeholder="Enter phone_number"
				      id="name"
				      name="phone_number">
				  </div>


	             <div class="form-group">
				    <label for="title">Title:</label>
				    <input type="string"
				     class="form-control" 
				     placeholder="Enter title"
				      id="name"
				      name="title">
				  </div>


				  	 <div class="form-group">
				    <label for="meal_id">Meal:</label>
				    <select class="form-control" name="meal_id">
				    	@foreach($meals as $one)
				    	<option value="{{$one->id}}">{{$one->name}}</option>
				    	@endforeach
				    </select>
				  </div>

				    <div class="form-group">
				    <label for="chef_id">Chef:</label>
				    <select class="form-control" name="chef_id">
				    	@foreach($chefs as $one)
				    	<option value="{{$one->id}}">{{$one->name}}</option>
				    	@endforeach
				    </select>
				  </div>

			
				  <button type="submit" class="btn btn-primary">Add</button>
				</form>
    	</div>
    </div>
@endsection