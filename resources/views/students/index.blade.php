@extends('include.master')
@section('content')

<table border="1" cellpadding="10">
	<tr>
		<th>Roll Number</th>
		<th>Name</th>
		<th>Email</th>
		<th>Phone Number</th>
		<th>Address</th>
	</tr>
	@foreach ($students as $student)
	<tr>
		<td>{{ $student->rollno }}</td>
		<td>{{ $student->name }}</td>
		<td>{{ $student->email }}</td>
		<td>{{ $student->phoneno }}</td>
		<td>{{ $student->address }}</td>
	</tr>
	@endforeach
</table>

@endsection