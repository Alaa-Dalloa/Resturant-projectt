@extends('layouts.app')

@section('content')
    <div class="container"> 
    	<h1 class="text-center">All Branch</h1>
			<table class="table table-bordered">
			    <thead>
			      <tr>
			        <th>ID</th>
			        <th>Name</th>
			        <th>Control</th>
			      </tr>
			    </thead>
			    <tbody>

			    @foreach($branches as $branch)
			     <tr>
			        <td>{{ $branch->id }}</td>
			        <td>{{ $branch->name }}</td>
			        <td>
			        	<a href="/branches/{{ $branch->id }}/edit" class="btn btn-success">Edit</a>
			        	<a href="/branches/{{ $branch->id }}" class="btn btn-danger">Delete</a>
			        </td>
				<tr>
			    @endforeach
			      
			    </tbody>
			</table>
    </div>
@endsection