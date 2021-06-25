@extends('layouts.app')

@section('content')
    <div class="container"> 
    	<h1 class="text-center">All Chef</h1>
			<table class="table table-bordered">
			    <thead>
			      <tr>
			        <th>ID</th>
			        <th>First_name</th>
			        <th>Control</th>
			      </tr>
			    </thead>
			    <tbody>

			    @foreach($chefs as $chef)
			     <tr>
			        <td>{{ $chef->id }}</td>
			        <td>{{ $chef->first_name}}</td>
			        <td>
			        	<a href="/chefs/{{ $chef->id }}/edit" class="btn btn-success">Edit</a>
			        	<a href="/chefs/{{ $chef->id }}" class="btn btn-danger">Delete</a>
			        </td>
				<tr>
			    @endforeach
			      
			    </tbody>
			</table>
    </div>
@endsection