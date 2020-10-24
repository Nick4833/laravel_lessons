<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<h1>Student List</h1>

	@foreach ($students as $student)
		<h4>Name: {{ $student['name'] }}</h4>
		<h4>Age: {{ $student['age'] }}</h4>
	@endforeach	

{{-- 	@foreach ($students as $student)
		<h4>Name: {{ $student->name }}</h4>
		<h4>Age: {{ $student->age }}</h4>
	@endforeach --}}

</body>
</html>