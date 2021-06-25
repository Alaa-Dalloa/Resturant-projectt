@extends('layouts.app')

@section('content')
    <div class="container"> 
    	<h1 class="text-center">Add Image</h1>
    	<div class="box">
    		
				 <form action="{{ route('images.store') }}" method="POST" enctype="multipart/form-data " >
				 	@csrf
				  <div class="form-group">
				    <label for="name">Name:</label>
				    <input type="file"
				     class="form-control" 
				      name="name">
				  </div>




				 
			
				  <button type="submit" class="btn btn-primary">Add</button>
				</form>
    	</div>
    </div>
@endsection