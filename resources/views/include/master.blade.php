<!DOCTYPE html>
<html>
<head>
	<title>Master</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('custom_assets/bootstrap/css/bootstrap.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('custom_assets/fontawesome/css/all.min.css') }}">
	<script type="text/javascript" src="{{ asset('custom_assets/bootstrap/js/jquery.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('custom_assets/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
</head>
<body>

	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<a class="navbar-brand" href="#">School System</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item">
					<a class="nav-link" href="{{ route('students.index') }}">Student List </a>
				</li>
			</ul>
		</div>
	</nav>

	@yield('content')

	<nav class="navbar fixed-bottom navbar-expand-lg navbar-light bg-light">
		<p class="navbar-brand font-weight-light text-monospace text-muted" href="#"><small>Copyright © 2020 School System Myanmar, All Rights Reserved.</small></p>
	</nav>

</body>
</html>