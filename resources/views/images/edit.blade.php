@extends('layouts.app')

@section('content')
    <div class="container"> 
    	<h1 class="text-center">Edit Image</h1>
    	<div class="box">
    		
				 <form action="/images/{{ $image->id}}/update" method="POST"  enctype="multipart/form-data ">
				 	@csrf
				 <div class="form-group">
				    <label for="name">Name:</label>
				    <input type="file"
				     class="form-control"
				     value=" {{ $image->name }}"  
				      name="name">
				  </div>


				 
			
				  <button type="submit" class="btn btn-primary">update</button>
				</form>
    	</div>
    </div>
@endsection