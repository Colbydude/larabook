<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Larabook</title>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
	<link href="/css/main.css" rel="stylesheet">
	<script src="//code.jquery.com/jquery.js"></script>
</head>
<body>

	@include("layouts.partials.nav")

	<div class="container">
		@yield("content")
	</div>
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</body>
</html>
