@extends('layouts.app')

@section('content')
    <div class="container"> 
    	<h1 class="text-center">All Image</h1>
			<table class="table table-bordered">
			    <thead>
			      <tr>
			        <th>ID</th>
			        <th>Name</th>
			        <th>Control</th>
			      </tr>
			    </thead>
			    <tbody>

			    @foreach($images as $image)
			     <tr>
			        <td>{{ $image->id }}</td>
			        <td>{{ $image->name }}</td>
			        <td>
			        	<a href="/images/{{ $image->id }}/edit" class="btn btn-success">Edit</a>
			        	<a href="/images/{{ $image->id }}" class="btn btn-danger">Delete</a>
			        </td>
				<tr>
			    @endforeach
			      
			    </tbody>
			</table>
    </div>
@endsection