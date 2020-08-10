<!DOCTYPE html>
<html>
<head>
	<title>CRUD Function </title>
	
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.css">

	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">

	<!-- <script type="text/javascript" charset="utf8" src="https://code.jquery.com/jquery-3.5.1.js"></script> -->
	<link href="{{ asset('sweetalert/sweetalert.css') }}" rel="stylesheet">
	<script src="{{ asset('sweetalert/sweetalert.min.js') }}" type="text/javascript"> </script>

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

	<div class="container-fluid ">
		@yield('content')
	</div>

	<div class="jumbotron text-center" style="margin-bottom:0">
		<p> &copy; {{ date('Y') }} Copyright. All Rights Reserved.</p>
	</div>


</body>
</html>