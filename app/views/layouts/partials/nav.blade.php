<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			{{ link_to_route('home', 'Larabook', null, ['class' => 'navbar-brand']) }}
		</div>
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav">
				<li class="active">{{ link_to_route('home', 'Home', null, null) }}</li>
			</ul>

			<ul class="nav navbar-nav navbar-right">
				@if ($currentUser)
					<li class="dropdown">
						<a href="#" data-toggle="dropdown">{{ $currentUser->username }} <span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="#">Action</a></li>
						</ul>
					</li>
				@else
					<li><a href="/login">Log In</a></li>
				@endif
			</ul>
		</div>
	</div>
</nav>
