<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Larabook</title>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
	<link href="/css/main.css" rel="stylesheet">
</head>
<body>

	@include("layouts.partials.nav")

	<div class="container">
		@include("flash::message")

		@yield("content")
	</div>

	<div class="container text-center">
		<p><small>Hosted with <a href="https://forge.laravel.com" target="_blank">Laravel Forge</a> and <a href="https://www.digitalocean.com/?refcode=37f8b131538c" target="_blank">DigitalOcean</a></small></p>
		@if (file_exists('build/version.txt'))
			<p><small>Version: <a href="https://github.com/Colbydude/larabook/commit/{{ file_get_contents('build/version.txt') }}">{{ file_get_contents('build/version.txt') }}</a></small></p>
		@endif
	</div>

	<script src="//code.jquery.com/jquery.js"></script>
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
	<script>
		$('#flash-overlaymodal').modal();

		$('.comments__create-form').on('keydown', function(e)
		{
			if (e.keyCode == 13)
			{
				e.preventDefault();
				$(this).submit();
			}
		});
	</script>
</body>
</html>
