@extends('layouts.app')

@section('content')
    <div class="container"> 
    	<h1 class="text-center">Add Meal</h1>
    	<div class="box">
    		
				 <form action="{{ route('meals.store') }}" method="POST">
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
				    <label for="price">price:</label>
				    <input type="double"
				     class="form-control" 
				     placeholder="Enter price"
				      id="price"
				      name="price">
				  </div>

				  
				  <div class="form-group">
				    <label for="description">description:</label>
				    <input type="text"
				     class="form-control" 
				     placeholder="Enter description"
				      id="description"
				      name="description">
				  </div>
				 

				 
				  <div class="form-group">
				    <label for="calories">calories:</label>
				    <input type="double"
				     class="form-control" 
				     placeholder="Enter calories"
				      id="pcalories"
				      name="calories">
				  </div>
				 

				  
				  <div class="form-group">
				    <label for="is_delivery">is_delivery:</label>
				    <input type="boolean"
				     class="form-control" 
				     placeholder="Enter is_delivery"
				      id="is_delivery"
				      name="is_delivery">
				  </div>


				  <div class="form-group">
				    <label for="type_id">type_id:</label>
				    <input type="bigInteger"
				     class="form-control" 
				     placeholder="Enter type_id"
				      id="type_id"
				      name="type_id">
				  </div>



				  <div class="form-group">
				    <label for="image_id">image_id:</label>
				    <input type="bigInteger"
				     class="form-control" 
				     placeholder="Enter image_id"
				      id="image_id"
				      name="image_id">
				  </div>




				 
			
				  <button type="submit" class="btn btn-primary">Add</button>
				</form>
    	</div>
    </div>
@endsection