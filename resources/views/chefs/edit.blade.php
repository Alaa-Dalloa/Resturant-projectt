@extends('layouts.app')

@section('content')
    <div class="container"> 
    	<h1 class="text-center">Edit Chef</h1>
    	<div class="box">
    		
				 <form action="/chefs/{{ $chef->id}}/update" method="POST">
				 	@csrf
				  <div class="form-group">
				    <label for="first_name">First_name:</label>
				    <input type="string"
				     class="form-control" 
				     placeholder="Enter first_name"
				      id="name"
				      value=" {{ $chef->first_name }}" 
				      name="first_name">
				  </div>


				   <div class="form-group">
				    <label for="last_name">Last_name:</label>
				    <input type="string"
				     class="form-control" 
				     placeholder="Enter last_name"
				      id="name"
				      value=" {{ $chef->last_name }}" 
				      name="last_name">
				  </div>


				   <div class="form-group">
				    <label for="phone_number">Phone_number:</label>
				    <input type="int"
				     class="form-control" 
				     placeholder="Enter phone_number"
				      id="name"
				      value=" {{ $chef->phone_number }}" 
				      name="phone_number">
				  </div>

				 
				   <div class="form-group">
				    <label for="email">Email:</label>
				    <input type="string"
				     class="form-control" 
				     placeholder="Enter email"
				      id="name"
				      value=" {{ $chef->email}}" 
				      name="email">
				  </div>
			

				 
			
				  <button type="submit" class="btn btn-primary">update</button>
				</form>
    	</div>
    </div>
@endsection