@extends('layouts.app')

@section('content')
    <div class="container"> 
    	<h1 class="text-center">Add System</h1>
    	<div class="box">
    		
				 <form action="{{ route('systems.store') }}" method="POST">
				 	@csrf
				  <div class="form-group">
				    <label for="about_us">About_us:</label>
				      <textarea name="about_us"  class="form-control">
				      	
				      </textarea>
				  </div>


				  <div class="form-group">
				    <label for="participation">Participation:</label>
				      <textarea name="participation"  class="form-control">
				      	
				      </textarea>
				  </div>


				   <div class="form-group">
				    <label for="email">Email:</label>
				    <input type="string"
				     class="form-control" 
				     placeholder="Enter email"
				      id="name"
				      name="email">
				  </div>


				   <div class="form-group">
				    <label for="services">Services:</label>
				      <textarea name="services"  class="form-control">
				      	
				      </textarea>
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
				    <label for="is_delivery">Is_delivery:</label>
				    <select class="form-control" name="is_delivery">
				    	<option value="1">YES</option>
				    	<option value="0">NO</option>
				     </select>
				   
				  </div>


                 <div class="form-group">
				    <label for="location">Location:</label>
				      <textarea name="location"  class="form-control">
				      	
				      </textarea>
				  </div>
				 
			
				  <button type="submit" class="btn btn-primary">Add</button>
				</form>
    	</div>
    </div>
@endsection