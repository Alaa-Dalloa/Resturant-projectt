@extends('layouts.app')

@section('content')
    <div class="container"> 
    	<h1 class="text-center">Add Type</h1>
    	<div class="box">
    		
				 <form action="{{ route('types.store') }}" method="POST">
				 	@csrf
				  <div class="form-group">
				    <label for="name">Name:</label>
				    <input type="string"
				     class="form-control" 
				     placeholder="Enter name"
				      id="name"
				      
				      name="name">
				  </div>

			
				  <button type="submit" class="btn btn-primary">Add</button>
				</form>
    	</div>
    </div>
@endsection