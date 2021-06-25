@extends('layouts.app')

@section('content')
    <div class="container"> 
    	<h1 class="text-center">Edit Meal</h1>
    	<div class="box">
    		
				 <form action="/meals/{{ $meal->id}}/update" method="POST"  enctype="multipart/form-data ">
				 	@csrf
				   <div class="form-group">
				    <label for="name">Name:</label>
				    <input type="string"
				     class="form-control" 
				     placeholder="Enter name"
				      id="name"
				      value="{{ $meal->name }} " 
				      name="name">
				  </div>

				
				  <div class="form-group">
				    <label for="price">price:</label>
				    <input type="double"
				     class="form-control" 
				     placeholder="Enter price"
				      id="price"
				      value="{{ $meal->price }} " 
				      name="price">
				  </div>

				  
				  <div class="form-group">
				    <label for="description">Description:</label>
				      <textarea name="description"  class="form-control"  value="{{ $meal->escription }} " >
				      	
				      </textarea>
				  </div>
				 

				 
				  <div class="form-group">
				    <label for="calories">calories:</label>
				    <input type="double"
				     class="form-control" 
				     placeholder="Enter calories"
				      id="pcalories"
				      value="{{ $meal->calories }} " 
				      name="calories">
				  </div>
				 

				  
				  <div class="form-group">
				    <label for="is_delivery">Is_delivery:</label>
				    <select class="form-control" name="is_delivery" value="{{ $meal->is_delivery }} " >
				    	<option value="1">YES</option>
				    	<option value="0">NO</option>
				     </select>
				   
				  </div>


				  <div class="form-group">
				    <label for="type_id">Type:</label>
				    <select class="form-control" name="type_id">
				    	@foreach($types as $one)
				    	<option value="{{$one->id}}">{{$one->name}}</option>
				    	@endforeach
				    </select>
				  </div>

				    <div class="form-group">
				    <label for="image_id">Image:</label>
				    <select class="form-control" name="image_id">
				    	@foreach($images as $one)
				    	<option value="{{$one->id}}">{{$one->name}}</option>
				    	@endforeach
				    </select>
				  </div>

				 
				 
			
				  <button type="submit" class="btn btn-primary">update</button>
				</form>
    	</div>
    </div>
@endsection