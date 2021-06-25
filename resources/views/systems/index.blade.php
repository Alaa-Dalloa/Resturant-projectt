@extends('layouts.app')

@section('content')
    <div class="container"> 
    	<h1 class="text-center">All System</h1>
			<table class="table table-bordered">
			    <thead>
			      <tr>
			        <th>ID</th>
			        <th>location</th>
			        <th>Control</th>
			      </tr>
			    </thead>
			    <tbody>

			    @foreach($systems as $system)
			     <tr>
			        <td>{{ $system->id }}</td>
			        <td>{{ $system->location }}</td>
			        <td>
			        	<a href="/systems/{{ $system->id }}/edit" class="btn btn-success">Edit</a>
			        	<a href="/systems/{{ $system->id }}" class="btn btn-danger">Delete</a>
			        </td>
				<tr>
			    @endforeach
			      
			    </tbody>
			</table>
    </div>
@endsection