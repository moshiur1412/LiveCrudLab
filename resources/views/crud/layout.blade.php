<!DOCTYPE html>
<html>
<head>
	<title>CRUD Function </title>
	
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">

	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.css">

	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">

	<script type="text/javascript" charset="utf8" src="https://code.jquery.com/jquery-3.5.1.js"></script>
	<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
	<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>

	<style>
		.checksize{
			display: block;
		}
	</style>
</head>
<body>
	<div class="jumbotron text-center">
		<h1>Laravel 7 CRUD </h1>
		<p>By: Md. Moshiur Rahman</p> 
	</div>

	<div class="container">
		@yield('content')
	</div>

	<div class="jumbotron text-center" style="margin-bottom:0">
		<p> &copy; {{ date('Y') }} Copyright. All Rights Reserved.</p>
	</div>


</body>
</html>