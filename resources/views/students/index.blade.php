@extends('include.master')
@section('content')

<div class="container table-responsive mt-5">
	<h1>Student List</h1>
	<table class="table table-bordered table-hover">
		<thead>
			<tr>
				<th scope="col"># Roll Number</th>
				<th scope="col">Name</th>
				<th scope="col">Email</th>
				<th scope="col">Phone</th>
				<th scope="col">Address</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($students as $student)
			<tr>
				<th scope="row">{{ $student->rollno }}</th>
				<td>{{ $student->name }}</td>
				<td>{{ $student->email }}</td>
				<td>{{ $student->phoneno }}</td>
				<td>{{ $student->address }}</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>

@endsection