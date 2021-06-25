@extends('layouts.app')

@section('content')
    <div class="container"> 
    	<h1 class="text-center">All Type</h1>
			<table class="table table-bordered">
			    <thead>
			      <tr>
			        <th>ID</th>
			        <th>Name</th>
			        <th>Control</th>
			      </tr>
			    </thead>
			    <tbody>

			    @foreach($types as $type)
			     <tr>
			        <td>{{ $type->id }}</td>
			        <td>{{ $type->name }}</td>
			        <td>
			        	<a href="/types/{{ $type->id }}/edit" class="btn btn-success">Edit</a>
			        	<a href="/types/{{ $type->id }}" class="btn btn-danger">Delete</a>
			        </td>
				<tr>
			    @endforeach
			      
			    </tbody>
			</table>
    </div>
@endsection