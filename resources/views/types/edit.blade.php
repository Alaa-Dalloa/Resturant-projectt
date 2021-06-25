@extends('layouts.app')

@section('content')
    <div class="container"> 
    	<h1 class="text-center">Edit Type</h1>
    	<div class="box">
    		
				 <form action="/types/{{ $type->id}}/update" method="POST">
				 	@csrf
				  <div class="form-group">
				    <label for="name">Name:</label>
				    <input type="string"
				     class="form-control" 
				     placeholder="Enter name"
				      id="name"
				      value="{{ $type->name }}" 
				      name="name">
				  </div>



				 
			
				  <button type="submit" class="btn btn-primary">update</button>
				</form>
    	</div>
    </div>
@endsection