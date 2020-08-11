<!DOCTYPE html>
<html>
<head>
	<title>CRUD Function </title>
	
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

     <!-- Fonts -->
     <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	<!-- Sweet Alert CSS-->
	<link href="{{ asset('sweetalert/sweetalert.css') }}" rel="stylesheet">

	<!-- Data Table CSS-->
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.1/semantic.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/dataTables.semanticui.min.css">

	<!-- Font Awesome CSS-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

	<!-- Data Table -->
	<script type="text/javascript" charset="utf8" src="https://code.jquery.com/jquery-3.5.1.js"></script>
	<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
	<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.21/js/dataTables.semanticui.min.js"></script>
	<script type="text/javascript" charset="utf8" src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.1/semantic.min.js"></script>

	<!-- Sweet Alert -->
	<script src="{{ asset('sweetalert/sweetalert.min.js') }}" type="text/javascript"> </script>

	<style>
		.checksize{
			display: block;
		}
		body {
  table-layout: fixed;
}
	</style>
</head>
<body>
	<div class="jumbotron jumbotron-fluid text-center">
		<h1>Laravel 7 CRUD </h1>
		<p>By: Md. Moshiur Rahman</p> 
	</div>

	<div class="container">
		@yield('content')
	</div>

	<div class="jumbotron jumbotron-fluid text-center" style="margin-bottom: 0px;">
		<p> &copy; {{ date('Y') }} Copyright. All Rights Reserved.</p>
	</div>

</body>
</html>