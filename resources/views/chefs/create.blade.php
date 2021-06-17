@extends('layouts.app')

@section('content')
    <div class="container"> 
    	<h1 class="text-center">Add Chef</h1>
    	<div class="box">
    		
				 <form action="{{ route('chefs.store') }}" method="POST">
				 	@csrf
				  <div class="form-group">
				    <label for="first_name">First_name:</label>
				    <input type="string"
				     class="form-control" 
				     placeholder="Enter first_name"
				      id="name"
				      name="first_name">
				  </div>


				   <div class="form-group">
				    <label for="last_name">Last_name:</label>
				    <input type="string"
				     class="form-control" 
				     placeholder="Enter last_name"
				      id="name"
				      name="last_name">
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
				    <label for="email">Email:</label>
				    <input type="string"
				     class="form-control" 
				     placeholder="Enter email"
				      id="name"
				      name="email">
				  </div>
			
				  <button type="submit" class="btn btn-primary">Add</button>
				</form>
    	</div>
    </div>
@endsection