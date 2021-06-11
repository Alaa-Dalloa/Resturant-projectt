@extends('layouts.app')

@section('content')
    <div class="container"> 
    	<h1 class="text-center">All Meal</h1>
			<table class="table table-bordered">
			    <thead>
			      <tr>
			        <th>ID</th>
			        <th>Name</th>
			        <th>Control</th>
			      </tr>
			    </thead>
			    <tbody>

			    @foreach($meals as $meal)
			     <tr>
			        <td>{{ $meal->id }}</td>
			        <td>{{ $meal->name }}</td>
			        <td>
			        	<a href="/meals/{{ $meal->id }}/edit" class="btn btn-success">Edit</a>
			        	<a href="/meals/{{ $meal->id }}" class="btn btn-danger">Delete</a>
			        </td>
				<tr>
			    @endforeach
			      
			    </tbody>
			</table>
    </div>
@endsection